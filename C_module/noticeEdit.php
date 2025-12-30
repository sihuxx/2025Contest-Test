<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 수정</title>
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
    $notice = DB::fetch("select * from notice where idx = '$idx'");
    ?>

    <main>
        <form action="./noticeEditAction.php?idx=<?=$idx?>" method="post">
            <h1>공지사항 수정</h1>
        <div class="box">
            <label for="name">타이틀</label>
            <input type="text" id="name" name="name" value="<?= $notice->title ?>" required>
        </div>
        <div class="box">
            <label>유형</label>
            <select name="type">
                <option value="일반">일반</option>
                <option value="이벤트">이벤트</option>
            </select>
        </div>
        <input type="submit" value="수정" required>
    </form>
    </main>

<?php require_once './footer.php'; ?>
</body>
</html>