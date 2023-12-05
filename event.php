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

    <link rel="stylesheet" href="css/event.css">
    <link rel="stylesheet" href="css/headtitle.css">

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

                            <div data-v-f788cc95="" data-v-6e4ca0c7="">
                                <div data-v-7f3aef84="" data-v-f788cc95="" class="main-content">
                                    <div data-v-7f3aef84="" class="">
                                        <div data-v-7f3aef84="" class="titlePic">
                                            <div data-v-7f3aef84="" class="titlePwrapper">
                                                <div data-v-7f3aef84="" class="leftZone"><span data-v-f788cc95="" class="icon-iiconLogoB"></span><span data-v-f788cc95="">이벤트</span></div>
                                                <div data-v-7f3aef84="" class="line"></div>
                                            </div>
                                        </div>
                                        <div data-v-7f3aef84="" class="main_content">
                                            <div data-v-f788cc95="" class="v_deep_promotion">
                                                <div data-v-f788cc95="" class="main_content_wrap main_content_wrap_notice main_content_wrap_promotion">
                                                    <div data-v-f788cc95="" id="un-lobby" class="gameZoneA">
                                                        <div data-v-c619f736="" data-v-f788cc95="" class="tabZone">
                                                            <ul data-v-c619f736="">
                                                                <li data-v-c619f736="" class="active"><!---->
                                                                    <h4 data-v-c619f736="">전체 (9) </h4>
                                                                </li>
                                                                <li data-v-c619f736="" class=""><!---->
                                                                    <h4 data-v-c619f736="">멤버십 (6) </h4>
                                                                </li>
                                                                <li data-v-c619f736="" class=""><!---->
                                                                    <h4 data-v-c619f736="">스포츠 (1) </h4>
                                                                </li>
                                                                <li data-v-c619f736="" class=""><!---->
                                                                    <h4 data-v-c619f736="">카지노 (1) </h4>
                                                                </li>
                                                                <li data-v-c619f736="" class=""><!---->
                                                                    <h4 data-v-c619f736="">슬롯 (1) </h4>
                                                                </li>
                                                                <li data-v-c619f736="" class=""><!---->
                                                                    <h4 data-v-c619f736="">종료된 이벤트 (2) </h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div data-v-f788cc95="" class="slotZone" loading="false">
                                                            <ul>
                                                                <li class="slotLobby">
                                                                    <ul>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/32f26177f1104da6af9bbc4a94d2e196.jpg"><!---->
                                                                                <div class="icon-tag tag-hot"><img src="assets/image/hot-tag.svg">HOT </div>
                                                                            </div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>럭셔리 투어+직관티켓 이벤트</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/008767727ff543a2a1b50ea4d6c75e63.png">
                                                                                <div class="tag-new icon-tag"><img src="assets/image/new-tag.svg">NEW </div><!---->
                                                                            </div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>MG캔디러시BET38</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/91e2189cee8946aebb2576ffee0927e5.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>𝅳신규 가입 첫충전</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/e01f54a1675d448aa2ce2b46e333d9fd.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>롤링콤프</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/0c3f0b60c7da4868b3e52966df2bc1ef.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>주간페이백</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/fb9ef49933d140a7b8ed533eb8ee648b.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>🔹스페셜 K</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/c3fbb2913983490b9e54f2eba99d2ea9.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>매일 첫, 매충 럭키휠</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/9d0373622d0c4e1c93df612a79f2efbd.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>바카라 연패탈출</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                        <li class="goPromotion" style="visibility: visible; animation-name: fadeInUp;">
                                                                            <div class="upZone"><img src="image/event/f2df15e0efbd49138ad9e9aba22643d3.jpg"><!----><!----></div>
                                                                            <div class="bottomZone">
                                                                                <div class="txtFrame">
                                                                                    <h3><span>지인콤프</span></h3><!---->
                                                                                    <h2>무기한</h2>
                                                                                </div><a class="btnP goldLLineBtn blueLLineBtn goPromotion">상세보기</a>
                                                                            </div>
                                                                        </li>
                                                                    </ul><!---->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div data-v-f788cc95="" class="pager_block">
                                                            <div class="page-list">
                                                                <ul class="pagination">
                                                                    <li class="first"><a href="javascript: void(0)"><span>처음</span></a></li>
                                                                    <li class="prev"><a href="javascript: void(0)"><span>이전</span></a></li>
                                                                    <li class="pages"><a href="javascript: void(0)" class="on"><span>1</span></a></li>
                                                                    <li class="next"><a href="javascript: void(0)"><span>다음</span></a></li>
                                                                    <li class="last"><a href="javascript: void(0)"><span>끝</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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