<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항 관리</title>
    <style>
        main {
            padding: 180px 0;
            display: flex;
            flex-direction:column;
            align-items:center;
        }

        h1 {
            font-size: 40px;
            color: #00b7ff;
            margin: 80px 0;
        }

        table, td, th {
            padding: 20px 40px;
            border-collapse: collapse;
            border:1px solid;
            text-align: center;
            font-size: 18px;
        }
        td a {
            padding: 5px;
            border: 1px solid;
            border-radius:10px;
        }
        .add-box {
            margin-bottom: 100px;
        }
        
        .add-box a {
            display: block;
            text-align: center;
            width: 300px;
            font-size: 22px;
            font-weight: bold;
            color:white;
            border-radius:10px;
            padding: 20px;
            background: #00b7ff;
        }
    </style>
</head>
<body>
    <?php
    require_once './db.php';
    require_once './header.php';
    
    $notice = DB::fetchAll("select * from notice"); ?>

<main>
    <h1>공지사항 관리</h1>
        <div class="add-box">
        <a href="./noticeAdd.php">공지사항 추가</a>
    </div>
<table>
    <thead>
        <th>유형</th>
        <th>제목</th>
        <th>날짜</th>
        <th>관리</th>
    </thead>
            <?php foreach($notice as $value) { ?>
                <tbody>
                    <tr>
                        <td><?= $value->type ?></td>
                        <td><?= $value->title ?></td>
                        <td><?= $value->date ?></td>
                        <td>
                            <a href="./noticeEdit.php?idx=<?= $value->idx ?>">수정</a>
                            <a href="./noticeDelete.php?idx=<?= $value->idx ?>">삭제</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </main>
        <?php require_once './footer.php' ?>
</body>
</html>