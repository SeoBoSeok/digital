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
            <p>문화유산, 디지털과 만나다.</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>컨퍼런스</li>
            <li>세미나</li>
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
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=seminar">
                  <span class="subpage-link-text">세미나</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
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
          <h2>세미나</h2>
          <!-- <p>
            2021 공주디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/semina.png" alt="세미나">
            </div>
            <div class="right">
              <h3>
              문화자원과 디지털 아카이브
              </h3>
              <dl>
                <dt>목적</dt>
                <dd>
지역 유·무형 문화유산의 디지털 아카이브 구축을 통해 이용자가 편리하게 사용할 수 있는 시스템 구축<br>역사문화도시 공주 문화유산을 대상으로 체계적이고 효율적인 디지털 아카이브 구축 방안 모색</dd>
              </dl>
              <dl>
                <dt>주관</dt>
                <dd>국립공주대학교 공주학연구원</dd>
              </dl>              
              <dl>
                <dt>대상</dt>
                <dd>문화재 관련 연구자 및 공무원, 아카이브 구축 전문가, 공주시민 등</dd>
              </dl>
              <dl>
                <dt>일시</dt>
                <dd>12월 19일(일) 16:00~18:00</dd>
              </dl>
              <dl>
                <dt>장소</dt>
                <dd>아트센터고마 3F, 세미나실 3</dd>
              </dl>
            </div>
          </div>
          <!-- <div class="video_contents">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//dnDe70-xrHw' frameborder='0' allowfullscreen></iframe></div>
          </div> -->
          <div class="details">
          <div class="schedule">
					<!-- <img src="/common/img/booth_plan_3.jpg" alt="부스배치도" /> -->
					<h3>12월 19일(일) 16:00~18:00</h3>
					
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
										<td><span>15:50 - 16:00</span></td>
										<td><span>등  록</span></td>
                    <td><span>사회:고순영(국립공주대학교 공주학연구원 전문연구원)</span></td>
								</tr>
								<tr>
										<td><span>16:00 - 16:10</span></td>
										<td><span>개  회</span></td>
                    <td><span>개회사:이찬희(국립공주대학교 공주학연구원장)</span></td>
								</tr>
								<tr>
										<td><span>16:10 - 16:40</span></td>
										<td><span>문화유산과 디지털아카이브</span></td>
                    <td><span>[발제1] 김회정(충남역사문화연구원 책임연구원)</span></td>
								</tr>
								<tr>
										<td><span>16:40 - 17:10</span></td>
										<td><span>문화자원 디지털 아카이빙 통합관리 방안</span></td>
                    <td><span>[발제2] 최광훈(알엠소프트 대표)</span></td>
								</tr>
								<tr>
										<td><span>17:10 - 17:40</span></td>
										<td><span>디지털 공주, 공주학 아카이브 만들기</span></td>
                    <td><span>[발제3] 안대진(아카이브랩 대표)</span></td>
								</tr>
								<tr>
										<td><span>17:40 - 18:00</span></td>
										<td><span>패널 토론</span></td>
                    <td><span>문경호(국립공주대학교 역사교육과 교수)</span></td>
								</tr>                                               								                                                           								
						</tbody>
					</table>
				</div>				

				</div>


        <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/semina.png" alt="세미나">
            </div>
            <div class="right">
              <h3>
              디지털 고고학 : 수중부터 항공까지
              </h3>
              <dl>
                <dt>목적</dt>
                <dd>디지털 기술의 발전과 함께 고고학 분야에서 수중-지하-지표-항공의 다시각적 접근이 매우 중요<br>수중-지하-지표-항공 탐사 기술의 고고학적 적용사례 및 고도화 방안 토론</dd>
              </dl>
              <dl>
                <dt>주관·주회</dt>
                <dd>국립공주대학교 역사박물관(백제문화원형복원센터)</dd>
              </dl>              
              <dl>
                <dt>대상</dt>
                <dd>문화재 관련 연구자 및 공무원, 아카이브 구축 전문가, 공주시민 등</dd>
              </dl>
              <dl>
                <dt>일시</dt>
                <dd>12월 20일(월) 14:00~17:20</dd>
              </dl>
              <dl>
                <dt>장소</dt>
                <dd>아트센터고마 3F, 세미나실 7</dd>
              </dl>
            </div>
          </div>        

        <div class="schedule">
					<!-- <img src="/common/img/booth_plan_3.jpg" alt="부스배치도" /> -->
					<h3>12월 20일(월) 14:00~17:20</h3>
					
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
										<td><span>13:30 - 14:00</span></td>
										<td><span>등  록</span></td>
                    <td><span>사회:박준형(국립공주대학교 문화재보존과학과 박사)</span></td>
								</tr>
								<tr>
										<td><span>14:00 - 14:10</span></td>
										<td><span>개  회</span></td>
                    <td><span>개회사:서정석(국립공주대학교 역사박물관장)</span></td>
								</tr>
								<tr>
										<td><span>14:10 - 14:40</span></td>
										<td><span>원격탐사와 공간모델링의 고고학적 활용가능성 고찰</span></td>
                    <td><span>[발제1] 유재형(충남대학교 지질환경과학과 교수)</span></td>
								</tr>
								<tr>
										<td><span>14:40 - 15:10</span></td>
										<td><span>수중고고학의 연구방법과 탐사모델</span></td>
                    <td><span>[발제2] 양기홍(국립해양문화재연구소 학예사)</span></td>
								</tr>
								<tr>
										<td class="gray"><span>15:10 - 15:30</span></td>
										<td class="gray"><span>휴  식</span></td>
                    <td class="gray"><span></span></td>
								</tr>     
								<tr>
										<td><span>15:30 - 16:00</span></td>
										<td><span>고고학 조사현장의 디지털분석 적용과 해석</span></td>
                    <td><span>[발제3] 천승현(국립공주대학교 역사박물관 연구교수)</span></td>
								</tr>  
								<tr>
										<td><span>16:00 - 16:30</span></td>
										<td><span>천부 지층구조 디지털 영상 융합 매장유적 탐사모델 구축</span></td>
                    <td><span>[발제4] 이찬희(국립공주대학교 공주학연구원장)</span></td>
								</tr>
								<tr>
										<td><span>16:30 - 17:20</span></td>
										<td><span>패널토론</span></td>
                    <td><span>박지훈(국립공주대학교 지리교육과 교수)<br>이귀영(국립공주대학교 문화유산대학원 교수)<br>양정석(수원대학교 교양대학 교수)</span></td>
								</tr>                                                                                        								                                                           								
						</tbody>
					</table>
				</div>				

				</div>

          </div>
          <a href="/bbs/content.php?co_id=pre_forms" class="reservation_btn">
            <b>사전신청하기</b>
            <span>12. 18(토) ~ 12. 20(월) 3일간</span>
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