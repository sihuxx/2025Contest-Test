<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>장바구니</title>
    <link rel="stylesheet" href="../style/component.css">
    <link rel="stylesheet" href="../style/sub04.css">
    <link rel="stylesheet" href="../style/item.css">
    <link rel="stylesheet" href="../asset/fontawesome/css/font-awesome.css">
</head>

<body>
    <div class="body-container">
        <!-- 헤더 -->
  <?php require_once './db.php'; ?>
  <?php require_once './lib.php'; ?>
  <?php require_once './header.php'; ?>

        <!-- 장바구니 -->
        <main>
            <h1>장바구니</h1>
            <div class="items">
               <?php
               $user = $_SESSION["ss"] ?? false;

               if($user != false) {
                $items = DB::fetchAll("select i.*, c.count from item i join cart c on i.idx = itemId and c.userId = '$user->id'"); ?>

                <?php
                if (count($items) > 0) {
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
                    <div class="count">
                        <input type="number" min="1" value="1" onchange='caluPrice()' onInput='caluPrice()'/>
                    </div>
                    <div >총가격: <span class="total-price"></span></div>
                </div>
                <?php }
                } else { ?>
                    <div>장바구니가 비어있습니다.</div>
                <?php } 
               } else { ?> 
                <div>로그인이 필요한 기능입니다.</div>
               <?php } ?>

            </div>
            <div class="total-check">
                <div class="total-cost">결제 금액: 16,5000원</div>
                <a href="#">구매하기</a>
            </div>
        </main>

        <!-- 푸터 -->
<?php require_once './footer.php'; ?>
    </div>
</body>

</html>