<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3</title>
    <base href=".">
    <meta name="renderer" content="webkit">
    <meta name="force-rendering" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="application-version" content="3.111.0">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="css/virtualsports.css">

    <style type="text/css">
        .vfm--fixed[data-v-2836fdb5] {
            position: fixed;
        }

        .vfm--absolute[data-v-2836fdb5] {
            position: absolute;
        }

        .vfm--inset[data-v-2836fdb5] {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .vfm--overlay[data-v-2836fdb5] {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .vfm--prevent-none[data-v-2836fdb5] {
            pointer-events: none;
        }

        .vfm--prevent-auto[data-v-2836fdb5] {
            pointer-events: auto;
        }

        .vfm--outline-none[data-v-2836fdb5]:focus {
            outline: none;
        }

        .vfm-enter-active[data-v-2836fdb5],
        .vfm-leave-active[data-v-2836fdb5] {
            transition: opacity 0.2s;
        }

        .vfm-enter-from[data-v-2836fdb5],
        .vfm-leave-to[data-v-2836fdb5] {
            opacity: 0;
        }

        .vfm--touch-none[data-v-2836fdb5] {
            touch-action: none;
        }

        .vfm--select-none[data-v-2836fdb5] {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .vfm--resize-tr[data-v-2836fdb5],
        .vfm--resize-br[data-v-2836fdb5],
        .vfm--resize-bl[data-v-2836fdb5],
        .vfm--resize-tl[data-v-2836fdb5] {
            width: 12px;
            height: 12px;
            z-index: 10;
        }

        .vfm--resize-t[data-v-2836fdb5] {
            top: -6px;
            left: 0;
            width: 100%;
            height: 12px;
            cursor: ns-resize;
        }

        .vfm--resize-tr[data-v-2836fdb5] {
            top: -6px;
            right: -6px;
            cursor: nesw-resize;
        }

        .vfm--resize-r[data-v-2836fdb5] {
            top: 0;
            right: -6px;
            width: 12px;
            height: 100%;
            cursor: ew-resize;
        }

        .vfm--resize-br[data-v-2836fdb5] {
            bottom: -6px;
            right: -6px;
            cursor: nwse-resize;
        }

        .vfm--resize-b[data-v-2836fdb5] {
            bottom: -6px;
            left: 0;
            width: 100%;
            height: 12px;
            cursor: ns-resize;
        }

        .vfm--resize-bl[data-v-2836fdb5] {
            bottom: -6px;
            left: -6px;
            cursor: nesw-resize;
        }

        .vfm--resize-l[data-v-2836fdb5] {
            top: 0;
            left: -6px;
            width: 12px;
            height: 100%;
            cursor: ew-resize;
        }

        .vfm--resize-tl[data-v-2836fdb5] {
            top: -6px;
            left: -6px;
            cursor: nwse-resize;
        }
    </style>
    <link rel="stylesheet" href="./css/newv3.css">
    <style>
        .vue3-marquee {
            display: flex !important;
            position: relative
        }

        .vue3-marquee.horizontal {
            overflow-x: hidden !important;
            flex-direction: row !important;
            width: 100%;
            height: max-content
        }

        .vue3-marquee.vertical {
            overflow-y: hidden !important;
            flex-direction: column !important;
            height: 100%;
            width: max-content
        }

        .vue3-marquee:hover div {
            animation-play-state: var(--pauseOnHover)
        }

        .vue3-marquee:active div {
            animation-play-state: var(--pauseOnClick)
        }

        .vue3-marquee>.marquee {
            flex: 0 0 auto;
            min-width: var(--min-width);
            min-height: var(--min-height);
            z-index: 1;
            animation: var(--orientation) var(--duration) linear var(--delay) var(--loops);
            animation-play-state: var(--pauseAnimation);
            animation-direction: var(--direction)
        }

        .vue3-marquee.horizontal>.marquee {
            display: flex;
            flex-direction: row;
            align-items: center
        }

        .vue3-marquee.vertical>.marquee {
            display: flex;
            flex-direction: column;
            align-items: center
        }

        @keyframes scrollX {
            0% {
                transform: translate(0)
            }

            to {
                transform: translate(-100%)
            }
        }

        @keyframes scrollY {
            0% {
                transform: translateY(0)
            }

            to {
                transform: translateY(-100%)
            }
        }

        .vue3-marquee>.overlay {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .vue3-marquee>.transparent-overlay {
            position: absolute;
            width: 100%;
            height: 100%
        }

        .vue3-marquee>.overlay:before,
        .vue3-marquee>.overlay:after {
            content: "";
            position: absolute;
            z-index: 2
        }

        .vue3-marquee.horizontal>.overlay:before,
        .vue3-marquee.horizontal>.overlay:after {
            background: linear-gradient(to right, var(--gradient-color));
            height: 100%;
            width: var(--gradient-length)
        }

        .vue3-marquee.vertical>.overlay:before,
        .vue3-marquee.vertical>.overlay:after {
            background: linear-gradient(to bottom, var(--gradient-color));
            height: var(--gradient-length);
            width: 100%
        }

        .vue3-marquee.horizontal>.overlay:after {
            transform: rotate(180deg)
        }

        .vue3-marquee.vertical>.overlay:after {
            transform: rotate(-180deg)
        }

        .vue3-marquee>.overlay:before {
            left: 0;
            top: 0
        }

        .vue3-marquee.horizontal>.overlay:after {
            right: 0;
            top: 0
        }

        .vue3-marquee.vertical>.overlay:after {
            left: 0;
            bottom: 0
        }
    </style>
</head>

<body>

    <div id="app" data-v-app="" class="webp">
        <div>
            <div data-v-79613b41="" class="allContent">
                <?php include('inc/sidemenu.php'); ?>

                <div data-v-79613b41="" class="rightContent homePage">
                    <div data-v-79613b41="" class="contents">
                        <div data-v-79613b41="" class="main_content_continer">
                            <?php include('inc/header.php'); ?>

                            <div data-v-79613b41="" class="main_content">
                                <div class="virtualZone">
                                    <div class="virtualWrapper">
                                        <div class="title">
                                            <div class="leftZone">
                                                <span class="icon-iiconLogoB"></span>
                                                <h4>SMGame</h4>
                                                <span>가상스포츠</span>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="content">
                                            <div class="leftFrame">
                                                <div class="leftZone aniLogo01">
                                                    <div class="obj aniLogo"></div>
                                                </div>
                                            </div>
                                            <div class="rightZone">
                                                <div class="txt">
                                                    <h2>SMGame 가상스포츠</h2>
                                                    <p>
                                                        가상스포츠는 실제 스포츠를 기반으로 한 이벤트, 토너먼트 및 게임 플레이의 수를 통해 리얼한 경험을 제공하는 것이 목표입니다. 저희는 배팅 관련 제일 리얼한 버추얼경험을 제공합니다.
                                                        또한, 저희 사이트에서 아웃라이트와 멀티배팅을 포함한 모든 메인 픽을 찾을 수 있습니다.
                                                    </p>
                                                </div>
                                                <div class="btns">
                                                    <ul>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVFAS"></span></div>
                                                            <div class="txt01">
                                                                <h2>[축구] 아시안컵</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVFCC"></span></div>
                                                            <div class="txt01">
                                                                <h2>[축구] 챔피언스컵</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVFNC"></span></div>
                                                            <div class="txt01">
                                                                <h2>[축구] 내셔널컵</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVFWC"></span></div>
                                                            <div class="txt01">
                                                                <h2>[축구] 월드컵</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVFLM"></span></div>
                                                            <div class="txt01">
                                                                <h2>[축구] 리그컵</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVFEC"></span></div>
                                                            <div class="txt01">
                                                                <h2>[축구] 유로컵</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVBL"></span></div>
                                                            <div class="txt01">
                                                                <h2>농구</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVBI"></span></div>
                                                            <div class="txt01">
                                                                <h2>야구</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVTI"></span></div>
                                                            <div class="txt01">
                                                                <h2>테니스</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVHK"></span></div>
                                                            <div class="txt01">
                                                                <h2>경마</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                        <li class="casinoFrame casino01">
                                                            <div class="logo logoA"><span class="ballMove icon-BetradarVDK"></span></div>
                                                            <div class="txt01">
                                                                <h2>개경주</h2>
                                                            </div>
                                                            <div class="mask">
                                                                <div class="inner"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="obj aniLogo02"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('inc/footer.php'); ?>

                        </div>
                    </div>
                </div>
                <!---->
                <div data-v-2836fdb5="" data-v-79613b41="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000; display: none;">
                    <!--v-if-->
                    <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none NAV_ad" aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
                        <div data-v-2836fdb5="" class="vfm__content">
                            <div data-v-2836fdb5-s="" class="contentFrame">
                                <div data-v-2836fdb5-s="" class="">
                                    <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalOpen" style="top: 50px; left: 650px;">
                                        <h5 class="XX"><span class="icon-iconCross"></span></h5>
                                        <div class="reg">
                                            <div class="top"><img src="./virtual_sports_files/logo-6995bb1c.svg" alt="" /></div>
                                            <div class="content">
                                                <p>
                                                    <a href="https://www.kc-28.com/Promotion"><img style="width: 500px; height: 711px;" src="./virtual_sports_files/50bae93054254801a16bd7a856cbb77f.webp" /></a>
                                                </p>
                                            </div>
                                            <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-2836fdb5-s="" class="">
                                    <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalOpen" style="top: 50px; left: 1200px;">
                                        <h5 class="XX"><span class="icon-iconCross"></span></h5>
                                        <div class="reg">
                                            <div class="top"><img src="./virtual_sports_files/logo-6995bb1c.svg" alt="" /></div>
                                            <div class="content">
                                                <p><img width="500" src="./virtual_sports_files/1795c839abcb4afba336bdc1568f64f7.webp" height="711" /></p>
                                            </div>
                                            <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-2836fdb5-s="" class="">
                                    <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalOpen" style="top: 50px; left: 100px;">
                                        <h5 class="XX"><span class="icon-iconCross"></span></h5>
                                        <div class="reg">
                                            <div class="top"><img src="./virtual_sports_files/logo-6995bb1c.svg" alt="" /></div>
                                            <div class="content">
                                                <p><img width="500" src="./virtual_sports_files/3f67119499934924af52eadd1f1c8bd6.webp" height="711" /></p>
                                            </div>
                                            <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--v-if-->
                        </div>
                    </div>
                </div>
            </div>
            <!----><!---->
        </div>
        <div class="modals-container"></div>
        <!----><!---->
        <div data-v-2836fdb5="" data-v-5645eacc="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000; display: none;">
            <!--v-if-->
            <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main model-open NAV_nonmember" aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
                <div data-v-2836fdb5="" class="vfm__content pupop_content fadeIn animated">
                    <div data-v-2836fdb5-s="" class="popWrapper">
                        <h5 data-v-2836fdb5-s="" class="XX"><span data-v-2836fdb5-s="" class="icon-iconCross"></span></h5>
                        <div data-v-2836fdb5-s="" class="titlePic">
                            <div data-v-2836fdb5-s="" class="titlePwrapper">
                                <div data-v-2836fdb5-s="" class="leftZone">
                                    <span data-v-2836fdb5-s="" class="icon-iiconLogoB"></span>
                                    <h4 data-v-2836fdb5-s="">SMGame</h4>
                                    <span data-v-2836fdb5-s="">비회원 문의</span>
                                </div>
                                <div data-v-2836fdb5-s="" class="line"></div>
                            </div>
                        </div>
                        <div data-v-2836fdb5-s="" class="contentZone">
                            <div data-v-2836fdb5-s="" class="leftZone">
                                <div data-v-2836fdb5-s="" class="pic"><img data-v-2836fdb5-s="" src="./virtual_sports_files/popLogPic01-c8126568.png" alt="" /></div>
                            </div>
                            <div data-v-2836fdb5-s="" class="rightZone">
                                <div data-v-2836fdb5-s="" class="up">
                                    <div data-v-2836fdb5-s="" class="input_zone">
                                        <div data-v-2836fdb5-s="" class="inputFrame">
                                            <div data-v-2836fdb5-s="" class="txtT">성명</div>
                                            <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Name" class="account txtColor010 bgColor09 bdColor03" placeholder="이름을 입력해주세요." /></div>
                                        </div>
                                        <div data-v-2836fdb5-s="" class="inputFrame">
                                            <div data-v-2836fdb5-s="" class="txtT">연락처</div>
                                            <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Mobile" class="pw txtColor010 bgColor09 bdColor03" placeholder="전화 번호를 남겨주세요." /></div>
                                        </div>
                                        <div data-v-2836fdb5-s="" class="inputFrame">
                                            <div data-v-2836fdb5-s="" class="txtT">내용</div>
                                            <div data-v-2836fdb5-s="" class="areaFrame">
                                                <textarea data-v-2836fdb5-s="" name="Content" class="Content txtColor010 bgColor09 bdColor03" placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-2836fdb5-s="" class="btnZone">
                                        <div data-v-2836fdb5-s="" class="btnFrame"><button data-v-2836fdb5-s="" class="btn_p goAlertMem greyBtn">문의요청</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--v-if-->
                </div>
            </div>
        </div>
    </div>
    <div id="ytCinemaMessage" style="display: none;"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/newv3.js"></script>
</body>

</html>