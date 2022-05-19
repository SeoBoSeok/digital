<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
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
            <h2>참여기관</h2>
            <p>문화유산, 디지털 DNA를 품다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>참여기관</li>
            <li>부대행사</li>
          </ul>
        </div>
      </section>
      <!-- <section class="sec0">
        <div class="inner">
          <div class="cont ani">
          <table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
                <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org'" align="center" style="border-bottom:solid 2px #101443; border-top:solid 1px #efefef; font-weight:500; cursor:pointer">디지털문화유산 산업</td>
                <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_dev'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; cursor:pointer">디지털문화유산 연구개발</td>
                <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_edu'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; cursor:pointer">디지털문화유산 미래교육</td>
                <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_product'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; cursor:pointer">문화유산상품 마켓</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </section> -->
      <div class="subpage-more-wrap">
        <span class="subpage-item-lists subpage_nav_lists">
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org">
                  <span class="subpage-link-text">산업</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org_dev">
                  <span class="subpage-link-text">연구개발</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org_edu">
                  <span class="subpage-link-text">미래교육</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org_product">
                  <span class="subpage-link-text">부대행사</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div> 
      <section class="sec1">
        <div class="inner">
          <div class="cont ani active">
            <div class="img_box">
              <div class="wrap invitation_one">
                <img src="/common/img/s4.jpg" alt="디지털 문화 유산전 2021.12.18.SAT - 12.20.MON 10:00 - 18:00 아트센터고마">
              </div>
            </div>
            <div class="info">
              <div class="wrap">
                <h3>부대행사</h3>
                <div class="lists">
                  <p>
                  문화유산 상품마켓·체험,<br>
                  푸드트럭, 무형문화재 공연,<br>
                  버스킹공연, 야간 미디어파사드 등
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="details">
          <div class="schedule">
					<!-- <img src="/common/img/booth_plan_3.jpg" alt="전시배치" /> -->
					<!-- <h3>12월 20일(월) 10:00~15:00</h3> -->
					
					<div class="wrap-tbl-calendar mb-50 table-container">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
								<col style="width: 20%;">
								<col style="width: 40%;">
                <col style="width: 20%;">
                <col style="width: 20%;">
						</colgroup>
						<thead>
								<!-- <tr>
										<th scope="col" colspan="3" class="point_bg"></th>
										<th scope="col" colspan="3" class="point_bg">8월 2주차</th>
										<th scope="col" colspan="7" class="point_bg">8월 3주차</th>
										<th scope="col" colspan="7" class="point_bg">8월 4주차</th>
								</tr> -->
								<tr>
										<th scope="col" class="point_bg">프로그램</th>
										<th scope="col" class="point_bg">내용</th>
                    <th scope="col" class="point_bg">운영시간</th>
                    <th scope="col" class="point_bg">운영장소</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<td><span>문화유산상품마켓•체험(17개팀)</span></td>
										<td><span>누구나 체험하고 즐길 수 있는 문화유산 활용 체험 및 문화유산 상품마켓</span></td>
                    <td><span>06.03.(금)<br>13:00~21:00<br>06.04.(토)~06.05.(일) 10:00~21:00</span></td>
                    <td rowspan="8">아트센터고마<br>야외</td>
								</tr>
								<tr>
										<td><span>공주시 관광안내소</span></td>
										<td><span>공주시관광진흥협회에서 운영하는 이벤트 및<br>공주시 관광 명소 안내</span></td>
                    <td><span>06.03.(금)~06.05.(일)<br>10:00~18:00</span></td>
								</tr>
								<tr>
										<td><span>맛있는 푸드트럭(7대)</span></td>
										<td><span>시원한 커피한잔을 시켜놓고~<br>스테이크부터 타코야끼까지 종류별로 즐길 수 있는 먹거리</span></td>
                    <td><span>06.03.(금)~06.05.(일)<br>11:00~21:00</span></td>
								</tr>
								<tr>
										<td><span>무형문화재공연</span></td>
										<td><span>충청남도 무형문화재 제37호<br>공주선학리지게놀이 한마당</span></td>
                    <td><span>06.04.(토)<br>17:00~18:00</span></td>
								</tr>
								<tr>
										<td><span>한 여름의 꿈,<br>버스킹 공연</span></td>
										<td><span>다양한 음악공연이 가득한 버스킹 공연</span></td>
                    <td><span>06.03.(금)~06.05.(일)<br>13:00~19:00</span></td>
								</tr>
								<tr>
										<td><span>야간 미디어파사드</span></td>
										<td><span>국립공주대학교·한국전통문화대학교<br>대학(원)생이 제작한 ‘빛·역사·기술’<br>미디어파사드</span></td>
                    <td>06.03.(금)~06.04.(토)<br>20:00~21:00</td>
								</tr>
                <tr>
										<td><span>선물 팡팡 이벤트</span></td>
										<td><span>디지털문화유산전에서 이정도는 기본이지!
<br>후원기업과 함께하는 상품이 가득한 이벤트
<br>아이패드 가지고 싶으면 일단 참가하기~</span></td>
                    <td><span>06.03.(금)
<br>14:00
<br>06.04.(토)~06.05.(일)
<br>14:00, 19:00</span></td>
								</tr>                                                                   								                                                           								
						</tbody>
					</table>
				</div>
				</div>
        </div>
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