const video = $('video')
const ctrlContainer = $('.control-container')
const ctrls = $$('[class*="ctrl"]')
let isAuto = localStorage.getItem("auto") === true

if (isAuto) {
    video.play()
    video.muted = true
}

const controls = {
    ctrl01: () => video.play(),
    ctrl02: () => video.pause(),
    ctrl03: () => { video.pause(); video.currentTime = 0 },
    ctrl04: () => video.currentTime -= 10,
    ctrl05: () => video.currentTime += 10,
    ctrl06: () => video.playbackRate -= 0.1,
    ctrl07: () => video.playbackRate += 0.1,
    ctrl08: () => video.playbackRate = 1,
    ctrl09: () => video.loop = !video.loop,
    ctrl10: () => {
        isAuto = !isAuto
        localStorage.setItem("auto", isAuto)
        isAuto ? video.play() : video.pause()
    },
    ctrl11: () => ctrlContainer.style.display = ctrlContainer.style.display === 'none' ? 'flex' : 'none',
}

ctrls.forEach(e => {
    e.addEventListener('click', () => {
        if (controls[e.className]) controls[e.className]()
    })
})

// 드래그 앤 드롭

const modal = $('dialog')
const openModal = $('.open-modal')
const closeModal = $('.close')
const cartContainer = $('.cart')
const userId = $('.user-Id')

let cartitem = $$('.cart .item')
let dropitem = $$('.drop .item')
let cost = 0
let cate = '건강식품'
let user = ''

modal.style.display = 'none'
openModal.addEventListener('click', () => modal.style.display = 'flex')
closeModal.addEventListener('click', () => modal.style.display = 'none')

function gen() {
    const text = 'QWERTYUIOPASDFGHJKLZXCVBNM1234567890'.split("")
    for (let i = 0; i < 6; i++) {
        const random = Math.floor(Math.random() * text.length)
        user += text[random]
        userId.textContent += text[random]
    }
}

gen()

function draggable() {
    cartitem = $$('.cart .item')

    cartitem.forEach(e => {
        e.draggable = true
    })

    cartitem.forEach(e => {
        e.addEventListener('dragstart', (event) => {
            event.dataTransfer.setData('text/plain', e.outerHTML)
            event.dataTransfer.setData('id', e.querySelector("img").alt)
        })
    })
}

function dragAndDrop() {
    const drop = $(".drop")
    const getParent = (e) => document.querySelector(`.drop .item:has(img[alt='${e}'])`)

    drop.addEventListener("dragover", (event) => {
        event.preventDefault()
    })

    drop.addEventListener("drop", (event) => {
        const data = event.dataTransfer.getData("text/plain")
        const id = event.dataTransfer.getData("id")

        const origin = $(`.cart .item:has(img[alt="${id}"])`)
        origin.style.opacity = 0.5

        const newDiv = document.createElement('div')
        newDiv.innerHTML = data
        newDiv.classList.add("drop-wrap")

        if (!getParent(id)) {
            newDiv.draggable = true
            drop.appendChild(newDiv)
        };

        if (!getParent(id).querySelector(".count")) {
            const count = document.createElement('div')
            count.innerHTML = `
      <div class="count">
      <input type="number" min="1" value="1" onchange='caluPrice()' onInput='caluPrice()'/>
      </div>
      <div >총가격: <span class="total-price"></span></div>
      `

            getParent(id).querySelector(".item-content").appendChild(count)
        } else {
            getParent(id).querySelector("input").value = parseInt(getParent(id).querySelector("input").value) + 1
        }

        $$(".drop .item").forEach((event) => {
            event.addEventListener("dragstart", (e2) => {
                const dropId = e2.dataTransfer.setData("dropID", event.querySelector("img").alt)
            })
        })

        $("body").addEventListener("dragover", (event) => {
            event.preventDefault()
        })

        $("body").addEventListener("drop", (event) => {
            event.preventDefault()

            if (event.target.classList.contains("drop")) return;

            const dropID = event.dataTransfer.getData("dropID")
            $(`.drop .item:has(img[alt="${dropID}"])`)?.closest(".drop-wrap").remove()

            const cartItem = $(`.cart .item:has(img[alt="${dropID}"])`)
            if (cartItem) {
                cartItem.style.opacity = 1
            }

            caluPrice()
        })

        caluPrice()
    })
}
async function cart() {
    fetch('./asset/data.json')
        .then(res => res.json())
        .then((data) => {
            cartContainer.innerHTML = ''

            Object.keys(data["product"][cate]).forEach(e => {
                const item = data["product"][cate][e]

                cartContainer.innerHTML += `
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/${cate}/${e}.PNG" alt="${cate}${e}">
                        </div>
                        <div class="item-content">
                            <div class="item-name">${item.title}</div>
                            <div class="item-price">
                                <div class="price">${item.price}</div>
                                <div class="dis">${item.discount}</div>
                            </div>
                        </div>
                    </div>
                `
            })

            dropitem = $$(".drop .item")

            dropitem.forEach(e => {
                const itemId = e.querySelector('img').alt

                if ($(`.cart img[alt="${itemId}"]`)) {
                    $(`.cart .item:has(img[alt="${itemId}"])`).style.opacity = 0.5
                }
            })
            draggable()
        })
}

function caluPrice() {
    let all = 0
    const dropitems = $$('.drop .item')

    dropitems.forEach(e => {
        let total = parseInt(e.querySelector('input').value) * parseInt(e.querySelector('.price').textContent.replace(/[^0-9]/g, ""))
        if (!total) total = 0
        e.querySelector('.total-price').textContent = total.toLocaleString('en-us')
        all += total
    })
    $('.cost').textContent = all
    cost = all
}

$$('.category > div').forEach(e => {
    e.addEventListener('click', () => {
        $$('.category > div').forEach(e2 => e2.classList.remove('active'))
        cate = e.textContent
        e.classList.add('active')
        cart()
    })
})

function userBuy() {
    const notice = $('.buy-alert')
    notice.style.display = 'flex'
    $('.user').textContent = user
    $('.user-cost').textContent = cost
    modal.style.display = 'none'
    setInterval(() => {
        notice.style.display = 'none'
    }, 3000)
}

cart()
dragAndDrop()