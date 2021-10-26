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
						<li style="background: url(<?php echo G5_IMG_URL; ?>/main/register.png) center center no-repeat; background-size: cover;"><a href="../introduce/01_2.php.html"><span class="ico"><img src="../img/main/ico01.png" alt=""></span></a></li>
						<li style="background: url(<?php echo G5_IMG_URL; ?>/main/exhibition.png) center center no-repeat; background-size: cover;"><a href="../introduce/01_3.php.html"><span class="ico"><img src="../img/main/ico02.png" alt=""></span></a></li>
					</ul>
				</div>

				<!-- <div id="section1" class="section">
					<div class="main_banner item item_down nth-child-2">


					</div>

				</div> -->
			   
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

<!-- -->

<section class="mainSec03">
			<div class="innerBox">
				<!-- <div class="topLink">
					<div class="video animated showBounce" data-animation="showBounce">
						<h1><img src="../static/images/main/tit_sec03_1.png" alt="video"></h1>
						<p class="text">고객 만족을 위해 노력하는 <br>루미르 주식회사 입니다.</p>
						<a href="../media/promote.asp" class="btnMore txtWhite">VIEW MORE</a>
					</div>
					<div class="brochure animated showBounce" data-animation="showBounce" data-delay="200" style="animation-delay: 200ms;">
						<p class="img"><img src="../static/images/main/img_brochure.png" alt="brochure"></p>
						<h1><img src="../static/images/main/tit_sec03_2.png" alt="brochure"></h1>
						<p class="text">새로운 가치와 시장을 창출하는 <br>루미르 주식회사의 내일을 만나보세요.</p>
						<a href="../media/brochure.asp" class="btnMore txtWhite">VIEW MORE</a>
					</div>
				</div> -->
				<div class="news">
					<div class="newsTit">
						<h1><img src="/img/main/tit_sec03_3.png" alt="news"></h1>
						<a href="../media/report.asp" class="btnMore">VIEW MORE</a>
					</div>
					<div class="list">
<a href="https://news.mt.co.kr/mtview.php?no=2021100411065350095" target="_blank" data-animation="showBounce" data-delay="0" class="animated showBounce">
							<p class="tit">"구름이 가려도 보인다"…국내 독자개발 수자원위성 "홍수 안녕"</p>
							<p class="text">이후 환경부는 충남 태안군에 위치한 한서대 태안비행장에서 시현회를 열고 핵심기술 국산화·개발준비 사항을 점검했다. SAR 탑재체는 실제로 비행기에 실려 태안 인근지역의 수자원을 파악하게 된다. 해당 시현회에는 국내 위성기업 루미르 등도 참여했다.
김동진 환경부 수자원정책관은 '기후위기시대 안전한 물관리를 위해 수자원위성을 역할이 기대된다'며 '민간이 주도하는 우주개발시대를 맞이해 수자원위성 개발사업을 통해 국내 민간위성산업의 육성과 해외수출 기반마련을 위한 정책적 지원을 아끼지 않겠다'고 말했다.</p>
							<p class="date">2021.10.04</p>
						</a>
<a href="https://newsis.com/view/?id=NISX20210517_0001443731&amp;cID=10401&amp;pID=10400" target="_blank" data-animation="showBounce" data-delay="200" class="animated showBounce" style="animation-delay: 200ms;">
							<p class="tit">과기부, ICT 미래 유니콘 15개 기업 선정…최대 100억 신용보증 지원</p>
							<p class="text">과학기술정보통신부는 2021년 글로벌 정보통신기술(ICT) 미래 유니콘 육성사업에 15개 기업을 최종 선정했다고 17일 밝혔다. ▲다비오 ▲디토닉 ▲루미르 ▲모라이 ▲소셜빈▲실크로드소프트▲쓰리디팩토리▲에이치투오호스피탈리티▲엘리스▲원투씨엠▲웰트▲위즈코어▲크로커스▲퓨리오사에이아이▲한국축산데이터 등이 주인공이다. 글로벌 ICT 미래 유니콘 육성사업은 글로벌 성장 잠재력이 높은 정보통신기술(ICT) 융·복합 분야 유망 중소기업을 발굴해 해외진출, 자금(투·융자) 제공 등 종합 지원을 통해 미래 유니콘 기업으로 육성하는 사업이다.</p>
							<p class="date">2021.05.17</p>
						</a>
<a href="https://spacenews.com/with-cas500-south-korea-launches-journey-toward-private-led-satellite-development/" target="_blank" data-animation="showBounce" data-delay="400" class="animated showBounce" style="animation-delay: 400ms;">
							<p class="tit">With CAS500, South Korea launches journey toward private-led satellite development</p>
							<p class="text">SEOUL, South Korea — The March 22 launch of South Korea’s CAS500-1 remote sensing satellite has marked the beginning of the country’s journey toward the domestic satellite industry being driven by the private sector.</p>
							<p class="date">2021.03.23</p>
						</a>

					</div>
				</div>
			</div>
		</section>

<!-- -->

			</div>

	</div>
	<!-- //container -->

<?php
include_once(G5_THEME_PATH.'/tail.php');