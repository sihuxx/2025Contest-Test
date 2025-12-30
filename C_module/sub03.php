<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./style/component.css">
    <link rel="stylesheet" href="./style/sub02.css">
    <link rel="stylesheet" href="./style/item.css">
    <link rel="stylesheet" href="./asset/fontawesome/css/font-awesome.css">
    <style>
        main {
            height: 700px;
        }
    </style>
</head>

<body>
    <div class="body-container">
        <!-- 헤더 -->
  <?php require_once './db.php'; ?>
  <?php require_once './header.php'; ?>
        <!-- 인기 상품 목록 -->
        <main>
            <h1>인기상품</h1>
            <div class="items">
                <?php
                $category = ["건강식품", "디지털", "팬시", "향수", "헤어케어"];

                foreach($category as $cate) {
                    $items = DB::fetchAll("select * from item where cate = '$cate' and is_popular = 1 limit 1");

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
        </main>
        <!-- 푸터 -->
<?php require_once './footer.php'; ?>
    </div>
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