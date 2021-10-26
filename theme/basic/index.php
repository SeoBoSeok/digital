<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- //m gnb -->
			<!-- //header -->
			<!-- container -->
			<div class="main_content">

				<div id="section0" class="main_visual"  >
					<iframe src="/effect/index.html" width="100%" height="750px" frameborder="0"></iframe>
					<!-- <ul class="bxslider"  >
						<li class="visual01"  >
							<div class="v_frame">
								<p class="v_txt" ><img src="../img/main/v_txt.png" alt="교육이 미래다 The FUTURE is EDUCATION 2020.5.17 ~ 19, 서울 코엑스 "></p>
								<img src="../img/main/visual_frame.png" alt="">
							</div>
							<div class="videoDiv" style="height:650px; "> -->
								<!--<video id="av" width="100%" height="100%">
									<source src="../img/main/video3.mp4" type="video/mp4">
								</video>-->
								<!--<div class="mmov " style="width:1000; height:562; ">-->
								<!-- <div id="background" class="player" data-property="{
      videoURL:'https://youtu.be/i35kxIev3wo',
      mute: true,
      showControls: false,
      useOnMobile: true,
      quality: 'highres',
      containment: '.videoDiv',
      loop: true,
      autoPlay: true,
      stopMovieOnBlur: false,
      startAt: 0,
	  ratio:'16/9',
      opacity: 1
    }"></div>  -->
							<!-- </div>
						</li>

						
					</ul> -->

					<!-- <p id="vnext" class="v_bt"></p>
					<p id="vprev" class="v_bt"></p> -->

				</div>
				<div class="main_quickW">

					<ul class="main_quick">
						<li><a href="../introduce/01_2.php.html"><span class="ico"><img src="../img/main/ico01.png" alt=""></span><strong class="txt_t">Edtech Korea</strong><span class="txt_s">에듀테크를 통한<br>
교육 패러다임의 변화</span></a></li>
						<li><a href="../introduce/01_3.php.html"><span class="ico"><img src="../img/main/ico02.png" alt=""></span><strong class="txt_t">Early-Education</strong><span class="txt_s">조기교육에서 초등교육까지<br>
창의 인재 육성의 시작</span></a></li>
						<li><a href="../introduce/01_4.php.html"><span class="ico"><img src="../img/main/ico03.png" alt=""></span><strong class="txt_t">Next-Education</strong><span class="txt_s">조기교육에서 성인교육까지<br>
전 연령을 대상</span></a></li>
						<li><a href="../introduce/06.php.html"  ><span class="ico"><img src="../img/main/ico04.png" alt=""></span><strong class="txt_t">EDUCON</strong><span class="txt_s">찾음, 준비, 배움, 공유를 통해<br>
교육의 미래를 만나다</span></a></li>
					</ul>
				</div>

				<div id="section1" class="section">
					<div class="main_banner item item_down nth-child-2">
						<ul>
							<li>
								<a href="../media_center/01.php.html"><strong class="txt_t">공지사항</strong><span class="txt">대한민국 교육박람회에서<br>
알려드립니다.</span></a>
							</li>
							<li>
								<a href="../introduce/03.php.html"><strong class="txt_t">부대행사</strong><span class="txt">박람회에서 열리는 다양한 부대행사를<br>
만나보세요.</span></a>
							</li>
							<li>
								<a href="../media_center/01.php.html"><strong class="txt_t">미디어센터</strong><span class="txt">대한민국 교육박함회의<br>
영상 및 보도자료 등을 소개합니다.</span></a>
							</li>
							<li>
								<a href="../exhibitor/01.php.html"><strong class="txt_t">온라인참가신청</strong><span class="txt">부스참가 희망 업체를 위한<br>신청 안내</span></a>
							</li>
							<li>
								<a href="../visit/01.php.html"><strong class="txt_t">참관객</strong><span class="txt">박람회 관람을 희망하시면<br>사전등록을 해주세요.</span></a>
							</li>
							<li>
								<a href="../visit/02.php.html"><strong class="txt_t">비즈매칭</strong><span class="txt">비즈니스를 목적으로 관람하는<br>
업계종사자</span></a>
							</li>
						</ul>


					</div>

				</div>
			   
				<div id="section2" class="section">
					<div class="inner item item_up nth-child-1">
					 
						<div class="slide_banner">
							<ul id="slide_banner">
	
								<li>
																	<a href="../banner_stopover.php%EF%B9%96url=https%EF%B9%95%EA%A4%B7%EA%A4%B7www.lego.com%EA%A4%B7ko-kr&amp;name=(%EA%B5%AD%EB%AC%B8)%EB%A0%88%EA%B3%A0.html" target="_blank">
									
								<img src="../board/free/photo/a_202103190932140.png" alt=""></a></li>
	
								<li>
																	<a href="../banner_stopover.php%EF%B9%96url=https%EF%B9%95%EA%A4%B7%EA%A4%B7www.studymelbourne.vic.gov.au%EA%A4%B7kr%EA%A4%B7home-overseas&amp;name=(%EA%B5%AD%EB%AC%B8)VICTORIA.html" target="_blank">
									
								<img src="../board/free/photo/a_202104231355350.png" alt=""></a></li>
	
								<li>
																	<a href="www.visitseoul.net.html" target="_blank">
									
								<img src="../board/free/photo/a_202108271629270.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.moe.go.kr/main.do?s=moe" target="_blank">
									
								<img src="../board/free/photo/a_202104231639190.png" alt=""></a></li>
	
								<li>
																	<a href="http://www.motie.go.kr/www/main.do" target="_blank">
									
								<img src="../board/free/photo/a_202104231639450.png" alt=""></a></li>
	
								<li>
																	<a href="http://www.moel.go.kr/index.do" target="_blank">
									
								<img src="../board/free/photo/a_202104231640090.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.nile.or.kr/locationChk.jsp" target="_blank">
									
								<img src="../board/free/photo/a_202104231641030.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.edventuresgba.com/" target="_blank">
									
								<img src="../board/free/photo/a_202005071157010.jpg" alt=""></a></li>
	
								<li>
																	<a href="https://www.made-in-china.com/" target="_blank">
									
								<img src="../board/free/photo/a_202102011825470.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.jumpstartmag.com/" target="_blank">
									
								<img src="../board/free/photo/a_202102241855250.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.onoffmix.com/event/235234" target="_blank">
									
								<img src="../board/free/photo/a_202103231522320.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.work.go.kr/" target="_blank">
									
								<img src="../board/free/photo/a_202104091031420.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.gangmom.kr/search-institute/filter" target="_blank">
									
								<img src="../board/free/photo/a_202105181329260.png" alt=""></a></li>
	
								<li>
																	<a href="https://www.visitseoul.net/index" target="_blank">
									
								<img src="../img/logo/no_list.gif.html" alt=""></a></li>

							</ul>
							<p id="slide_l" class="bx_bt"></p>
							<p id="slide_r" class="bx_bt"></p>
						</div>

						
						
					</div>
				</div>
			</div>

	</div>
	<!-- //container -->

<?php
include_once(G5_THEME_PATH.'/tail.php');