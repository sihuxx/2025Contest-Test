<?php
    require_once './db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전체상품</title>
    <link rel="stylesheet" href="./style/component.css"<?php echo time() ?>>
    <link rel="stylesheet" href="./style/sub02.css">
    <link rel="stylesheet" href="./style/item.css">
    <link rel="stylesheet" href="./asset/fontawesome/css/font-awesome.css">
</head>

<body>
    <div class="body-container">
        <!-- 헤더 -->
  <?php require_once './header.php'; ?>
        <!-- 전체 상품 -->
        <main>
            <h1>전체 상품</h1>
            <div class="video-content">
                <video src="../asset/AD.mp4"></video>
                <div class="control-container">
                    <div class="ctrl01">재생</div>
                    <div class="ctrl02">일시정지</div>
                    <div class="ctrl03">정지</div>
                    <div class="ctrl04">되감기(10초씩)</div>
                    <div class="ctrl05">빨리감기(10초씩)</div>
                    <div class="ctrl06">감속하기(0.1배씩)</div>
                    <div class="ctrl07">배속하기(0.1배씩)</div>
                    <div class="ctrl08">배속 원래대로 돌리기</div>
                    <div class="ctrl09">반복 켜기/끄기</div>
                    <div class="ctrl10">자동재생 켜기/끄기</div>
                </div>
                <div class="ctrl11">컨트롤러 보이기/숨기기</div>
            </div>
            <div class="items">
                <?php
                $category = ["건강식품", "디지털", "팬시", "향수", "헤어케어"];

                foreach($category as $cate) {
                    $items = DB::fetchAll("select * from item where cate = '$cate' order by price desc");

                    foreach($items as $value) { ?>
                        <div class="item" data-id="<?= $value->idx ?>">
                    <div class="img-cover">
                        <img src="<?= $value->img ?>" alt="<?= $value->cate ?><?= $value->idx ?>">
                    </div>
                    <div class="item-content">
                        <div class="item-name"><?= $value->title ?></div>
                        <div class="item-price">
                            <div class="dis"><?= $value->discount ?></div>
                            <div class="price"><?= $value->price ?></div>
                        </div>
                    </div>
                    <div class="btns">
                        <a href="#">구매하기</a>
                        <a href="#" class="get">장바구니 담기</a>
                    </div>
                </div>
                <?php    
                };
                ?>
                 <?php } ?> 
                
            </div>
            <div class="buy-alert">
                방금 <span class="user"></span>님이
                <span class="user-cost"></span>원을 결제하셨습니다!
            </div>

            <div class="open-modal">비회원 주문하기</div>

            <dialog>
                <div class="none-cart">
                    <header>
                        <div class="user-Id"></div>
                        <div class="title">비회원 주문하기</div>
                        <div class="close">닫기</div>
                    </header>
                    <main>
                        <div class="category">
                            <div class="active">건강식품</div>
                            <div>디지털</div>
                            <div>팬시</div>
                            <div>향수</div>
                            <div>헤어케어</div>
                        </div>
                        <div class="cart"></div>
                        <div class="drop"></div>
                    </main>
                    <footer>
                        <div class="cost-box"><span class="cost"></span>원</div>
                        <div class="buy-btn" onclick="userBuy()">주문하기</div>
                    </footer>
                </div>
            </dialog>
        </main>
<?php require_once './footer.php'; ?>
    </div>
    <script src="./script/lib.js"></script>
    <script src="./script/sub02.js"></script>
</body>
<script>
    const buyBtns = [...document.querySelectorAll('.get')]

    buyBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const itemIdx = btn.closest(".item").getAttribute("data-id")

            fetch(`./cartAction.php?idx=${itemIdx}`)
                .then(res => res.text())
                .then(data => {
                    alert(data);
                })
        })
    })
</script>

</html>