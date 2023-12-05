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
  <link rel="stylesheet" href="./css/swiper-sm.css">
    
  <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
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

        <!-- Content -->
        <div data-v-79613b41="" class="rightContent homePage">
          <div data-v-79613b41="" class="contents">
            <div data-v-79613b41="" class="main_content_continer">
              <?php include('inc/header.php'); ?>
              <div data-v-8c6ca05e="" class="banner" style="height: auto; opacity: 1;">
                <div class="swiper banner_swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide"><a href="#"><img
                          class="swiper-lazy"
                          src="./image/banner/banner-01.webp" alt=""></a><!----></div>

                    <div class="swiper-slide"><a href="#"><img
                          class="swiper-lazy"
                          src="./image/banner/banner-02.webp" alt=""></a><!----></div>

                    <div class="swiper-slide"><a href="#"><img
                          class="swiper-lazy"
                          src="./image/banner/banner-03.webp" alt=""></a><!----></div>

                    <div class="swiper-slide"><a href="#"><img
                          class="swiper-lazy"
                          src="./image/banner/banner-04.webp" alt=""></a><!----></div>

                    <div class="swiper-slide"><a href="#"><img
                          class="swiper-lazy"
                          src="./image/banner/banner-05.webp" alt=""></a><!----></div>

                  </div><!----><!---->
                  <div
                    class="swiper-pagination"></div><!---->
                </div>
              </div>
              <div data-v-8c6ca05e="">
                <div data-v-8c6ca05e="" id="home" class="v_deep_home">
                  <div data-v-8c6ca05e="" class="main_content webp">
                    <div data-v-8c6ca05e="" class="main_content_wrap avoidFlicker">
                      <div data-v-8c6ca05e="" class="casinoZone">
                        <div class="title"><span class="icon-iiconLogoB"></span>
                          <div class="txt">SM <h3>GAME LIST</h3>
                          </div>
                        </div>
                        <div class="content">
                          <ul>
                            <li class="casinoFrame wow fadeInUp" game-box="EvoReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><img
                                    src="/image/event_dogear.png"
                                    alt="event"></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>에볼루션</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="MgpReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>마이크로</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="PrgReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><img
                                    src="/image/dailywins_dogear.png"
                                    alt="daily wins"></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>프래그마틱</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="DgReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>드림게이밍</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="WmReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>더블유엠</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="BbinReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>BB 카지노</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="Ae2Real"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>섹시 카지노</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="OgReal"
                              style="visibility: visible; animation-name: fadeInUp;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>오리엔탈</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="AllBetReal"
                              style="visibility: ; animation-name: none;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>올벳</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="YxReal"
                              style="visibility: ; animation-name: none;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>야신카지노</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="GpiLive"
                              style="visibility: ; animation-name: none;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>게임 플레이</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="BgReal"
                              style="visibility: ; animation-name: none;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>빅게이밍</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="AgBr"
                              style="visibility: ; animation-name: none;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>아시아게임</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp" game-box="VivoVideo"
                              style="visibility: ; animation-name: none;">
                              <div class="bg">
                                <div class="ppPro"><!----></div>
                                <div class="logo logoA"></div>
                                <div class="model modelA"></div>
                                <div class="txt">
                                  <h2>VIVO 라이브</h2>
                                </div>
                              </div>
                              <div class="mask">
                                <div class="inner"><span class="icon-icconPlay"></span>
                                  <div class="goldL01Btn btnP">게임시작</div>
                                </div>
                              </div>
                            </li>
                            <li class="casinoFrame wow fadeInUp coming" game-box="more"
                              style="visibility: ; animation-name: none;">
                              <div class="come"><img src="./image/coming-soon.png" alt="coming"></div>
                            </li>
                            <li class="casinoFrame wow fadeInUp coming" game-box="more"
                              style="visibility: ; animation-name: none;">
                              <div class="come"><img src="./image/coming-soon.png" alt="coming"></div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div data-v-8c6ca05e="" class="slotZone wow fadeInUp" style="visibility: ; animation-name: none;">
                        <div class="slotLeft slot01">
                          <div class="leftZone">
                            <div class="pic"></div><!---->
                          </div>
                          <div class="centerZone">
                            <div class="upZone">
                              <h2>AG CASINO</h2>
                              <p> Play the best games on the SMGame<br> SMGame에서 최고의 게임을 즐기십시오</p>
                            </div>
                            <div class="downZone"><a href="https://www.bbb-883.com/Promotion"
                                class="btn goldLBtn">배팅규정</a><a href="https://www.bbb-883.com/Deposit"
                                class="btn goldLBtn">입금신청</a><a href="https://www.bbb-883.com/Lobby/Game"
                                class="btn goldLBtn">게임시작</a></div>
                          </div>
                        </div>
                        <div class="slotLeft slot02" style="display: none;">
                          <div class="leftZone">
                            <div class="pic"></div><!---->
                          </div>
                          <div class="centerZone">
                            <div class="upZone">
                              <h2>MG CASINO</h2>
                              <p> Play the best games on the SMGame<br> SMGame에서 최고의 게임을 즐기십시오</p>
                            </div>
                            <div class="downZone"><a href="https://www.bbb-883.com/Promotion"
                                class="btn goldLBtn">배팅규정</a><a href="https://www.bbb-883.com/Deposit"
                                class="btn goldLBtn">입금신청</a><a href="https://www.bbb-883.com/Lobby/Game"
                                class="btn goldLBtn">게임시작</a></div>
                          </div>
                        </div>
                        <div class="slotLeft slot03" style="display: none;">
                          <div class="leftZone">
                            <div class="pic"></div><!---->
                          </div>
                          <div class="centerZone">
                            <div class="upZone">
                              <h2>PP CASINO</h2>
                              <p> Play the best games on the SMGame<br> SMGame에서 최고의 게임을 즐기십시오</p>
                            </div>
                            <div class="downZone"><a href="https://www.bbb-883.com/Promotion"
                                class="btn goldLBtn">배팅규정</a><a href="https://www.bbb-883.com/Deposit"
                                class="btn goldLBtn">입금신청</a><a href="https://www.bbb-883.com/Lobby/Game"
                                class="btn goldLBtn">게임시작</a></div>
                          </div>
                        </div>
                        <div class="slotLeft slot04" style="display: none;">
                          <div class="leftZone">
                            <div class="pic"></div><!---->
                          </div>
                          <div class="centerZone">
                            <div class="upZone">
                              <h2>HABA CASINO</h2>
                              <p> Play the best games on the SMGame<br> SMGame에서 최고의 게임을 즐기십시오</p>
                            </div>
                            <div class="downZone"><a href="https://www.bbb-883.com/Promotion"
                                class="btn goldLBtn">배팅규정</a><a href="https://www.bbb-883.com/Deposit"
                                class="btn goldLBtn">입금신청</a><a href="https://www.bbb-883.com/Lobby/Game"
                                class="btn goldLBtn">게임시작</a></div>
                          </div>
                        </div>
                        <div class="slotLeft slot05" style="display: none;">
                          <div class="leftZone">
                            <div class="pic"></div><!---->
                          </div>
                          <div class="centerZone">
                            <div class="upZone">
                              <h2>PG CASINO</h2>
                              <p> Play the best games on the SMGame<br> SMGame에서 최고의 게임을 즐기십시오</p>
                            </div>
                            <div class="downZone"><a href="https://www.bbb-883.com/Promotion"
                                class="btn goldLBtn">배팅규정</a><a href="https://www.bbb-883.com/Deposit"
                                class="btn goldLBtn">입금신청</a><a href="https://www.bbb-883.com/Lobby/Game"
                                class="btn goldLBtn">게임시작</a></div>
                          </div>
                        </div>
                        <div class="rightZone">
                          <ul>
                            <li class="s01 wow fadeInUp" style="visibility: ; animation-name: none;"><!---->
                              <div class="txt">AG</div>
                              <div class="pic pic01"></div>
                              <div class="mask">
                                <div class="inner"></div>
                              </div>
                            </li>
                            <li class="s02 wow fadeInUp" style="visibility: ; animation-name: none;"><!---->
                              <div class="txt">MG</div>
                              <div class="pic pic02"></div>
                              <div class="mask">
                                <div class="inner"></div>
                              </div>
                            </li>
                            <li class="s03 wow fadeInUp" style="visibility: ; animation-name: none;"><!---->
                              <div class="txt">PP</div>
                              <div class="pic pic03"></div>
                              <div class="mask">
                                <div class="inner"></div>
                              </div>
                            </li>
                            <li class="s04 wow fadeInUp" style="visibility: ; animation-name: none;"><!---->
                              <div class="txt">HABA</div>
                              <div class="pic pic04"></div>
                              <div class="mask">
                                <div class="inner"></div>
                              </div>
                            </li>
                            <li class="s05 wow fadeInUp" style="visibility: ; animation-name: none;"><!---->
                              <div class="txt">PG</div>
                              <div class="pic pic05"></div>
                              <div class="mask">
                                <div class="inner"></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div data-v-8c6ca05e="" class="infoZone">
                        <div data-v-8c6ca05e="" class="info01 wow fadeInUp animated"
                          style="visibility: ; animation-name: none;">
                          <div class="title">SMGame<span>공지</span></div>
                          <div class="listFrame">
                            <div class="list">
                              <div class="listA">
                                <div class="message">- 📢이용 유의 사항</div>
                                <div class="time">2018-12-08 </div>
                              </div>
                              <div class="listA">
                                <div class="message">- ❌양방베팅 근절 안내❌</div>
                                <div class="time">2018-12-08 </div>
                              </div>
                              <div class="listA">
                                <div class="message">- [필독] 🚨사칭 주의보🚨</div>
                                <div class="time">2021-06-04 </div>
                              </div>
                              <div class="listA">
                                <div class="message">- 1:1 전용계좌 유의사항 안내</div>
                                <div class="time">2023-10-26 </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-v-8c6ca05e="" class="info01 wow fadeInUp animated"
                          style="visibility: ; animation-name: none;">
                          <div class="title">SMGame<span>FAQ</span></div>
                          <div class="listFrame">
                            <div class="list">
                              <div class="listA">
                                <div class="message">- Q ) 부분 출금 가능한가요?</div>
                                <div class="time">2021-05-27 </div>
                              </div>
                              <div class="listA">
                                <div class="message">- Q ) 게임 후 보유머니가 변하지 않아요</div>
                                <div class="time">2021-05-27 </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-v-8c6ca05e="" class="info01 wow fadeInUp animated"
                          style="visibility: ; animation-name: none;">
                          <div class="title">SMGame<span>이벤트</span></div>
                          <div class="listFrame">
                            <div class="list">
                              <div class="listA">
                                <div class="message">- 럭셔리 투어+직관티켓 이벤트</div>
                                <div class="time"></div>
                              </div>
                              <div class="listA">
                                <div class="message">- MG캔디러시BET38</div>
                                <div class="time"></div>
                              </div>
                              <div class="listA">
                                <div class="message">- 𝅳신규 가입 첫충전</div>
                                <div class="time"></div>
                              </div>
                              <div class="listA">
                                <div class="message">- 롤링콤프</div>
                                <div class="time"></div>
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
        <!-- End Content -->

        <div data-v-2836fdb5="" data-v-79613b41="" class="vfm vfm--inset vfm--fixed"
          style="z-index: 1000; display: none;"><!--v-if-->
          <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none NAV_ad"
            aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
            <div data-v-2836fdb5="" class="vfm__content">
              <div data-v-2836fdb5-s="" class="contentFrame">
                <div data-v-2836fdb5-s="" class="blackClose">
                  <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalClose"
                    style="top: 50px; left: 650px;">
                    <h5 class="XX"><span class="icon-iconCross"></span></h5>
                    <div class="reg">
                      <div class="top"><img src="./index_files/logo-6995bb1c.svg" alt=""></div>
                      <div class="content">
                        <p><a href="https://www.kc-28.com/Promotion"><img style="width: 500px; height: 711px;"
                              src="./index_files/50bae93054254801a16bd7a856cbb77f.webp"></a></p>
                      </div>
                      <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                    </div>
                  </div>
                </div>
                <div data-v-2836fdb5-s="" class="blackClose">
                  <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalClose"
                    style="top: 50px; left: 1200px;">
                    <h5 class="XX"><span class="icon-iconCross"></span></h5>
                    <div class="reg">
                      <div class="top"><img src="./index_files/logo-6995bb1c.svg" alt=""></div>
                      <div class="content">
                        <p><img width="500" src="./index_files/1795c839abcb4afba336bdc1568f64f7.webp" height="711"></p>
                      </div>
                      <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                    </div>
                  </div>
                </div>
                <div data-v-2836fdb5-s="" class="blackClose">
                  <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalClose"
                    style="top: 50px; left: 100px;">
                    <h5 class="XX"><span class="icon-iconCross"></span></h5>
                    <div class="reg">
                      <div class="top"><img src="./index_files/logo-6995bb1c.svg" alt=""></div>
                      <div class="content">
                        <p><img width="500" src="./index_files/3f67119499934924af52eadd1f1c8bd6.webp" height="711"></p>
                      </div>
                      <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                    </div>
                  </div>
                </div>
              </div><!--v-if-->
            </div>
          </div>
        </div>
      </div><!----><!---->
    </div>
    <div class="modals-container"></div><!----><!---->
    <div id="login-container"></div>
    <div data-v-2836fdb5="" data-v-5645eacc="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000; display: none;">
      <!--v-if-->
      <div data-v-2836fdb5=""
        class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main model-open NAV_nonmember"
        aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
        <div data-v-2836fdb5="" class="vfm__content pupop_content fadeIn animated">
          <div data-v-2836fdb5-s="" class="popWrapper">
            <h5 data-v-2836fdb5-s="" class="XX"><span data-v-2836fdb5-s="" class="icon-iconCross"></span></h5>
            <div data-v-2836fdb5-s="" class="titlePic">
              <div data-v-2836fdb5-s="" class="titlePwrapper">
                <div data-v-2836fdb5-s="" class="leftZone"><span data-v-2836fdb5-s="" class="icon-iiconLogoB"></span>
                  <h4 data-v-2836fdb5-s="">SMGame</h4><span data-v-2836fdb5-s="">비회원 문의</span>
                </div>
                <div data-v-2836fdb5-s="" class="line"></div>
              </div>
            </div>
            <div data-v-2836fdb5-s="" class="contentZone">
              <div data-v-2836fdb5-s="" class="leftZone">
                <div data-v-2836fdb5-s="" class="pic"><img data-v-2836fdb5-s=""
                    src="./index_files/popLogPic01-c8126568.png" alt=""></div>
              </div>
              <div data-v-2836fdb5-s="" class="rightZone">
                <div data-v-2836fdb5-s="" class="up">
                  <div data-v-2836fdb5-s="" class="input_zone">
                    <div data-v-2836fdb5-s="" class="inputFrame">
                      <div data-v-2836fdb5-s="" class="txtT">성명</div>
                      <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Name"
                          class="account txtColor010 bgColor09 bdColor03" placeholder="이름을 입력해주세요."></div>
                    </div>
                    <div data-v-2836fdb5-s="" class="inputFrame">
                      <div data-v-2836fdb5-s="" class="txtT">연락처</div>
                      <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Mobile"
                          class="pw txtColor010 bgColor09 bdColor03" placeholder="전화 번호를 남겨주세요."></div>
                    </div>
                    <div data-v-2836fdb5-s="" class="inputFrame">
                      <div data-v-2836fdb5-s="" class="txtT">내용</div>
                      <div data-v-2836fdb5-s="" class="areaFrame"><textarea data-v-2836fdb5-s="" name="Content"
                          class="Content txtColor010 bgColor09 bdColor03"
                          placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea></div>
                    </div>
                  </div>
                  <div data-v-2836fdb5-s="" class="btnZone">
                    <div data-v-2836fdb5-s="" class="btnFrame"><button data-v-2836fdb5-s=""
                        class="btn_p goAlertMem greyBtn">문의요청</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div><!--v-if-->
        </div>
      </div>
    </div>
  </div>
  <div id="chat-widget-container"
    style="opacity: 1; visibility: visible; z-index: 2147483639; position: fixed; bottom: 0px; width: 84px; height: 84px; max-width: 100%; max-height: calc(100% - 0px); min-height: 0px; min-width: 0px; background-color: transparent; border: 0px; overflow: hidden; right: 30px; transition: none 0s ease 0s !important;">
  </div>
  <script src="./js/swiper-bundle.js"></script>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="js/newv3.js"></script>
  
</body>

</html>