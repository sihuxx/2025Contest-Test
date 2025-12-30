<style>
    
.footer {
    width: 100%;
    height: 300px;
    background-color: #c2f6ff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 40px;
    padding: 0 80px;

    & .ft-top {
        display: flex;
        color: #333;

        &>div {
            width: 50%;
        }
    }

    & .ft-left {
        display: flex;
        flex-direction: column;
        gap: 20px;

        & a {
            color: #333;
        }
    }

    & .ft-bottom {
        color: #333;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    & .sns {
        display: flex;
        gap: 10px;

        & i:nth-child(1):hover {
            color: rgb(255, 62, 62);
        }
        & i:nth-child(2):hover {
            color: rgb(0, 132, 255);
        }
        & i:nth-child(3):hover {
            color: rgb(238, 19, 19);
        }
        & i:nth-child(4):hover {
            color: rgb(180, 41, 214);
        }
        & i:nth-child(5):hover {
            color: rgb(22, 56, 207);
        }
    }
}
</style>

<footer class="footer">
            <div class="ft-top">
                <div class="ft-left">
                    <p>
                        고객센터 이용안내
                        - 온라인몰 고객센터 1580-8282
                        - 매장고객센터 1577-8254
                    </p>
                    <p>고객센터 운영시간 [평일 09:00 - 18:00]</p>
                    <p>
                        주말 및 공휴일은 1:1문의하기를 이용해주세요.
                        업무가 시작되면 바로 처리해드립니다.
                    </p>
                </div>
                <div class="ft-right">
                    <p><a href="#">개인정보처리방침</a> | <a href="#">이용약관.법적고지</a> | <a href="#">청소년보호방침</a> |
                        <a href="#">이메일무단수집거부</a> | <a href="#">사이트맵</a> | <a href="#">채용</a>
                    </p>
                    <p>(주)GIFTS:Mall | 사업자등록번호 : 809-81-01157 | 대표이사 황기영
                        주소 : 서울특별시 용산구 한강대로 123, 40층
                        본사 대표전화 : 02-123-4567 | GIFTS:Mall 가맹상담전화 : 02-123-4568</p>
                    <p>COPYRIGHTⓒ 2024 GIFTS:MALL KOREA INC. ALL RIGHTS RESERVED</p>
                </div>
            </div>
            <div class="ft-bottom">
                <p>지방은행구매안전서비스
                    GIFTS:Mall은 현금 결제한 금액에 대해 지방은행과 채무지급보증 계약을체결하여 안전한 거래를 보장하고 있습니다
                    <a href="#">서비스 가입사실 확인 ></a>
                </p>
                <div class="sns">
                    <i class="fa fa-pinterest fa-2x"></i>
                    <i class="fa fa-twitter fa-2x"></i>
                    <i class="fa fa-youtube-play fa-2x"></i>
                    <i class="fa fa-twitch fa-2x"></i>
                    <i class="fa fa-facebook-official fa-2x"></i>
                </div>
            </div>
        </footer>