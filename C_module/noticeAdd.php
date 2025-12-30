<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 추가</title>
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
    ?>

    <main>
        <form action="./noticeAddAction.php" method="post">
            <h1>공지사항 추가</h1>
        <div class="box">
            <label for="name">제목</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="box">
            <label>유형</label>
            <select name="type">
                <option value="일반">일반</option>
                <option value="이벤트">이벤트</option>
            </select>
        </div>
        <input type="submit" value="추가" required>
    </form>
    </main>

<?php require_once './footer.php'; ?>
</body>
</html>