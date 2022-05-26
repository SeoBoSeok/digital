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
            <h2>컨퍼런스</h2>
            <p>문화유산,<br>디지털 DNA를 품다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>컨퍼런스</li>
            <li>워크샵</li>
          </ul>
        </div>
      </section>
      <!-- <section class="sec0">
        <div class="inner">
          <div class="cont ani">
          <table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
              <tr>
                <td width="33.33%" height="55" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org'" align="center" style="border-bottom:solid 2px #101443; border-top:solid 1px #efefef; font-size:18px; font-weight:500; cursor:pointer">참가안내</td>
                <td width="33.33%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_dev'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">바이어 매칭</td>
                <td width="33.33%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_edu'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">참가업체 자료</td>
              </tr>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </section> -->
      <div class="subpage-more-wrap">
        <span class="subpage-item-lists subpage_nav_lists">
            <span class="subpage-item each-line display-2 subpage_nav_item">
              <a class="subpage-link" href="/bbs/content.php?co_id=symposium">
                  <span class="subpage-link-text">심포지엄</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=seminar">
                  <span class="subpage-link-text">세미나</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=workshop">
                  <span class="subpage-link-text">워크샵</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=tutorial">
                  <span class="subpage-link-text">튜토리얼</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>      
      <section class="sec2 ani active">
        <div class="inner">
          <h2>워크샵</h2>
          <!-- <p>
            2022디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/workshopmain.jpg" alt="정지산 유적">
            </div>
            <div class="right">
              <h3>
                디지털 헤리티지 전문가 워크숍 : 원형DB 고도화 방안
              </h3>
              <dl>
                <dt>목적</dt>
                <dd>
2021-2022년 문화유산 원형기록 통합 DB구축 사업의 3차원 
스캐닝 결과 주요 이슈 공유 및 고도화 방안 협의</dd>
              </dl>
              <dl>
                <dt>주최</dt>
                <dd>문화재청 디지털문화유산팀</dd>
              </dl>
              <dl>
                <dt>주관</dt>
                <dd>국립공주대학교·한국전통문화대학교·NDS컨소시엄</dd>
              </dl>              
              <dl>
                <dt>일시</dt>
                <dd>12월 20일(월) 10:00~15:00</dd>
              </dl>
              <dl>
                <dt>장소</dt>
                <dd>아트센터고마 3F 세미나실 3</dd>
              </dl>
              <!-- <dl>
                <dt>후원</dt>
                <dd>문화재청</dd>
              </dl> -->
            </div>
          </div>
          <!-- <div class="video_contents">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//dnDe70-xrHw' frameborder='0' allowfullscreen></iframe></div>
          </div> -->
          <!-- contents -->
          
          <div class="details">
          <div class="schedule">
					<!-- <img src="/common/img/booth_plan_3.jpg" alt="전시배치" /> -->
					<h3>12월 20일(월) 10:00~15:00</h3>
					
					<div class="wrap-tbl-calendar mb-50 table-container">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
								<col style="width: 20%;">
								<col style="width: 50%;">
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
										<th scope="col" class="point_bg">시 간</th>
										<th scope="col" class="point_bg">프로그램</th>
                    <th scope="col" class="point_bg">연 사</th>
								</tr>
						</thead>
						<tbody>
								<tr>
										<td><span>09:50 - 10:00</span></td>
										<td><span>등  록</span></td>
                    <td><span></span></td>
								</tr>
								<tr>
										<td><span>10:00 - 10:20</span></td>
										<td><span>개  회</span></td>
                    <td><span>개회사:안 호(문화재청 디지털문화유산팀장)<br>환영사:이찬희(국립공주대학교 공주학연구원장)</span></td>
								</tr>
								<tr>
										<td><span>10:20 - 11:00</span></td>
										<td><span>근대문화유산 유형별 기록화 방안 및 이슈</span></td>
                    <td><span>[발제1] 배민준(헤리티지 스튜디오 깃 대표)</span></td>
								</tr>
								<tr>
										<td><span>11:00 - 11:40</span></td>
										<td><span>자연유산 유형별 기록화 방안 및 이슈</span></td>
                    <td><span>[발제2] 오정은(한국전통문화대학교 산학협력단 실장)</span></td>
								</tr>
                <tr>
										<td class="gray"><span>11:40 - 13:00</span></td>
										<td class="gray"><span>중  식</span></td>
                    <td class="gray"><span></span></td>
								</tr>                
								<tr>
										<td><span>13:00 - 13:40</span></td>
										<td><span>유적·건조물문화재 원형DB 구축 이슈 및 워크·검수시트 파일럿 결과</span></td>
                    <td><span>조영훈(국립공주대학교 문화재보존과학과 교수)</span></td>
								</tr>
								<tr>
										<td><span>13:40 - 15:00</span></td>
										<td><span>종합 질의 및 토론</span></td>
                    <td><span>안재홍(한국과학기술원 문화기술대학원 초빙교수)</span><br><span>김충식(한국전통문화대학교 전통조경학과 교수)</span><br><span>조영훈(국립공주대학교 문화재보존과학과 교수)</span></td>
								</tr>                                               								                                                           								
						</tbody>
					</table>
				</div>
				</div>
        </div>
          
          <!-- contents -->
          <a href="/bbs/content.php?co_id=pre_forms" class="reservation_btn">
            <b>사전등록하기</b>
            <span>06.03(금) ~ 06.05(일) 3일간</span>
          </a>
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
								2022 디지털문화유산전<span></span>TEL. 041-850-0448
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