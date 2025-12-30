<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>판매상품 관리</title>
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
        .item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 300px;
            height: 450px;
            border-radius: 10px;
            border: 1px solid #333;
            padding: 20px;

            & .img-cover {
                width: 250px;
                border-radius: 10px;
                height: 250px;
                overflow: hidden;
            }

            & .img-cover:hover img {
                scale: 1.1;
            }

            & img {
                width: 250px;
                height: 250px;
                border-radius: 10px;
                transition: .3s;
            }

            & .item-content {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            & .item-name {
                font-size: 20px;
                text-align: center;
            }

            & .item-price {
                display: flex;
                justify-content: space-around;
                font-size: 16px;
                color: #333;
                gap: 30px;

                & .price {
                    font-weight: 500;
                }
                & .dis {
                    color: #333;
                }
                
            }

            & .btns {
                display: flex;
                gap: 10px;

                & a {
                    margin-top: 10px;
                    font-size: 14px;
                    border: 1px solid #333;
                    border-radius: 10px;
                    padding: 10px;

                    &:nth-child(1) {
                        background-color: #00b7ff;
                        color: white;
                    }
                }
            }
        }
        .items {
            display: grid;
            gap: 30px;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
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
    ?>

<main>
    <h1>판매상품 관리</h1>
        <div class="add-box">
        <a href="./itemAdd.php">상품 추가</a>
    </div>
<table>
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
                        <a href="./itemEdit.php?idx=<?= $value->idx ?>">수정</a>
                        <a href="./itemDelete.php?idx=<?= $value->idx ?>">삭제</a>
                    </div>
                </div>
                <?php    
                };
                ?>
                 <?php } ?> 
                
            </div>
</body>
</html>