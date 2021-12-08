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
            <h2>참여업체</h2>
            <p>문화유산, 디지털과 만나다.</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>참여업체</li>
          </ul>
        </div>
      </section>
      <section class="sec0">
        <div class="inner">
          <div class="cont ani">
          <table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
                <td width="50%" height="55" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=booth'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">부스배치도</td>
                <td width="50%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=schedule'" align="center" style="border-bottom:solid 2px #101443; border-top:solid 1px #efefef; font-size:18px; font-weight:500; cursor:pointer">참여업체</td>
                <!-- <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_edu'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">디지털문화유산 미래교육</td> -->
                <!-- <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_product'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">문화유산상품 마켓</td> -->
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </section>
      <section class="sec1">
        <div class="inner">
          <div class="cont ani active">

          <div class="schedule">
										
					<h3> 1층 컨벤션 홀 </h3>
					
					<div class="wrap-tbl-calendar mb-50 table-container">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
								<col style="width: 15%;">
								<col style="width: 25%;">
								<col style="width: 8%;">
								<col style="width: 8%;">
								<col style="width: 8%;">
								<col style="width: 8%;">
								<col style="width: 8%;">
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
										<th scope="col" class="point_bg">업체명</th>
										<!-- <th scope="col" class="point_bg">구분</th> -->
										<th scope="col" class="point_bg">기록·모델링</th>
										<th scope="col" class="point_bg">복원·복제</th>
										<th scope="col" class="point_bg">소프트웨어</th>
										<th scope="col" class="point_bg">솔루션</th>
										<th scope="col" class="point_bg">콘텐츠</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<th scope="row" rowspan="12">디지털유산<br>연구개발<br>(DH R&D)</th>
										<td class="link" onclick="go_open('/list/wepco.html');">위프코(주)</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/nexpace.html');">㈜넥스페이스</td>
										<td class="bg-common">v</td>
										<td class="bg-by-light">v</td>
										<td class="bg-is-light">v</td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/stella.html');">㈜스텔라무브</td>
										<td></td>
										<td class="bg-by-light">v</td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/3d.html');">3D엔터</td>
										<td></td>
										<td class="bg-by-light">v</td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/carrot.html');">㈜캐럿펀트</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/lihai.html');">㈜리하이</td>
										<td></td>
										<td></td>
										<td class="bg-is-light">v</td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/geostory.html');">㈜지오스토리</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/WaferMasters.html');">WaferMasters</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/ragingduck.html');">레이징덕(주)</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/it.html');">충남문화교육협동조합 잇다</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/scoop.html');">㈜스쿱</td>
										<td class="bg-common">v</td>
										<td></td>
										<td class="bg-is-light">v</td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td class="link" onclick="go_open('/list/ventavr.html');">벤타브이알</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<th scope="row" rowspan="3">디지털유산<br>연구개발<br>(DH R&D)</th>
										<td>한서대학교<br>문화재보존과학연구센터</td>
										<td class="bg-common">v</td>
										<td class="bg-by-light">v</td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td>국립공주대학교<br>디지털보존솔루션랩</td>
										<td class="bg-common">v</td>
										<td class="bg-by-light">v</td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td>한국전통문화대학교<br>문화유산산업학과</td>
										<td></td>
										<td></td>
										<td class="bg-is-light">v</td>
										<td></td>
										<td class="bg-gj-light">v</td>
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
								<col style="width: 25%;">
								<col style="width: 25%;">
								<col style="width: 50%;">
						</colgroup>
						<thead>
								<tr>
										<th scope="col" class="point_bg">항목</th>
										<th scope="col" class="point_bg">업체명</th>
										<th scope="col" class="point_bg">교육 내용</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<th scope="row" rowspan="9">디지털유산<br>미래교육<br>(DH Education)</th>
										<td>충남과학협회</td>
										<td>역사게임 만들기</td>
								</tr>
								<tr>
										<td>한국인지과학산업협회</td>
										<td>인공지능 드론 (문화재 도굴)</td>
								</tr>
								<tr>
										<td>에듀크래프트</td>
										<td>LED 코딩</td>
								</tr>
								<tr>
										<td>메타버스</td>
										<td>역사토론, 퀴즈, 문화재 스피치</td>
								</tr>
								<tr>
										<td>엘리오 로봇틱스</td>
										<td>코딩을 통한 전시실 모델링</td>
								</tr>
								<tr>
										<td>공주대학교 생확과학교실</td>
										<td>3D 펜을 이용한 문화재 만들기</td>
								</tr>
								<tr>
										<td>충남SW 미래채움센터</td>
										<td>로봇코딩</td>
								</tr>
								<tr>
										<td>다빈치에듀</td>
										<td>로봇코딩</td>
								</tr>
								<tr>
										<td>다빈치창의융합연구소</td>
										<td>3D 모델링, AR 콘텐츠 제작</td>
								</tr>
						</tbody>
					</table>
				</div>				

				</div>

          </div>

			<!--테이블2-->

			<div class="cont ani active" style="padding-top: 50px;">

<div class="schedule">
					
<h3> 2층 전시실 </h3>

<div class="wrap-tbl-calendar mb-50 table-container">
<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
								<col style="width: 25%;">
								<col style="width: 25%;">
								<col style="width: 50%;">
						</colgroup>
						<thead>
								<tr>
										<th scope="col" class="point_bg">항목</th>
										<th scope="col" class="point_bg">기관·대학명</th>
										<th scope="col" class="point_bg">콘텐츠명</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<th scope="row" rowspan="3">디지털유산<br>초청전<br>(DH Invitation)</th>
										<td>백제세계유산센터</td>
										<td>디지털로 만나는 백제역사유적지구</td>
								</tr>
								<tr>
										<td>한국전통문화대학교 <br>IDH연구소</td>
										<td>정조대왕의 수원화성 야간군사 훈련 VAR 콘텐츠<br>소실된 웅진백제기 공주 정지산 유적 고건축 AR 콘텐츠</td>
								</tr>
								<tr>
										<td>국립공주대학교·문화유산기술연구소·국립중앙과학관</td>
										<td>청동거울, 과학을 비추다</td>
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
					
<h3> 3층 세미나실 </h3>

<div class="wrap-tbl-calendar mb-50 table-container">
<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
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
</div>
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
								2021 공주 디지털문화유산전<span></span>TEL. 041-840-8377
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
                  <img src="/common/img/main_sec5_img2_new.png" alt="국립 공주대학교 공주학연구원">
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
          <p>Copyright ⓒ 2021공주디지털문화유산전. All rights reserved.</p>
        </div>
      </section>
    </footer>
<!-- </body>
</html> -->
<script>
  function go_open(url) {
    $('#myModal iframe').attr('src', url);
    $('#myModal').modal('show');
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    