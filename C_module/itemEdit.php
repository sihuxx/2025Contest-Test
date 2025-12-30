<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상품 수정</title>
    <style>
        main {
            height: 900px;
            display: flex;
            justify-content: center;
            align-items:center;

            & h1 {
                 font-size: 40px;
                color: #00b7ff;
            }
        }
    </style>
</head>

<body>
    <?php
    require_once './db.php';
    require_once './header.php';

    $idx = $_GET["idx"];
    $item = DB::fetch("select * from item where idx = '$idx'");
    ?>

    <main>
        <form action="./itemEditAction.php?idx=<?=$idx?>" method="post">
            <h1>상품 수정</h1>
        <div class="box">
            <label for="file">파일</label>
            <input type="file" id="file" name="file" value="<?= $item->img ?>" required>
        </div>
        <div class="box">
            <label for="name">상품명</label>
            <input type="text" id="name" name="name" value="<?= $item->title ?>" required>
        </div>
        <div class="box">
            <label for="des">상품 설명</label>
            <input type="text" id="des" name="des" value="<?= $item->des ?>" required>
        </div>
        <div class="box">
            <label for="price">가격</label>
            <input type="text" id="price" name="price" value="<?= $item->price ?>" required>
        </div>
        <div class="box">
            <label for="cate">카테고리</label>
            <input type="text" id="cate" name="cate" value="<?= $item->cate ?>" required>
        </div>
        <input type="submit" value="수정" required>
    </form>
    </main>

<?php require_once './footer.php'; ?>
</body>
</html>