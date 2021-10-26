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
<script>
	var slider = "";
	var slider2 = "";
	$(document).ready(function() {

		var muted = 1;
		var myVideo = document.getElementById("av");
		var agent = navigator.userAgent.toLowerCase();
		name = navigator.appName;
		var browser = '';
		var visual = '';

		/*if (muted == 1) {
			myVideo.muted = true;
			muted = 0;
			$(this).addClass("on");
		} else {
			myVideo.muted = false;
			muted = 1;
			$(this).removeClass("on");
		}*/

		/// 20201207 여기 삭제 ///

		$(window).resize(function() {

		});

		$('#slide_banner').bxSlider({
			minSlides: 2,
			maxSlides: 4,
			infiniteLoop: true,
			slideWidth: '230px',
			moveSlides: 1,
			pager: false,
			auto: false,
			slideMargin: 20,
			nextSelector: '#slide_r',
			prevSelector: '#slide_l',
			nextText: '<img src="../img/main/slide_r.gif">',
			prevText: '<img src="../img/main/slide_l.gif">',

		});



	});

</script>

	
    
	



<ul id="navigation">
    <li><a href="#section0">Section 0</a></li>
    <li><a href="#section1">Section 1</a></li>
    <li><a href="#section2">Section 2</a></li>
    <li><a href="#section3">Section 3</a></li>
    <li><a href="#section4">Section 4</a></li>
    <li><a href="#section5">Section 5</a></li>
    <li><a href="#section6">Section 6</a></li>
</ul>	<div id="wrap" class="main_wrap">
		<!-- header -->
		<div id="header">

    <div class="in_header">
        <h1><a href="main.php.html"><img src="../img/common/logo.png" alt=""></a></h1>

        <!-- <p class="lang"><a href="../eng/main/main.php.html">English</a></p> -->
        <h2 class="skip">주요 서비스 메뉴</h2>

        <div id="gnbW" class="w_gnb">
            <div class="gnb">
    <ul>
        <li class="gnb01"><a href="/bbs/content.php?co_id=introduction"><span>디지털박람회</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="#;">행사소개</a></li>
                <li class="lnb2"><a href="#;">부스배치도</a></li>
				<li class="lnb5"><a href="#;">참가업체리스트</a></li>
                <li class="lnb3"><a href="#;">주요 프로그램</a></li>
            </ul>
        </li>
		
		
		
		
        <li class="gnb05"><a href="../introduce/03.php.html"><span>참가업체</span></a>
            <ul class="sub_menu">
                <li class="lnb2"><a href="../introduce/03.php%EF%B9%96cate_type=1.html">교사대상</a></li>
                <li class="lnb3"><a href="../introduce/03.php%EF%B9%96cate_type=2.html">학부모·학생대상</a></li>
                <li class="lnb4"><a href="../introduce/03.php%EF%B9%96cate_type=3.html">실무자·바이어대상</a></li>
                <li class="lnb5"><a href="../introduce/03.php%EF%B9%96cate_type=4.html">교박 어워드</a></li>
            </ul>
        </li>
				
        <li class="gnb02"><a href="../exhibitor/01.php.html"><span>관람안내</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="../exhibitor/01.php.html">참가업체</a></li>
				<li class="lnb3"><a href="../exhibitor/03.php.html">비즈니스매칭</a></li>
                <li class="lnb2"><a href="../exhibitor/02.php.html">스폰서쉽</a></li>
            </ul>
        </li>
        
        <li class="gnb04"><a href="../media_center/01.php.html"><span>미디어센터</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="../media_center/01.php.html">공지사항</a></li>
                <li class="lnb2"><a href="../media_center/02.php.html">교육소식</a></li>
                <li class="lnb3"><a href="../media_center/03.php.html">갤러리</a></li>
            </ul>
        </li>


    </ul>

</div>
        </div>

        <div class="m_gnbW">
            <div class="m_gnb_on bt_all">
                <div class="menu_btn">
                    <div class="line-top"></div>
                    <div class="line-middle"></div>
                    <div class="line-bottom"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="gnb_bar">
    </div>
</div>

<!-- m gnb -->

<div id="slide_menu_wrap" class="slide_menu_wrap ">
    <div class="slide_menu_inner">
       
        <div class="gnb">
    <ul>
        <li class="gnb01"><a href="../introduce/01.php.html"><span>행사안내</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="../introduce/01.php.html">행사소개</a></li>
				<li class="lnb6"><a href="../introduce/06.php.html">에듀콘</a></li>
                <li class="lnb2"><a href="../introduce/02.php.html">부스배치도</a></li>
				<li class="lnb5"><a href="../introduce/05.php.html">참가업체 리스트</a></li>
                <!--<li class="lnb3"><a href="../introduce/03.php">주요 프로그램</a></li>-->
                <li class="lnb4"><a href="../introduce/04.php.html">지난 행사결과</a></li>
            </ul>
        </li>
		
		
		
		
        <li class="gnb05"><a href="../introduce/03.php.html"><span>주요행사</span></a>
            <ul class="sub_menu">
                <!--<li class="lnb1"><a href="../introduce/06.php">에듀콘</a></li>-->
                <li class="lnb2"><a href="../introduce/03.php%EF%B9%96cate_type=1.html">교사대상</a></li>
                <li class="lnb3"><a href="../introduce/03.php%EF%B9%96cate_type=2.html">학부모·학생대상</a></li>
                <li class="lnb4"><a href="../introduce/03.php%EF%B9%96cate_type=3.html">실무자·바이어대상</a></li>
                <li class="lnb5"><a href="../introduce/03.php%EF%B9%96cate_type=4.html">교박 어워드</a></li>
            </ul>
        </li>
		
		
		
        <li class="gnb02"><a href="../exhibitor/01.php.html"><span>참가안내</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="../exhibitor/01.php.html">참가업체</a></li>
				<li class="lnb3"><a href="../exhibitor/03.php.html">비즈니스매칭</a></li>
                <li class="lnb2"><a href="../exhibitor/02.php.html">스폰서쉽</a></li>
                <!--li class="lnb3"><a href="../exhibitor/03.php">온라인 참가신청</a></li-->
            </ul>
        </li>
        <li class="gnb03"><a href="../visit/01.php.html"><span>관람안내</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="../visit/01.php.html">참관객</a></li>
                <li class="lnb2"><a href="../visit/02.php.html">비즈니스매칭</a></li>
                <li class="lnb3"><a href="../visit/03.php.html">전시장 안내</a></li>
            </ul>
        </li>
        
        <li class="gnb04"><a href="../media_center/01.php.html"><span>미디어센터</span></a>
            <ul class="sub_menu">
                <li class="lnb1"><a href="../media_center/01.php.html">공지사항</a></li>
                <li class="lnb2"><a href="../media_center/02.php.html">교육소식</a></li>
                <li class="lnb3"><a href="../media_center/03.php.html">갤러리</a></li>
            </ul>
        </li>


    </ul>

</div>
    </div>
    <div class="all_close">
        <div class="menu_btn is-open">
            <div class="line-top"></div>
            <div class="line-middle"></div>
            <div class="line-bottom"></div>
        </div>
    </div>
</div>