<style>
    
/* 헤더 */

* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    box-sizing: border-box;
    color: inherit;
}

.header {
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

[class*='Box'] {
    width: 100vw;
    height: 100vh;
    background: #00000080;
    position: fixed;
    top: 0;
    display:flex;
    justify-content:center;
    align-items:center;
    z-index: 10000000;
}

form {
    position: relative;
    width: 500px;
    height: 600px;
    border-radius:10px;
    background: white;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    gap: 10px;

    & input {
        width: 300px;
        padding: 5px;
    }
    & label {
        display: block;
        width: 100px;
    }
    h1 {
        margin-bottom: 50px;
    }
}

[class*='Close'] {
    position: absolute;
    top: 0;
    right: 0;
    margin: 20px;
    color:white;
    padding: 10px;
    background: #ff4b4bff;
    cursor: pointer;
    border-radius:10px;
}

label {
    width: 60px;
}

.box {
    display: flex;
    gap: 10px;
}

input {
    border-radius:10px;
}

input[type="submit"] {
    cursor: pointer;
    width: 80%;
    font-size: 20px;
    font-weight: bold;
    border-radius:10px;
    color:white;
    border:0;
    background: #00b7ff;
    padding: 10px;
    position: absolute;
    bottom: 0;
    margin: 20px;
}


</style>

<?php
    require_once './db.php';
    require_once './lib.php';
    ?>

<header class="header">
    <a href="./index.php">
        <img src="./images/logo.png" alt="로고">
    </a>
    <nav class="nav01">
            <ul>
                <li><a href="./sub01.php">소개</a></li>
            </ul>
            <ul>
                <li><a href="./sub02.php">판매상품</a></li>
                <ul class="sub">
                    <li><a href="./sub02.php">전체상품</a></li>
                    <li><a href="./sub03.php">인기상품</a></li>
                </ul>
            </ul>
            <ul>
                <li><a href="#">가맹점</a></li>
            </ul>
            <ul>
                <li><a href="./sub04.php">장바구니</a></li>
            </ul>
        </nav>
        <nav class="nav02">
        <?php 
        $user = $_SESSION["ss"] ?? null;

        if($user == null) { ?>
        <ul>
            <li><a href="#" class="loginBtn">로그인</a></li>
        </ul>
        <ul>
            <li><a href="#" class="regBtn">회원가입</a></li>
        </ul>
        <ul>
            <li><a href="./sub04.php">장바구니</a></li>
        </ul>
               
        <?php } else if ($user->isAd == 1)  { ?>
                    <ul>
            <li><a href="#"><?= $user->id ?>님</a></li>
        </ul>
        <ul>
            <li><a href="./sub02.php">관리자</a></li>
            <ul class="sub">
                <li><a href="./itemList.php">판매상품 관리</a></li>
                <li><a href="./noticeList.php">공지사항 관리</a></li>
                <li><a href="./userList.php">회원 관리</a></li>
            </ul>
        </ul>
               <ul>
                    <li><a href="./logout.php">로그아웃</a></li>
                </ul>
        <?php } else { ?>
                <ul>
                    <li><a href="#"><?= $user->id ?>님</a></li>
                </ul>
                <ul>
                    <li><a href="./sub04.php">장바구니</a></li>
                </ul>
                <ul>
                    <li><a href="./logout.php">로그아웃</a></li>
                </ul>
        <?php } ?>
    </nav>
</header>

<div class="regBox reg">
    <form action="./userAction.php" method="post">
        <h1>회원가입</h1>
        <div class="regCloseBtn">닫기</div>
        <input type="type" name="type" value="reg" hidden>
        
        <div class="box">
            <label for="id">아이디</label>
            <input type="text" name="id" required>
        </div>
        <div class="box">
            <label for="psw">비밀번호</label>
            <input type="password" name="psw" required>
        </div>
        <div class="box">
            <label for="email">이메일</label>
            <input type="email" name="email" required>
        </div>
        <div class="box">
            <label for="name">이름</label>
            <input type="name" name="name" required>
        </div>
        
        <input type="submit" value="회원가입" required>
    </form>
</div>

<div class="LoginBox login">
    <form action="userAction.php" method="post">
        <h1>로그인</h1>
        <div class="loginCloseBtn">닫기</div>
        <input type="type" name="type" value="login" hidden>
        
        <div class="box">
            <label for="id">아이디</label>
            <input type="text" name="id" required>
        </div>
        <div class="box">
            <label for="psw">비밀번호</label>
            <input type="password" name="psw" required>
        </div>

        <input type="submit" value="로그인" required>
    </form>
</div>

<script>
    const loginBtn = document.querySelector(".loginBtn")
    const regBtn = document.querySelector(".regBtn")
    const loginCloseBtn = document.querySelector(".loginCloseBtn")
    const regCloseBtn = document.querySelector(".regCloseBtn")
    const login = document.querySelector(".login")
    const reg = document.querySelector(".reg")

    login.style.display = 'none'
    reg.style.display = 'none'

    loginBtn.addEventListener('click', () => {
        login.style.display = 'flex'
        reg.style.display = 'none'
    })
    regBtn.addEventListener('click', () => {
        login.style.display = 'none'
        reg.style.display = 'flex'
    })
    loginCloseBtn.addEventListener('click', () => {
        login.style.display = 'none'
    })
    regCloseBtn.addEventListener('click', () => {
        reg.style.display = 'none'
    })
</script>