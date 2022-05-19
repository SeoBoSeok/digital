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
            <p>문화유산, 디지털 DNA를 품다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>컨퍼런스</li>
            <li>심포지엄</li>
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
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=symposium">
                  <span class="subpage-link-text">심포지엄</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="#;">
                  <span class="subpage-link-text">초청강연</span>
              </a>
            </span>
            <!-- <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=seminar">
                  <span class="subpage-link-text">세미나</span>
              </a>
            </span> -->
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=tutorial">
                  <span class="subpage-link-text">튜토리얼</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="#;">
                  <span class="subpage-link-text">발표회</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>      
      <section class="sec2 ani active">
        <div class="inner">
          <h2>심포지엄</h2>
          <!-- <p>
            2022디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/sym.jpg" alt="정지산 유적">
            </div>
            <div class="right">
              <h3>
                디지털 문화유산 생태계 : 산업&교육&연구
              </h3>
              <dl>
                <dt>목적</dt>
                <dd>
 디지털 문화유산 분야 최신 기술(디바이스·솔루션·콘텐츠 등) 및 관련 사례 소개<br>
 디지털 문화유산 산업·교육·연구개발 생태계 구축 및 문화유산 디지털 대전환 촉진 환경 마련
</dd>
              </dl>
              <dl>
                <dt>주최</dt>
                <dd>공주시</dd>
              </dl>              
              <dl>
                <dt>주관</dt>
                <dd>국립공주대학교 공주학연구원</dd>
              </dl>
              <dl>
                <dt>일시</dt>
                <dd>06월 04일(토) 13:00 ~</dd>
              </dl>
              <!-- <dl>
                <dt>준비물</dt>
                <dd>개인 노트북 지참(필수사항 아님), 테스트 이미지는<br>튜토리얼 시작 시 USB 배포 or 사전 배포</dd>
              </dl> -->
              <dl>
                <dt>장소</dt>
                <dd>아트센터고마 1층 컨퍼런스홀</dd>
              </dl>
            </div>
          </div>

<!-- contents -->
          
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
                <col style="width: 40%;">
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
										<td><span>13:20 ~ 13:30</span></td>
										<td><span>개회사 : 유석호 (국립공주대학교 공주학연구원장)</span></td>
                    <td><span>-</span></td>
								</tr>
								<tr>
										<td><span>13:30 ~ 14:00</span></td>
										<td><span>[발제 1] 안호 (문화재청 디지털문화유산팀 팀장)<br>>디지털 문화유산 정책의 목표와 전략</span></td>
                    <td><span>-</span></td>
								</tr>
								<tr>
										<td><span>14:00 ~ 14:30</span></td>
										<td><span>[발제 2] 안재홍 (한국과학기술원 문화기술대학원 초빙교수)<br>디지털 문화유산 연구와 정책의 방향: 디지털문화유산센터 기본계획으로부터의 시사점</span></td>
                    <td><span>-</span></td>
								</tr>
								<tr>
										<td><span>14:30 ~ 15:00</span></td>
										<td><span>[발제 3] 박상현 (한국지능정보사회진흥원 ICT융합본부장)<br>문화유산 분야에서 메타버스의 발전 방향과 활성화 전략</span></td>
                    <td><span>-</span></td>
								</tr>
								<tr>
										<td class="gray"><span>15:00 ~ 15:20</span></td>
										<td class="gray"><span>휴  식</span></td>
                    <td class="gray"><span>-</span></td>
								</tr>
								<tr>
										<td><span>15:20 ~ 15:50</span></td>
										<td><span>[발제 4] 장성각 (충남정보문화산업진흥원 실감클러스터 본부장)<br>충남 지역 디지털 문화유산의 현황과 활성화 방안</span></td>
                    <td>-</td>
								</tr>
                <tr>
										<td><span>15:50 ~ 16:20</span></td>
										<td><span>[발제 5] 김동현 (전주대학교 소방안전공학과 교수)<br>문화유산 안전 및 보존을 위한 디지털 데이터 중요성</span></td>
                    <td><span>-</span></td>
								</tr>
								<tr>
										<td><span>16:20 ~ 16:50</span></td>
										<td><span>[발제 6] 최동훈 (RM소프트)<br>NFT를 활용한 기록유산 디지털 아카이빙</span></td>
                    <td><span>-</span></td>
								</tr>
								<tr>
										<td><span>16:50 ~ 17:30</span></td>
										<td><span>[패널 토론] 이찬희 (2022 디지털문화유산전 조직위원장)<br>안호, 안쟁홍, 박상현, 장성각, 김동현, 최광훈</span></td>
                    <td><span>-</span></td>
								</tr>                                                                       								                                                           								
						</tbody>
					</table>
				</div>
				</div>
        </div>
          
          <!-- contents -->          

          <!-- <div class="video_contents">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//dnDe70-xrHw' frameborder='0' allowfullscreen></iframe></div>
          </div> -->
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