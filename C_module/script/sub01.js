const mottos = $$(".mottos > div")
const des = (e) => $(`.des-container > .${e}`)

mottos.forEach(e => {
    e.addEventListener('mouseenter', () => {
        $$(".mottoName").forEach(t => {
            t.style.opacity = 0
        })
        mottos.forEach(e2 => e2.style.backgroundImage = `url(./images/motto/${e.className}.jpg)`)
        des(e.className).style.opacity = 1
        e.querySelector('.mottoName').style.opacity = 1
    })
    e.addEventListener('mouseleave', () => {
        $$(".mottoName").forEach(t => {
            t.style.opacity = 1
            mottos.forEach(e2 => e2.style.backgroundImage = `url(./images/motto/${e2.className}.jpg)`)
            des(e.className).style.opacity = 0
        })
    })
})