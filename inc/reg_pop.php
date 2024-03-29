<?php

include_once('../class/mobiledetect.class.php');
$mdetect = new MobileDetect();

if ($mdetect->isMobile()) {
?>

    <div data-v-2836fdb5="" data-v-637aa9ef="" class="vfm vfm--inset vfm--fixed" style="z-index: 1006;">
        <div data-v-2836fdb5="" class="vfm__overlay vfm--overlay vfm--absolute vfm--inset"></div>
        <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main popup-signup model-open" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" enter-class="vue-modal-enter-from" leave-class="vue-modal-leave-from" style="">
            <div data-v-2836fdb5="" class="vfm__content model-inner modal-fade-in">
                <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="model-wrap">
                    <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="pop-up-content">
                        <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="signup-content">
                            <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="close-btn"><span data-v-637aa9ef="" data-v-2836fdb5-s="" class="icon-close" id="closePop"></span></div>
                            <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-area">
                                <form data-v-637aa9ef="" data-v-2836fdb5-s="">
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list list-id">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-id"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="text" name="account" placeholder="아이디 (영문, 숫자 포함 4자 이상)" class="">
                                            <div data-v-23b1bf0e="" class="checkUse undefined-member"></div>
                                        </div><button data-v-637aa9ef="" class="check-button" type="button">중복</button><!---->
                                        <div data-v-637aa9ef="" class="alarm" style="display: none;">계정등록이 가능합니다.</div>
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-pw"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="password" placeholder="비밀번호 (영문, 숫자 포함 6자이상)" class="" name="password">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                        <div data-v-637aa9ef="" class="rule-hint" style="display: none;">
                                            <div data-v-637aa9ef="" class="txt-hint">비밀번호는 아래의 조건이 포함되어야 합니다 :</div>
                                            <ul data-v-637aa9ef="">
                                                <li data-v-637aa9ef="" class="">
                                                    <div data-v-637aa9ef="" class="checkUse"></div>
                                                    <p data-v-637aa9ef="">최소 6자, 최대 16자</p>
                                                </li>
                                                <li data-v-637aa9ef="" class="">
                                                    <div data-v-637aa9ef="" class="checkUse"></div>
                                                    <p data-v-637aa9ef="">영숫자 조합</p>
                                                </li>
                                                <li data-v-637aa9ef="" class="">
                                                    <div data-v-637aa9ef="" class="checkUse"></div>
                                                    <p data-v-637aa9ef="">(선택)특수기호!@#$%^&amp;*()+_</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-pw"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="password" placeholder="비밀번호 확인 (영문, 숫자 포함 6자이상)" class="" name="confirmPassword">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-pw"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="password" pattern="[0-9]*" inputmode="numeric" placeholder="출금 비밀번호 ( 4-6자리, 숫자만 가능 )" class="" name="moneyPassword">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-phone"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="휴대폰번호 (숫자만 입력가능)" class="" name="mobile"><!---->
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-carrier"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="text" class="carrier-btn" placeholder="통신사선택" readonly="" name="mobileCarrier">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list input-birth">
                                        <div data-v-23b1bf0e="" class="list full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-calendar"><em data-v-23b1bf0e="">*</em></span></div>
                                            <div data-v-637aa9ef="" class="license-number">
                                                <div data-v-637aa9ef="" class="number-box"><input data-v-637aa9ef="" type="text" pattern="[0-9]*" inputmode="numeric" class="input-one" placeholder="예)19760325" name="birthday"></div>
                                            </div>
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    
                                    <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="line"></div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list icon-black full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-id"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="text" placeholder="예금주 (추후 변경 불가)" class="" name="name">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list icon-black full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-bank-s"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="text" class="bank-btn" placeholder="입금은행 선택" readonly="" name="bankName">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list icon-black full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-bank"><em data-v-23b1bf0e="">*</em></span></div><input data-v-637aa9ef="" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="계좌 번호(숫자만 입력)" class="" name="bankAccount">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                    </div>
                                    <div data-v-23b1bf0e="" data-v-637aa9ef="" data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-23b1bf0e="" class="list icon-black full-list">
                                            <div data-v-23b1bf0e="" class="txt"><span data-v-23b1bf0e="" class="icon-recommend"><em data-v-23b1bf0e="" style="display: none;">*</em></span></div><input data-v-637aa9ef="" type="password" placeholder="가입코드를 입력하세요" class="" name="parentAccount"><input data-v-637aa9ef="" type="text" disabled="" style="display: none;">
                                            <div data-v-23b1bf0e="" class="checkUse"></div>
                                        </div><!---->
                                        <div data-v-637aa9ef="" class="alarm">*가입코드 미입력 시 본사코드로 가입됩니다.</div>
                                    </div>
                                    <div data-v-637aa9ef="" data-v-2836fdb5-s="" class="bgbtn-box"><button data-v-637aa9ef="" data-v-2836fdb5-s="" class="signup-button" type="submit">
                                            <div data-v-637aa9ef="" data-v-2836fdb5-s="">회원가입</div>
                                        </button><button data-v-637aa9ef="" data-v-2836fdb5-s="" class="cancel-button" type="button" onclick="$('#closePop').click()">
                                            <div data-v-637aa9ef="" data-v-2836fdb5-s="">취소</div>
                                        </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--v-if-->
            </div>
        </div>
    </div>

<?php } else { ?>
    <div data-v-2836fdb5="" data-v-ad679d4d="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000;"><!--v-if-->
        <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none NAV_reg" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
            <div data-v-2836fdb5="" class="vfm__content pupop_content pupop_registered fadeIn animated">
                <h5 data-v-ad679d4d="" data-v-2836fdb5-s="" class="XX"><span data-v-ad679d4d="" data-v-2836fdb5-s="" class="icon-iconCross" id="closePop"></span></h5>
                <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="reg relative backface-hidden">
                    <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="topFrame">
                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="top"><img data-v-ad679d4d="" data-v-2836fdb5-s="" src="/assets/image/logo-6995bb1c.svg"></div>
                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="title">
                            <h2 data-v-ad679d4d="" data-v-2836fdb5-s="">회원가입</h2>
                        </div>
                    </div>
                    <form data-v-ad679d4d="" data-v-2836fdb5-s="">
                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="upFrame">
                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="up">
                                <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input_zone">
                                    <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="leftZone lineUse">
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame verifiUse">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconMan"></span>
                                                        <div data-v-581a52bf="" class="txt">ID<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content btnUse"><input data-v-ad679d4d="" type="text" name="account" placeholder="아이디 (영문, 숫자 포함 4자 이상)" class="">
                                                            <div data-v-ad679d4d="" class="checkUse ko-KR-member"><button data-v-ad679d4d="" type="button" class="regBtn blueB">중복</button></div><!---->
                                                            <div data-v-ad679d4d="" class="hint" style="display: none;">
                                                                <div data-v-ad679d4d="" class="txt">계정등록이 가능합니다.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame verifiUse">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconMOBILE"></span>
                                                        <div data-v-581a52bf="" class="txt">휴대폰 번호<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="text" placeholder="숫자만 입력가능" class="" name="mobile">
                                                            <div data-v-ad679d4d="" class="checkUse"><!----></div><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame remindUse">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconPW"></span>
                                                        <div data-v-581a52bf="" class="txt">비밀번호<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="password" placeholder="비밀번호 (영문, 숫자 포함 6자이상)" class="" name="password"></div>
                                                        <div data-v-ad679d4d="" class="remind-msg-zone" style="display: none;">
                                                            <h5 data-v-ad679d4d="">비밀번호는 아래의 조건이 포함되어야 합니다 :</h5>
                                                            <div data-v-ad679d4d="" class="checkFrame">
                                                                <div data-v-ad679d4d="" class="checkZone">
                                                                    <div data-v-ad679d4d="" class="dot"></div>
                                                                    <h5 data-v-ad679d4d="">최소 6자, 최대 16자</h5>
                                                                </div>
                                                                <div data-v-ad679d4d="" class="checkZone">
                                                                    <div data-v-ad679d4d="" class="dot"></div>
                                                                    <h5 data-v-ad679d4d="">영숫자 조합</h5>
                                                                </div>
                                                                <div data-v-ad679d4d="" class="checkZone">
                                                                    <div data-v-ad679d4d="" class="dot"></div>
                                                                    <h5 data-v-ad679d4d="">(선택)특수기호!@#$%^&amp;*()+_</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconPARTNER"></span>
                                                        <div data-v-581a52bf="" class="txt">통신사<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content btnUse01"><input data-v-ad679d4d="" type="text" placeholder="통신사선택" readonly="" class="" name="mobileCarrier">
                                                            <div data-v-ad679d4d="" class="checkUse ko-KR-choose"><button data-v-ad679d4d="" type="button" class="regBtn goCarrier blueB">선택</button></div><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconPW"></span>
                                                        <div data-v-581a52bf="" class="txt">비밀번호 확인<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="password" placeholder="비밀번호 확인 (영문, 숫자 포함 6자이상)" class="" name="confirmPassword"><!----></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame noLine gender">
                                                    <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="info"><span data-v-ad679d4d="" data-v-2836fdb5-s="" class="icon-icconGendar icon-icon-icconGendar ficon"></span>
                                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="txt">성별<span data-v-ad679d4d="" data-v-2836fdb5-s="">*</span></div>
                                                    </div>
                                                    <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-inner-all">
                                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input_content"><input data-v-ad679d4d="" data-v-2836fdb5-s="" type="text" placeholder="">
                                                            <ul data-v-ad679d4d="" data-v-2836fdb5-s="" class="sex">
                                                                <li data-v-ad679d4d="" data-v-2836fdb5-s="" class="male"><input data-v-ad679d4d="" data-v-2836fdb5-s="" id="male" type="radio" name="sex" value="true"><label data-v-ad679d4d="" data-v-2836fdb5-s="" for="male">남</label></li>
                                                                <li data-v-ad679d4d="" data-v-2836fdb5-s="" class="female"><input data-v-ad679d4d="" data-v-2836fdb5-s="" id="female" type="radio" name="sex" value="false"><label data-v-ad679d4d="" data-v-2836fdb5-s="" for="female">여</label></li>
                                                            </ul><!---->
                                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="checkUse"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame verifiUse">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconPW"></span>
                                                        <div data-v-581a52bf="" class="txt">출금 비밀번호<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="password" placeholder="출금 비밀번호 ( 4-6자리, 숫자만 가능 )" class="" name="moneyPassword"><!----></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame verifiUse"><!----></div>
                                        </div>
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse noLine">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconCALENDAR"></span>
                                                        <div data-v-581a52bf="" class="txt">생년월일<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="text" placeholder="예)19760325" class="" name="birthday"><!----></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame"></div>
                                        </div>
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconMan"></span>
                                                        <div data-v-581a52bf="" class="txt">예금주<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="text" placeholder="예금주 (추후 변경 불가)" class="" name="name"><!----></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconBANK"></span>
                                                        <div data-v-581a52bf="" class="txt">은행이름<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content btnUse01"><input data-v-ad679d4d="" type="text" placeholder="입금은행 선택" readonly="" class="" name="bankName">
                                                            <div data-v-ad679d4d="" class="checkUse ko-KR-choose"><button data-v-ad679d4d="" type="button" class="regBtn goBank blueB">선택</button></div><!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-Out-all">
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconPC"></span>
                                                        <div data-v-581a52bf="" class="txt">계좌번호<span data-v-581a52bf="">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="text" placeholder="계좌 번호(숫자만 입력)" class="" name="bankAccount"><!----></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="input-out-frame">
                                                <div data-v-581a52bf="" data-v-ad679d4d="" data-v-2836fdb5-s="" class="inputFrame verifiUse">
                                                    <div data-v-581a52bf="" class="info"><span data-v-581a52bf="" class="ficon icon-icconRECOMMEND"></span>
                                                        <div data-v-581a52bf="" class="txt">가입코드<span data-v-581a52bf="" style="display: none;">*</span></div>
                                                    </div>
                                                    <div data-v-581a52bf="" class="input-inner-all">
                                                        <div data-v-581a52bf="" class="input_content"><input data-v-ad679d4d="" type="password" placeholder="가입코드를 입력하세요" class="" name="parentAccount"><input data-v-ad679d4d="" type="text" disabled="" style="display: none;"><!----></div>
                                                        <div data-v-ad679d4d="" class="remind-txt">*가입코드 미입력 시 본사코드로 가입됩니다.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="btnFrame"><button data-v-ad679d4d="" data-v-2836fdb5-s="" type="submit" class="btn_p disableBtn">회원가입</button>
                                    <div data-v-ad679d4d="" data-v-2836fdb5-s="" class="txtZone"><a data-v-ad679d4d="" data-v-2836fdb5-s=""></a><a data-v-ad679d4d="" data-v-2836fdb5-s="" href="javascript:void(0)" class="goLogin">이미 계정이 있습니까?<span data-v-ad679d4d="" data-v-2836fdb5-s="" onclick="$('#loginBtn').click()">여기에서 로그인 하기</span></a></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!--v-if-->
            </div>
        </div>
    </div>
<?php } ?>