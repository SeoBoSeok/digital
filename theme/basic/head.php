<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<body>
<ul id="skipToContent">
  <li><a href="#container">본문 바로가기</a></li>
  <li><a href="#gnbW">주메뉴 바로가기</a></li>
</ul>
<!-- loading -->
<div class="loading_area" id="loading_area" style="display:none">
    <div class="loader"></div>
    <div id="bg"></div>
</div>
<!-- //loading -->


<script></script>
<link rel="stylesheet" type="text/css" href="<?php echo G5_CSS_URL; ?>/animation.css" />
<!-- <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css" /> -->
<div class="header">
            <div class="header_inner">
                <h1 class="logo">
                    <a href="/">
                        <span class="blind">빙그레</span>
                    </a>
                </h1>
            </div>
            <!-- pc gnb// -->
            <div class="gnb_wrap">
                <h2 class="blind">주메뉴</h2>
                <div class="gnb_bg"></div>
                <div class="gnb">
                    <div class="gnb_box">
                        <ul class="gnb_inner">
                                    <li class="gnb_1dep ">
                                        <a href="/story/">디지털박람회</a>
                                        <ul class="gnb_2dep">
                                                <li class=""><a href="/bbs/content.php?co_id=intorduction">행사소개</a></li>
                                                <li class=""><a href="#;">부스배치도</a></li>
                                                <li class=""><a href="#;">참가업체 리스트</a></li>
                                        </ul>
                                    </li>
                                    <li class="gnb_1dep ">
                                        <a href="/brand/">참가업체</a>
                                        <ul class="gnb_2dep">
                                            <li class=""><a href="#;">참가안내</a></li>
                                            <li class=""><a href="#;">온라인 참가신청</a></li>
                                            <li class=""><a href="#;">참가업체 자료</a></li>
                                        </ul>
                                    </li>
                                    <li class="gnb_1dep ">
                                        <a href="/newsroom/movie">관람안내</a>
                                        <ul class="gnb_2dep">
                                            <li class=""><a href="#;">참가업체 등록</a></li>
                                            <li class=""><a href="#;">사전신청 접수</a></li>
                                            <li class=""><a href="#;">숙박안내</a></li>
                                        </ul>
                                    </li>
                                    <li class="gnb_1dep ">
                                        <a href="/customer/faq">미디어</a>
                                        <ul class="gnb_2dep">
                                            <li class="/bbs/board.php?bo_table=notice"><a href="#;">공지사항</a></li>
                                            <li class=""><a href="#;">갤러리</a></li>
                                            <li class=""><a href="#;">영상자료실</a></li>    
                                        </ul>
                                    </li>
                        </ul>
                        <!-- <div class="gnd_2depth_area">
                            <div class="inner">
                                <div class="gnd_banner"> -->
                                    <!-- <div class="slide_item"><a href="#;" target="_blank"><img src="/images/img_gnb_bnr07.png?_=2" alt="플래그쉽스토어 소프트랩 바로가기"></a></div> -->
                                    <!--<div class="slide_wrap">
        <div class="slide_item"><a href="/brand/ferment/1391"><img src="/images/img_gnb_bnr07.png" alt="플래그쉽스토어 소프트랩 바로가기"></a></div>
    </div> -->
                                <!-- </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- //pc gnb -->
            <!-- mobile gnb// -->
            <div class="mobile_gnb_wrap">
                <button type="button" class="menu_btn_open"><i></i><span class="blind">모바일 메뉴 열기/닫기</span></button> <!-- 모바일 메뉴 오픈시 menu_btn_open에 close 클래스 추가 -->
                <div class="mobile_gnb"> <!-- 모바일 메뉴 오픈시 on 클래스 추가 -->
                    <div class="gnb_tit">
                        <span></span>
                    </div>
                    <div class="gnb_con">
                        <ul>
                                    <li>
                                        <a href="#" onclick="return false;" class="mobile_1depth btn_open ">회사소개<i class="blind">펼치기</i></a> <!-- mobile_1depth 클릭 시 on 클래스 추가 -->
                                        <ul class="mobile_2depth_box">
                                            <li>
                                                    <a href="#" onclick="return false;" class="mobile_2depth btn_open ">빙그레 소개<i class="blind">펼치기</i></a>
                                                    <ul class="mobile_3depth"> <!-- 3depth 메뉴가 선택되어 있을 시에 li에 on 클래스 추가 -->
                                                            <li class=""><a href="/story/ceo">CEO인사말</a></li>
                                                            <li class=""><a href="/story/philosophy">경영이념</a></li>
                                                            <li class=""><a href="/story/ethics">윤리경영</a></li>
                                                            <li class=""><a href="/story/business">사업분야</a></li>
                                                            <li class=""><a href="/story/ci">C.I</a></li>
                                                            <li class=""><a href="/story/human_rights">인권경영</a></li>
                                                    </ul>
                                            </li>
                                            <li>
                                                    <a href="/story/history" class="mobile_2depth ">히스토리</a>
                                            </li>
                                            <li>
                                                    <a href="/story/global" class="mobile_2depth ">글로벌 빙그레</a>
                                            </li>
                                            <li>
                                                    <a href="#" onclick="return false;" class="mobile_2depth btn_open ">투자정보<i class="blind">펼치기</i></a>
                                                    <ul class="mobile_3depth"> <!-- 3depth 메뉴가 선택되어 있을 시에 li에 on 클래스 추가 -->
                                                            <li class=""><a href="/story/invest_announce">전자공고</a></li>
                                                            <li class=""><a href="/story/invest_public">공시정보</a></li>
                                                            <li class=""><a href="/story/invest_politics">경영정보</a></li>
                                                            <li class=""><a href="/story/invest_indicator">투자지표</a></li>
                                                            <li class=""><a href="/story/invest_ir">IR자료실</a></li>
                                                            <li class=""><a href="/story/invest_shareholder">기업지배구조</a></li>
                                                    </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" onclick="return false;" class="mobile_1depth btn_open ">제품소개<i class="blind">펼치기</i></a> <!-- mobile_1depth 클릭 시 on 클래스 추가 -->
                                        <ul class="mobile_2depth_box">
                                            <li>
                                                    <a href="/brand/" class="mobile_2depth ">전체</a>
                                            </li>
                                            <li>
                                                    <a href="/brand/icecream" class="mobile_2depth ">아이스크림</a>
                                            </li>
                                            <li>
                                                    <a href="/brand/milk" class="mobile_2depth ">우유/치즈</a>
                                            </li>
                                            <li>
                                                    <a href="/brand/ferment" class="mobile_2depth ">발효유</a>
                                            </li>
                                            <li>
                                                    <a href="/brand/coffee" class="mobile_2depth ">커피/음료</a>
                                            </li>
                                            <li>
                                                    <a href="/brand/desert" class="mobile_2depth ">스낵/디저트</a>
                                            </li>
                                            <li>
                                                    <a href="/brand/export" class="mobile_2depth ">수출제품</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" onclick="return false;" class="mobile_1depth btn_open ">홍보센터<i class="blind">펼치기</i></a> <!-- mobile_1depth 클릭 시 on 클래스 추가 -->
                                        <ul class="mobile_2depth_box">
                                            <li>
                                                    <a href="/newsroom/movie" class="mobile_2depth ">빙그레 CF</a>
                                            </li>
                                            <li>
                                                    <a href="/newsroom/media_press" class="mobile_2depth ">보도자료</a>
                                            </li>
                                            <li>
                                                    <a href="#" onclick="return false;" class="mobile_2depth btn_open ">사회공헌<i class="blind">펼치기</i></a>
                                                    <ul class="mobile_3depth"> <!-- 3depth 메뉴가 선택되어 있을 시에 li에 on 클래스 추가 -->
                                                            <li class=""><a href="/newsroom/contribute_picture">어린이 그림잔치</a></li>
                                                            <li class=""><a href="/newsroom/contribute_font">빙그레 글꼴</a></li>
                                                            <li class=""><a href="/newsroom/contribute_habitat">해비타트</a></li>
                                                            <li class=""><a href="/newsroom/contribute_volunte">빙그레 봉사단</a></li>
                                                            <li class=""><a href="/newsroom/contribute_foundation">재단법인 김구재단</a></li>
                                                            <li class=""><a href="/newsroom/contribute_soundsource">빙그레 음원</a></li>
                                                    </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" onclick="return false;" class="mobile_1depth btn_open ">고객센터<i class="blind">펼치기</i></a> <!-- mobile_1depth 클릭 시 on 클래스 추가 -->
                                        <ul class="mobile_2depth_box">
                                            <li>
                                                    <a href="#" onclick="return false;" class="mobile_2depth btn_open ">고객상담센터<i class="blind">펼치기</i></a>
                                                    <ul class="mobile_3depth"> <!-- 3depth 메뉴가 선택되어 있을 시에 li에 on 클래스 추가 -->
                                                            <li class=""><a href="/customer/faq">자주 묻는 질문</a></li>
                                                            <li class=""><a href="/customer/inquiry">1:1 이메일 문의</a></li>
                                                    </ul>
                                            </li>
                                            <li>
                                                    <a href="/customer/media_notice" class="mobile_2depth ">공지사항</a>
                                            </li>
                                            <li>
                                                    <a href="/privacy/" class="mobile_2depth ">개인정보처리방침</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" onclick="return false;" class="mobile_1depth btn_open ">플래그십스토어<i class="blind">펼치기</i></a> <!-- mobile_1depth 클릭 시 on 클래스 추가 -->
                                        <ul class="mobile_2depth_box">
                                            <li>
                                                    <a href="/flagship/softlab" class="mobile_2depth ">소프트랩</a>
                                            </li>
                                        </ul>
                                    </li>
                        </ul>
                    </div>
                    <div class="link_m_container">
                        <ul>
                            <li class="link_m_customer"><a href="/story/ethics_manage">윤리경영</a></li>
                            <li class="link_m_road"><a href="/support/location">오시는 길</a></li>
                            <li class="link_m_talent"><a href="https://recruit.bing.co.kr" target="_blank" title="새창열림">인재채용</a></li>
                            <li class="link_m_buy"><a href="https://srm.bing.co.kr" target="_blank" title="새창열림">구매포탈시스템</a></li>
                            <li class="link_m_privacy"><a href="/privacy">개인정보처리방침</a></li>
                        </ul>
                    </div>
                    <div class="gnb_footer">
                        <ul>
                            <li class="mobile_lang sle_box2">
                                <a href="#" class="slebx_btn">언어선택</a><!-- 2017-11-22 클릭 시 on 클래스 추가 -->
                                <ul class="link_list">
                                    <li><a href="#" onclick="return false;" target="_blank" title="새 창 열림">KOR</a></li>
                                    <li><a href="http://eng.bing.co.kr/" target="_blank" title="새 창 열림">ENG</a></li>
                                    <li><a href="http://www.bingerui.cn/" target="_blank" title="새 창 열림">CN</a></li>
                                </ul>
                            </li>
                            <li class="mobile_family sle_box2">
                                <a href="#" class="slebx_btn">패밀리사이트</a><!-- 2017-11-22 클릭시 on 클래스 추가 -->
                                <ul class="link_list">
                                    <li><a href="https://www.instagram.com/binggraekorea/" target="_blank" title="새 창 열림">빙그레&nbsp;기업 인스타그램</a></li>
                                    <li><a href="https://www.youtube.com/bingsmile" target="_blank" title="새 창 열림">빙그레&nbsp;기업 유튜브</a></li>
                                    <li><a href="https://www.youtube.com/channel/UCsCjDynxKUOu7nY6tIXT25Q" target="_blank" title="새 창 열림">빙그레 바나나맛우유&nbsp;유튜브</a></li>
                                    <li><a href="https://www.instagram.com/bingicecream.official/" target="_blank" title="새 창 열림">빙그레 아이스크림 인스타그램</a></li>
                                    <li><a href="https://www.youtube.com/channel/UCxjERPPVyHbina73g8Grn-g" target="_blank" title="새 창 열림">빙그레 아이스크림 유튜브</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="sns_list">
                            <!-- <li><a href="https://www.facebook.com/bingsmile" class="link_facebook" target="_blank" title="새 창 열림"><span class="blind">페이스북 바로가기</span></a></li> -->
                            <li><a href="https://www.instagram.com/binggraekorea/" class="link_insta" target="_blank" title="새 창 열림"><span class="blind">인스타그램 바로가기</span></a></li>
                            <li><a href="http://www.youtube.com/bingsmile" class="link_youtube" target="_blank" title="새 창 열림"><span class="blind">유튜브 바로가기</span></a></li>
                            <li><a href="https://www.kicassl.com/cgi-bin/cert-seal4?code=00799a0374e5abdc4a12b8186c73b3" class="link_kica" target="_blank" title="새 창 열림"><span class="blind">한국정보인증 바로가기</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //mobile gnb -->

            <!-- 171107 수정 : 마크업 수정 (util영역 마크업 위치 변경되었습니다) -->
            <div class="util">
                <ul class="util_list">
                    <li><a href="#;" target="">로그인</a></li>
                    <li><a href="#;" target="_blank">회원가입</a></li>
                    <!-- <li><a href="https://recruit.bing.co.kr" target="_blank">인재채용</a></li> -->
                </ul>
                <!--<div class="custom_select sel_box">
                    <a href="#" class="selected"><span>고객센터</span><em class="ir">펼침</em></a>
                    <ul>
                        <li><a href="/customer/faq" title="새 창 열림"><span>자주 묻는 질문</span></a></li>
                        <li><a href="/customer/inquiry" title="새 창 열림"><span>1:1 이메일 문의</span></a></li>
                    </ul>
                </div>-->

                <div class="head_sns_list">
                    <ul>
                        <!--<li><a href="https://www.facebook.com/bingsmile" class="ico_f_facebook" target="_blank" title="새 창 열림"><span class="blind">페이스북 바로가기</span></a></li> -->
                        <li><a href="https://www.instagram.com/binggraekorea/" class="ico_f_insta" target="_blank" title="새 창 열림"><span class="blind">인스타그램 바로가기</span></a></li>
                        <li><a href="http://www.youtube.com/bingsmile" class="ico_f_youtube" target="_blank" title="새 창 열림"><span class="blind">유튜브 바로가기</span></a></li>
                    </ul>
                </div>

                <div class="lang_select sel_box">
                    <a href="#" class="selected"><span>KOR</span></a>
                    <ul>
                        <li><a href="#" onclick="return false;" title="새 창 열림"><span>KOR</span></a></li>
                        <li><a href="http://eng.bing.co.kr/" target="_blank" title="새 창 열림"><span>ENG</span></a></li>
                        <li><a href="http://www.bingerui.cn/" target="_blank" title="새 창 열림"><span>CN</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- // 171107 수정 : 마크업 수정 (util영역 마크업 위치 변경되었습니다) -->
        </div>