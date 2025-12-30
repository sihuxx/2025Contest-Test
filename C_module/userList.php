<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 관리</title>
    <style>
        main {
            padding: 180px 0;
            height: 900px;
            display: flex;
            flex-direction:column;
            align-items:center;
        }

        h1 {
            font-size: 40px;
            color: #00b7ff;
            margin-bottom: 80px;
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
    
    $user = DB::fetchAll("select * from user"); ?>

<main>
    <h1>회원 관리</h1>
<table>
    <thead>
        <th>아이디</th>
        <th>비밀번호</th>
    </thead>
            <?php foreach($user as $value) { ?>
                <tbody>
                    <tr>
                        <td><?= $value->id ?></td>
                        <td><?= $value->psw ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </main>
        <?php require_once './footer.php' ?>
</body>
</html>