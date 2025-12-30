<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIFTS:MALL</title>
    <link rel="stylesheet" href="./style/style.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="./style/component.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="./asset/fontawesome/css/font-awesome.css?v=<?php echo time() ?>">

    <style>
        * {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;
    color: inherit;
}

img {
    object-fit: cover;
}

.body-container {
    display: flex;
    flex-direction: column;
    gap: 80px;
}

/* 헤더 */

.body-container > header {
    position: fixed;
    z-index: 1000;
    width: 100%;
    height: 80px;
    display: flex;
    justify-content: space-between;
    padding: 0 80px;
    align-items: center;
    background-color: #ffffffee;
    border-bottom: 1px solid rgba(0, 0, 0, 0.144);

    & nav {
        display: flex;

        .sub {
            overflow: hidden;
            height: 0;
            position: absolute;
            transition: .3s;

            & a:hover {
                background-color: #c2f6ff;
            }
        }

        &>ul:hover .sub {
            height: 200px;
        }

        &>ul:hover>li>a {
            background-color: #7bebff;
        }

        & a {
            display: block;
            width: 150px;
            border: 1px solid #eee;
            height: 50px;
            text-align: center;
            line-height: 50px;
            background-color: white;
        }
    }
}

    </style>
</head>

<body>
  <?php 
    require_once './db.php'; 
    require_once './header.php'; 
    ?>
    <!-- 로딩 애니메이션 -->
    <div class="loading">
        <div class="ring"></div>
    </div>

    <div class="body-container">
        <!-- 헤더 -->
        <main>
            <div class="slide">
                <ul>
                    <li>
                        <span>
                            1. Better Give & Take
                            옴니채널 플랫폼 GIFTS로
                            전 세계 고객에게 선물의 가치를 높입니다.
                        </span>
                    </li>
                    <li>
                        <span>
                            2. Life Style Platforms
                            고객과 가장 가까운 곳에서
                            고객에게 다양한 즐거움을 선물합니다.
                        </span>
                    </li>
                    <li>
                        <span>
                            3. Online PLAYGROUND
                            업계 최초 당일 배송 서비스인 '오늘드림'으로
                            고객 니즈 충족과 고객 경험을 혁신합니다.
                        </span>
                    </li>
                    <li>
                        <span>
                            1. Better Give & Take
                            옴니채널 플랫폼 GIFTS로
                            전 세계 고객에게 선물의 가치를 높입니다.
                        </span>
                    </li>
                </ul> 
            </div>
        </main>
        <section>
            <article class="content01">
                <h1>상품 목록</h1>
                <div class="items">
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/건강식품/1.PNG" alt="건강식품1">
                        </div>
                        <div class="item-content">
                            <div class="item-name">이뮨 멀티비타민&미네랄</div>
                            <div class="item-price">
                                <div class="price">75,000</div>
                                <div class="dis">65,000</div>
                            </div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/건강식품/2.PNG" alt="건강식품2">
                        </div>
                        <div class="item-content">
                            <div class="item-name">센트룸</div>
                            <div class="item-price">27,000</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/건강식품/3.PNG" alt="건강식품3">
                        </div>
                        <div class="item-content">
                            <div class="item-name">닥터브라이언</div>
                            <div class="item-price">2,000</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/디지털/1.PNG" alt="디지털1">
                        </div>
                        <div class="item-content">
                            <div class="item-name">PANTONE PD충전 보조배터리</div>
                            <div class="item-price">
                                <div class="price">24,400</div>
                            </div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/디지털/2.PNG" alt="디지털2">
                        </div>
                        <div class="item-content">
                            <div class="item-name">Bowie D05 무선 블루투스 5.3 헤드셋</div>
                            <div class="item-price">36,900</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/디지털/3.PNG" alt="디지털3">
                        </div>
                        <div class="item-content">
                            <div class="item-name">독거미 F99 기계식 키보드</div>
                            <div class="item-price">70,750</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/팬시/1.PNG" alt="팬시1">
                        </div>
                        <div class="item-content">
                            <div class="item-name">명품 자동 장우산</div>
                            <div class="item-price">31,600</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/팬시/2.PNG" alt="팬시2">
                        </div>
                        <div class="item-content">
                            <div class="item-name">14K 윙블링 원터치 링 귀걸이(주문제작)</div>
                            <div class="item-price">250,000</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/팬시/3.PNG" alt="팬시3">
                        </div>
                        <div class="item-content">
                            <div class="item-name">14K 윙블링 메르시 목걸이(주문제작)</div>
                            <div class="item-price">265,000</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/향수/1.PNG" alt="향수1">
                        </div>
                        <div class="item-content">
                            <div class="item-name">에스쁘아 솔리드 퍼퓸 4.2g</div>
                            <div class="item-price">26,000</div>
                            <div class="btns">
                                <a href="#">구매하기</a>
                                <a href="#" class="get">장바구니 담기</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/향수/2.PNG" alt="향수2">
                        </div>
                        <div class="item-content">
                            <div class="item-name">호텔도슨 향수 오드퍼퓸 75ml</div>
                            <div class="item-price">153,000</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/향수/3.PNG" alt="향수3">
                        </div>
                        <div class="item-content">
                            <div class="item-name">랑방 레 플레르 EDT 90ml</div>
                            <div class="item-price">64,500</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/헤어케어/1.PNG" alt="헤어케어1">
                        </div>
                        <div class="item-content">
                            <div class="item-name">어노브 딥 데미지 트리트먼트 des 더블</div>
                            <div class="item-price">21,900</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/헤어케어/2.PNG" alt="헤어케어2">
                        </div>
                        <div class="item-content">
                            <div class="item-name">려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml</div>
                            <div class="item-price">21,900</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-cover">
                            <img src="./images/헤어케어/3.PNG" alt="헤어케어3">
                        </div>
                        <div class="item-content">
                            <div class="item-name">라보에이치 두피쿨링&노세범 샴푸 333ml</div>
                            <div class="item-price">19,800</div>
                        </div>
                        <div class="btns">
                            <a href="#">구매하기</a>
                            <a href="#" class="get">장바구니 담기</a>
                        </div>
                    </div>
                </div>
            </article>
            <article class="content02">
                <h1>공지사항</h1>
                <div class="notice-control">
                    <a href="#">
                        <i class="fa fa-arrow-left fa-1x"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-arrow-right fa-1x"></i>
                    </a>
                </div>
                <table class="notice-content">

                    <thead>
                        <th>유형</th>
                        <th>제목</th>
                        <th>공지일자</th>
                    </thead>
                    
                    <?php
                    $notice = DB::fetchAll("select * from notice limit 6"); ?>

                    <tbody>
                    <?php foreach($notice as $noti) { ?>
                        <tr>
                            <td><?= $noti->type ?></td>
                            <td><?= $noti->title ?></td>
                            <td><?= $noti->date ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </article>
            <article class="content03">
                <h1>상품 입점/제휴문의</h1>
                <div class="con01">
                    <h3>대한민국 No.1</h3>
                    <p>GIFTS:Mall과 함께 할 WIN-WIN 파트너를 찾습니다.
                        제휴사의 많은 지원을 기다립니다.</p>
                    <i class="fa fa-commenting-o fa-5x"></i>
                </div>
                <div class="con02">
                    <div class="banner">
                        <p>상품입점/제휴문의</p>
                        <i class="fa fa-envelope fa-4x"></i>
                    </div>
                    <div class="banner">
                        <p>문의결과조회</p>
                        <i class="fa fa-eye fa-4x"></i>
                    </div>
                    <div class="banner">
                        <p>전자계약시스템</p>
                        <i class="fa fa-file-o fa-4x"></i>
                    </div>
                    <div class="banner">
                        <p>파트너시스템</p>
                        <i class="fa fa-gratipay fa-4x"></i>
                    </div>
                </div>
                <div class="con03">
                    <div class="box">
                        <div class="text">
                            <h3>1단계</h3>
                            <p>임시회원가입</p>
                            <p>미거래 업체는 임시회원 가입/로그인 후 상담신청을 하실 수 있습니다.</p>
                        </div>
                        <i class="fa fa-child fa-3x"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h3>2단계</h3>
                            <p>온라인상담</p>
                            <p>GIFTS:Mall 입점/제휴를 위해서는 온라인 상담이 선행되어야 합니다. 상담 문의 후 사이트를 통해 결과를 안내해 드립니다.</p>
                        </div>
                        <i class="fa fa-microphone fa-3x"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h3>3단계</h3>
                            <p>방문상담</p>
                            <p>온라인 상담이 긍정적일 경우, 담당MD/제휴담당자와 구체적인 상담을 진행하게 됩니다.</p>
                        </div>
                        <i class="fa fa-phone fa-3x"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h3>4단계</h3>
                            <p>품평회</p>
                            <p>공정한 평가를 위해 상품력, 기획력, 영업력, 판촉력 등의 항목을 기준으로 내부 품평회를 진행합니다.</p>
                        </div>
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h3>5단계</h3>
                            <p>신용평가</p>
                            <p>입점확정 협력사의 경우 신뢰있는 거래를 위해 신용평가를 받고 있습니다</p>
                        </div>
                        <i class="fa fa-smile-o fa-3x"></i>
                    </div>
                    <div class="box">
                        <div class="text">
                            <h3>6단계</h3>
                            <p>계약체결</p>
                            <p>전자계약서(또는 수기계약서)를 통해 거래계약서와 관련서류를 작성하시면 입점절차가 완료됩니다.</p>
                        </div>
                        <i class="fa fa-edit fa-3x"></i>
                    </div>
                </div>
            </article>
        </section>
  <?php require_once './footer.php'; ?>
    </div>
</body>

</html>
