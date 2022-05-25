<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
?>
    <?php
      include_once(G5_THEME_PATH.'/header.part.sub.php');
    ?>
    <div class="digital">
      <section class="visual">
        <div class="inner">
          <span class="bg_img"></span>
          <div class="line">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="wrap">
            <h2>전시구성</h2>
            <p>문화유산, 디지털과 만나다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>전시소개</li>
            <li>전시구성</li>
          </ul>
        </div>
      </section>
      <div class="subpage-more-wrap">
        <span class="subpage-item-lists subpage_nav_lists">
            <span class="subpage-item each-line subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=booth">
                  <span class="subpage-link-text">전시배치</span>
              </a>
            </span>
            <span class="subpage-item each-line subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=schedule">
                  <span class="subpage-link-text">전시구성</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>
      <!-- <section class="sec0">
        <div class="inner">
          <div class="cont ani">
          <table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
                <td width="50%" height="55" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=booth'" align="center" style="border-bottom:solid 2px #101443; border-top:solid 1px #efefef; font-size:18px; cursor:pointer; font-weight:500;">전시배치</td>
                <td width="50%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=schedule'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">전시구성</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </section> -->
      <section class="sec1">
        <div class="inner">
          <div class="cont ani active">

          <div class="schedule">
					<!-- <img src="/common/img/booth_plan_3.jpg" alt="전시배치" /> -->
					<h3> 1층 컨벤션 홀 </h3>
          <!-- <span class="right"><span class="ki">기</span>&nbsp;기록·모델링&nbsp;&nbsp;<span class="bok">복</span>&nbsp;복원·복제&nbsp;&nbsp;<span class="so">소</span>&nbsp;소프트웨어&nbsp;&nbsp;<span class="sol">솔</span>&nbsp;솔루션&nbsp;&nbsp;<span class="con">콘</span>&nbsp;콘텐츠</span> -->
					
					<div class="wrap-tbl-calendar mb-50 table-container">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
								<col style="width: 20%;">
								<col style="width: 10%;">
								<col style="width: 40%;">
								<col style="width: 30%;">
						</colgroup>
						<thead>
								<!-- <tr>
										<th scope="col" colspan="3" class="point_bg"></th>
										<th scope="col" colspan="3" class="point_bg">8월 2주차</th>
										<th scope="col" colspan="7" class="point_bg">8월 3주차</th>
										<th scope="col" colspan="7" class="point_bg">8월 4주차</th>
								</tr> -->
								<tr>
										<th scope="col" class="point_bg">항목</th>
										<th scope="col" class="point_bg">부스 번호</th>
										<th scope="col" class="point_bg">참여기관명</th>
										<th scope="col" class="point_bg">해당분야</th>
								</tr>
						</thead>
						<tbody>
								<tr>
									<th scope="row" rowspan="14">디지털문화유산<br>산업</th>
									<td>A01</td>
                  <td class="link" onclick="go_open('/list/geostory.html');">㈜지오스토리</td>
                  <td>초분광 시스템, 드론, 3차원 모델링, 디지털 트윈, 디지털 아카이브</td>
								</tr>
								<tr>
                  <td>A02</td>
                  <td class="link" onclick="go_open('/list/nexpace.html');">㈜넥스페이스</td>
                  <td>3D 스캐너·프린터, 3D 소프트웨어, 디지털 아카이브, 디지털 복원·복제</td>
								</tr>
								<!-- <tr>
                  <td>A03</td>
                  <td class="link" onclick="go_open('/list/stella.html');">㈜스텔라무브</td>
                  <td>컬러 및 대형 3D 프린터 개발</td>
								</tr> -->
								<tr>
                  <td>A03</td>
                  <td class="link" onclick="go_open('/list/3d.html');">3D엔터</td>
                  <td>산업용 대형 FDM 3D프린터</td>
								</tr>
								<tr>
									<td>A04</td>
									<td class="link" onclick="go_open('/list/wepco.html');"><span>위프코(주)</span></td>
									<td>광대역 3D 스캐너, 디지털 트윈, 디지털 아카이브</td>
								</tr>
								<tr>
                  <td>B01</td>
                  <td class="link" onclick="go_open('/list/WaferMasters.html');">WaferMasters</td>
                  <td>디지털 이미지 분석 소프트웨어 개발, 문화유산 영상분석 솔루션</td>
								</tr>
								<tr>
                  <td>B02</td>
                  <td class="link" onclick="go_open('/list/carrot.html');">㈜캐럿펀트</td>
                  <td>디지털 실측 솔루션, 3D 스캐닝, 디지털 아카이브, 빅데이터, 디지털 트윈, 로봇, AI</td>
								</tr>
								<tr>
                  <td>B03</td>
                  <td class="link" onclick="go_open('/list/lihai.html');">㈜리하이</td>
                  <td>드론, 인공지능, 통합 모니터링 플랫폼</td>
								</tr>
								<tr>
									<td>B04</td>
									<td class="link" onclick="go_open('/list/rmsoft.html');">㈜알엠소프트</td>
									<td>NFT, 아카이빙시스템, 공공기관 기록물 관리</td>
								</tr>
								<tr>
									<td>B05</td>
									<td class="link" onclick="go_open('/list/detas.html');">㈜디타스</td>
									<td>3D 스캐닝, BIM, 디지털 트윈,<br>콘텐츠 기획, IoT</td>
								</tr>			
								<tr>
									<td>C01</td>
									<td class="link" onclick="go_open('/list/audena.html');">㈜아우데나</td>
									<td>디지털 아카이브, 디지털 복원, 디지털 트윈, AR/VR, 게임 개발</td>
								</tr>			
								<tr>
									<td>C02</td>
									<td class="link" onclick="go_open('/list/xr.html');">㈜엑스알파운더리</td>
									<td></td>
								</tr>	
								<tr>
									<td>C03</td>
									<td class="link" onclick="go_open('/list/arlook.html');">에이알룩</td>
									<td>AR/VR/MR/XR, 메타버스</td>
								</tr>	
								<tr>
									<td>C04</td>
									<td class="link" onclick="go_open('/list/ragingduck.html');">레이징덕(주)‧랜덤박스‧충남교육협동조합 잇다</td>
									<td></td>
								</tr>																																					
<!-- 								
								<tr>
                  <td>A13</td>
                  <td class="link" onclick="go_open('/list/ragingduck.html');">레이징덕(주)</td>
                  <td>VR, AR 모바일 콘텐츠 제작</td>
								</tr>
								<tr>
                  <td>A05</td>
                  <td class="link" onclick="go_open('/list/it.html');">충남문화교육협동조합 잇다</td>
                  <td>VR, AR 실감형 콘텐츠 제작</td>
								</tr>
								<tr>
                  <td>A04</td>
                  <td class="link" onclick="go_open('/list/scoop.html');">㈜스쿱</td>
                  <td>3D 프린터 기반 디오라마 제작</td>
								</tr>
								<tr>
                  <td>A14</td>
                  <td class="link" onclick="go_open('/list/ventavr.html');">벤타브이알</td>
                  <td>메타버스, 3D 실감 XR 콘텐츠</td>
								</tr>
								<tr>
                  <td>A06</td>
                  <td class="link" onclick="go_open('/list/overseaschf.html');">국외소재문화재재단</td>
                  <td>국외문화재에 대한 조사·연구, 환수·활용</td>
								</tr>
								<tr>
                  <td>A07</td>
                  <td class="link" onclick="go_open('/list/hedico.html');">한국문화재디지털보존협회</td>
                  <td>국외문화재의 디지털 귀향 및 보존</td>
								</tr>																
								<tr>
										<th scope="row" rowspan="3">디지털문화유산<br>연구개발</th>
										<td>C01</td>
										<td class="link" onclick="go_open('/list/hanseo.html');">한서대학교<br>문화재보존과학연구센터</td>
										<td>문화유산의 조사, 연구, 보존</td>
								</tr>
								<tr>
                  <td>C02</td>
                  <td class="link" onclick="go_open('/list/hmd.html');">한국전통문화대학교<br>Future Heritage Lab</td>
                  <td>가상박물관, 디지털 아카이브, 콘텐츠 기획</td>
								</tr>
								<tr>
                  <td>C03</td>
                  <td class="link" onclick="go_open('/list/dsl.html');">국립공주대학교<br>디지털보존솔루션랩</td>
                  <td>디지털 기술 기반 보존·활용 솔루션 개발</td>
								</tr>								 -->
						</tbody>
					</table>
				</div>

				<div class="wrap-tbl-calendar mb-50 table-container" style="padding-top: 40px;">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
              <col style="width: 20%;">
              <col style="width: 10%;">
              <col style="width: 40%;">
              <col style="width: 30%;">
						</colgroup>
						<thead>
								<tr>
										<th scope="col" class="point_bg">항목</th>
                    <th scope="col" class="point_bg">부스</th>
										<th scope="col" class="point_bg">기관명</th>
										<th scope="col" class="point_bg">교육 내용</th>
								</tr>
						</thead>
						<tbody>
								<tr>
                  <th scope="row" rowspan="9">디지털문화유산<br>연구개발</th>
                  <td>D01</td>
										<td class="link" onclick="go_open('/list/hightech.html');">하이테크</td>
										<td>IoT 센서, IoT 통신장비, IoT 스마트펜스</td>
								</tr>
								<!-- <tr>
                  <td></td>
										<td>한국인지과학산업협회</td>
										<td>인공지능 드론 (문화재 도굴)</td>
								</tr> -->
								<tr>
                  <td>D02</td>
										<td class="link" onclick="go_open('/list/ipop.html');">㈜아이팝</td>
										<td></td>
								</tr>
								<!-- <tr>
                  <td></td>
                  <td>메타버스</td>
										<td>역사토론, 퀴즈, 문화재 스피치</td>
								</tr> -->
								<tr>
                  <td>D03</td>
										<td class="link" onclick="#;">충남정보문화산업진흥원</td>
										<td>XR, 실감콘텐츠, 메타버스</td>
								</tr>
								<tr>
                  <td>D04</td>
										<td class="link"  onclick="go_open('/list/dsl.html');">국립공주대학교 디지털보존솔루션랩</td>
										<td>3D 스캐닝·프린팅, 디지털 복원·복제, 인터랙티브 콘텐츠, 보존솔루션 개발</td>
								</tr>
								<!-- <tr>
                  <td></td>
										<td>충남SW 미래채움센터</td>
										<td>로봇코딩</td>
								</tr> -->
								<tr>
                  <td>D05</td>
										<td class="link" onclick="#;">한국전통문화대학교 문화유산산업학과</td>
										<td>문화유산 아카이브, HBIM, 디지털 큐레이션, 디지털 콘텐츠 기획, 디지털 스토리텔링</td>
								</tr>
								<tr>
                  <td>D06</td>
										<td class="link" onclick="#;">문화유산기술연구소</td>
										<td>디지털 아카이브, AR/VR/MR/XR, 메타버스, 디지털 복원·복제·트윈, 실감콘텐츠 기획·제작</td>
								</tr>
						</tbody>
					</table>
				</div>				

				<div class="wrap-tbl-calendar mb-50 table-container" style="padding-top: 40px;">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
              <col style="width: 20%;">
              <col style="width: 10%;">
              <col style="width: 40%;">
              <col style="width: 30%;">
						</colgroup>
						<thead>
								<tr>
										<th scope="col" class="point_bg">항목</th>
                    <th scope="col" class="point_bg">부스</th>
										<th scope="col" class="point_bg">기관명</th>
										<th scope="col" class="point_bg">교육 내용</th>
								</tr>
						</thead>
						<tbody>
								<tr>
                  <th scope="row" rowspan="9">디지털문화유산<br>미래교육</th>
                  <td>E01</td>
										<td class="link" onclick="#;">㈜에듀밋</td>
										<td>메타버스 교육, 가상공간 체험교육,<br>문화유산과 스토리텔링</td>
								</tr>
								<!-- <tr>
                  <td></td>
										<td>한국인지과학산업협회</td>
										<td>인공지능 드론 (문화재 도굴)</td>
								</tr> -->
								<tr>
                  <td>E02</td>
										<td class="link" onclick="go_open('/list/davinci2.html');">다빈치창의융합연구소</td>
										<td>빅데이터·AI 코딩, 메이커 교육, VR·AR 교육</td>
								</tr>
								<!-- <tr>
                  <td></td>
                  <td>메타버스</td>
										<td>역사토론, 퀴즈, 문화재 스피치</td>
								</tr> -->
								<tr>
                  <td>E03</td>
										<td class="link" onclick="go_open('/list/davinci.html');">다빈치에듀</td>
										<td>디지털 리터러시 교육, SW 코딩 교육, 핑퐁로봇, 모션메이커</td>
								</tr>
								<tr>
                  <td>E04</td>
										<td class="link" onclick="go_open('/list/csa.html');">충남과학협회</td>
										<td>미디어 리터러시 교육, 드론 교육,<br>빅데이터 교육</td>
								</tr>
								<!-- <tr>
                  <td></td>
										<td>충남SW 미래채움센터</td>
										<td>로봇코딩</td>
								</tr> -->
								<tr>
                  <td>E05</td>
										<td class="link" onclick="#;">SW충남남부미래채움</td>
										<td>3D 입체 구조 학습, 언플러그드 코딩, 게임형 컨텐츠, 센서 모니터링, 디버깅 학습</td>
								</tr>
								<!-- <tr>
                  <td>B06</td>
										<td class="link" onclick="go_open('/list/davinci2.html');">다빈치창의융합연구소</td>
										<td>3D 모델링, AR 콘텐츠 제작</td>
								</tr> -->
						</tbody>
					</table>
				</div>				

				</div>

          </div>

			<!--테이블2-->

			<div class="cont ani active" style="padding-top: 50px;">

<div class="schedule">
					
<h3> 2층 실내전시실 </h3>

<div class="wrap-tbl-calendar mb-50 table-container">
<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
              <col style="width: 20%;">
              <col style="width: 10%;">
              <col style="width: 40%;">
              <col style="width: 30%;">
						</colgroup>
						<thead>
								<tr>
                  <th scope="col" class="point_bg">항목</th>
                  <th scope="col" class="point_bg">부스번호</th>
                  <th scope="col" class="point_bg">참여 업체·기관</th>
                  <th scope="col" class="point_bg">전시내용</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<th scope="row" rowspan="3">디지털문화유산<br>초청전</th>
                    <td>F01</td>
										<td class="link" onclick="go_open('/list/ragingduck.html');">레이징덕(주)‧랜덤박스(주)‧충남협동조합 잇다</td>
										<td>디지털로 만나는 백제역사유적지구</td>
								</tr>
								<tr>
                  <td>F02</td>
										<td class="link" onclick="go_open('/list/IDH.html');">한국전통문화대학교 <br>IDH연구소</td>
										<td>고증 기반 디지털 복원,<br>AR/VR, 3D 스캐닝·프린팅</td>
								</tr>
								<tr>
                  <td>F03</td>
										<td class="link" onclick="go_open('/list/baekjae.html');">(재)백제세계유산센터</td>
										<td>VR/XR, 디지털 아카이브</td>
								</tr>
						</tbody>
					</table>
</div>
</div>

</div>
			<!--테이블2-->

			<!--테이블3-->

			<div class="cont ani active" style="padding-top: 50px;">

<div class="schedule">
					
<!-- <h3> 3층 세미나실 </h3>

<div class="wrap-tbl-calendar mb-50 table-container">
<table class="tbl">
						<caption>
						</caption>
						<colgroup>
								<col style="width: 35%;">
								<col style="width: 25%;">
								<col style="width: 40%;">
						</colgroup>
						<thead>
								<tr>
										<th scope="col" class="point_bg">항목</th>
										<th scope="col" class="point_bg">발표자</th>
										<th scope="col" class="point_bg">주제</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<th scope="row" rowspan="10">심포지엄(12월 19일)<br><br>디지털 헤리티지 생태계 : 산업&교육&연구<br>주최 : 공주시<br>주관 : 국립공주대학교 공주학연구원</th>
										<td colspan="2">기조연설</td>
								</tr>
								<tr>
										<td>리하이 추혜성 대표</td>
										<td>디지털 헤리티지 스타트업 활성화 방안<br>- 드론 및 인공지능 기술 중심으로</td>
								</tr>
								<tr>
										<td>캐럿펀트 이건우 대표</td>
										<td>고고 유물의 디지털 기록 및 실측을 위한 디지털 솔루션 개발</td>
								</tr>
								<tr>
										<td>백제세계유산센터 도미솔</td>
										<td>디지털 백제역사유적지구</td>
								</tr>
								<tr>
										<td>벤타브이알 전우열 대표</td>
										<td>문화유산 메타버스<br>- 신라에서 백제로</td>
								</tr>
								<tr>
										<td>다빈치창의융합연구소 이수진 소장</td>
										<td>디지털 문화유산을 이용한 미래교육</td>
								</tr>
								<tr>
										<td>국립공주대학교 조영훈 교수</td>
										<td>인터랙티브 미디어아트 교육콘텐츠 개발<br>- 청동거울, 과학을 비추다</td>
								</tr>
								<tr>
										<td>한서대학교 오승준 교수</td>
										<td>3차원 디지털 기술을 활용한 도자기 유물의 보존방안</td>
								</tr>
								<tr>
										<td>전통문화대학교 유정민 교수</td>
										<td>확장현실 기반 디지털 헤리티지 연구의 발전방향</td>
								</tr>
								<tr>
										<td colspan="2">종합토론</td>
								</tr>
						</tbody>
					</table>
</div> -->
</div>

</div>
			<!--테이블3-->			

        </div>
      </section>
    </div>
    <footer>
      <section class="f_sec1">
        <div class="inner">
          <div class="wrap ani active">
            <div class="contact">
              <h3>Contact</h3>
              <ul>
              <li>
								2022 디지털문화유산전<span></span>TEL. 041-840-8377
                </li>
                <li>(32552) 충청남도 공주시 봉황로1 공주시청 문화재과</li>
              </ul>
            </div>
            <div class="lists">
              <ul>
                <li>
                  <span>주최.</span>
                  <img src="/common/img/main_sec5_img1.png" alt="공주시">
                  <img class="mo" src="/common/img/main_sec5_img1_m.png" alt="공주시">
                </li>
                <li>
                  <span>주관.</span>
                  <img src="/common/img/main_sec5_img2.png" alt="국립 공주대학교 공주학연구원">
                  <img class="mo" src="/common/img/main_sec5_img2_m.png" alt="국립 공주대학교 공주학연구원">
                </li>
                <li>
                  <span>후원.</span>
                  <img src="/common/img/main_sec5_img3.png" alt="문화재청">
                  <img class="mo" src="/common/img/main_sec5_img3_m.png" alt="문화재청">
                </li>
              </ul>
            </div>
          </div>
          <button type="button" id="top_btn">
            <span>TOP</span>
          </button>
        </div>
      </section>
      <section class="f_sec2">
        <div class="inner">
          <p>Copyright ⓒ 2022 디지털문화유산전. All rights reserved.</p>
        </div>
      </section>
    </footer>
<!-- </body>
</html> -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="" width="100%" height="700px" frameborder="0" sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-top-navigation allow-popups-to-escape-sandbox allow-top-navigation"
                        allowtransparency="true"></iframe>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
  function go_open(url) {
    $('#myModal iframe').attr('src', url);
    $('#myModal').modal('show');
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    