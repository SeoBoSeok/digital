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
            <p>문화유산, 디지털과 만나다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>컨퍼런스</li>
            <li>튜토리얼</li>
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
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=workshop">
                  <span class="subpage-link-text">워크샵</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=tutorial">
                  <span class="subpage-link-text">튜토리얼</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>      
      <section class="sec2 ani active">
        <div class="inner">
          <h2>튜토리얼</h2>
          <!-- <p>
            2021 공주디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/tutorial.jpg" alt="정지산 유적">
            </div>
            <div class="right">
              <h3>
                문화재 분야에서의 이미지 분석과 활용
              </h3>
              <dl>
                <dt>목적</dt>
                <dd>문화유산 디지털 이미지의 이해와 영상분석 적용 방법 교육<br>영상분석 맞춤형 소프트웨어 소개 및 사용법 교육</dd>
              </dl>
              <dl>
                <dt>대상</dt>
                <dd>문화유산 영상분석 적용이 필요한 대학생 및 산업체</dd>
              </dl>
              <dl>
                <dt>주최</dt>
                <dd>(사)한국문화재보존과학회</dd>
              </dl>
              <dl>
                <dt>주관</dt>
                <dd>웨이퍼마스터즈</dd>
              </dl>                            
              <dl>
                <dt>일시</dt>
                <dd>12월 18일(토) 15:00~17:50</dd>
              </dl>
              <dl>
                <dt>준비물</dt>
                <dd>노트북 필참<br>
이미지분석 소프트웨어 1개월 사용권 증정<br>
교육생 15명 제한</dd>
              </dl>
              <dl>
                <dt>진행</dt>
                <dd>김정곤(웨이퍼마스터즈 부장)</dd>
              </dl>              
              <dl>
                <dt>장소</dt>
                <dd>아트센터고마 3F 세미나실 7</dd>
              </dl>
              <dl>
                <dt>사전신청</dt>
                <dd><a href="/bbs/content.php?co_id=tutorial_forms" target="_blank">사전신청하기</a></dd>
              </dl>
            </div>
          </div>
          <!-- <div class="video_contents">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed//dnDe70-xrHw' frameborder='0' allowfullscreen></iframe></div>
          </div> -->
          <div class="details">
          <div class="schedule">
					<!-- <img src="/common/img/booth_plan_3.jpg" alt="전시배치" /> -->
					<h3>12월 18일(토) 15:00~17:50</h3>
					
					<div class="wrap-tbl-calendar mb-50 table-container">
					<table class="tbl">
						<caption>
							<!-- <strong>세계유산축전 백제 프로그램 행사일정표</strong>
							<p>세계유산축전 백제 프로그램 행사일정표를 항목, 세부프로그램명, 구분, 날짜로 나누어 안내하는 표입니다.</p> -->
						</caption>
						<colgroup>
								<col style="width: 40%;">
								<col style="width: 60%;">
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
								</tr>
						</thead>
						<tbody>
								<tr>
										<td><span>14:50 - 15:00</span></td>
										<td><span>등  록</span></td>
								</tr>
								<tr>
										<td><span>15:00 - 15:50</span></td>
										<td><span>- 아날로그 신호와 디지털 신호<br>
- 아날로그 이미지와 디지털 이미지<br>
- 색공간과 파장<br>
- 형태 심리학</span></td>
								</tr>
								<tr>
										<td class="gray"><span>15:50 - 16:00</span></td>
										<td class="gray"><span>휴  식</span></td>
								</tr>
								<tr>
										<td><span>16:00 - 16:40</span></td>
										<td><span>- 디지털 이미지의 촬영과 구조<br>
- 초분광 이미지와 3차원 이미지<br>
- 이미지를 통한 정량해석</span></td>
								</tr>
								<tr>
										<td class="gray"><span>16:40 - 16:50</span></td>
										<td class="gray"><span>휴  식</span></td>
								</tr>  
								<tr>
										<td><span>16:50 - 17:30</span></td>
										<td><span>- 문화재 분석 및 데이터베이스화<br>
- 이미지 프로세싱 소프트웨어(PicMan) 시연<br>
- 질의 응답</span></td>
								</tr>
								<tr>
										<td class="gray"><span>17:30 - 17:40</span></td>
										<td class="gray"><span>휴  식</span></td>
								</tr>  
								<tr>
										<td><span>17:40 - 17:50</span></td>
										<td><span>[시상]위광철((사)한국문화재보존과학회장)<br>* 우수 교육생 시상</span></td>
								</tr>                                                                                             								
						</tbody>
					</table>
				</div>				

				</div>
          </div>
          <a href="javascript:alert('온라인 사전예약이 마감되었습니다.\n행사장에 방문해서 현장등록으로 참여해주세요.')" class="reservation_btn">
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