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
                <!-- <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_edu'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">디지털유산 미래교육</td> -->
                <!-- <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_product'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">문화 유산상품</td> -->
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
					
					<div class="wrap-tbl-calendar mb-50">
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
										<td>위프코(주)</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td>㈜넥스페이스</td>
										<td class="bg-common">v</td>
										<td class="bg-by-light">v</td>
										<td class="bg-is-light">v</td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td>㈜스텔라무브</td>
										<td></td>
										<td class="bg-by-light">v</td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td>3D엔터</td>
										<td></td>
										<td class="bg-by-light">v</td>
										<td></td>
										<td></td>
										<td></td>
								</tr>
								<tr>
										<td>㈜캐럿펀트</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td>㈜리하이</td>
										<td></td>
										<td></td>
										<td class="bg-is-light">v</td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td>㈜지오스토리</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td>WaferMasters</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td class="bg-is-purple">v</td>
										<td></td>
								</tr>
								<tr>
										<td>레이징덕(주)</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td>충남문화교육협동조합 잇다</td>
										<td class="bg-common">v</td>
										<td></td>
										<td></td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td>㈜스쿱</td>
										<td class="bg-common">v</td>
										<td></td>
										<td class="bg-is-light">v</td>
										<td></td>
										<td class="bg-gj-light">v</td>
								</tr>
								<tr>
										<td>벤타브이알</td>
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
				</div>

          </div>

			<!--테이블2-->

			<!-- <div class="cont ani active">

<div class="schedule">
					
<h3> 2층 전시실 </h3>

<div class="wrap-tbl-calendar mb-50">
<table class="tbl">
	<caption>
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
			<tr>
					<th scope="col" class="point_bg">항목</th>
					<th scope="col" class="point_bg">업체명</th>
					<th scope="col" class="point_bg">기록·모델링</th>
					<th scope="col" class="point_bg">복원·복제</th>
					<th scope="col" class="point_bg">소프트웨어</th>
					<th scope="col" class="point_bg">솔루션</th>
					<th scope="col" class="point_bg">콘텐츠</th>
			</tr>
	</thead>
	<tbody>
			<tr>
					<th scope="row" rowspan="12">디지털<br>유산산업<br>(DH-Industry)</th>
					<td>위프코(주)</td>
					<td class="bg-common">v</td>
					<td></td>
					<td></td>
					<td></td>
					<td class="bg-gj-light">v</td>
			</tr>
			<tr>
					<td>㈜넥스페이스</td>
					<td class="bg-common">v</td>
					<td class="bg-by-light">v</td>
					<td class="bg-is-light">v</td>
					<td></td>
					<td></td>
			</tr>
			<tr>
					<td>㈜스텔라무브</td>
					<td></td>
					<td class="bg-by-light">v</td>
					<td></td>
					<td></td>
					<td></td>
			</tr>
			<tr>
					<td>3D엔터</td>
					<td></td>
					<td class="bg-by-light">v</td>
					<td></td>
					<td></td>
					<td></td>
			</tr>
			<tr>
					<td>㈜캐럿펀트</td>
					<td></td>
					<td></td>
					<td></td>
					<td class="bg-is-purple">v</td>
					<td class="bg-gj-light">v</td>
			</tr>
			<tr>
					<td>㈜리하이</td>
					<td></td>
					<td></td>
					<td class="bg-is-light">v</td>
					<td class="bg-is-purple">v</td>
					<td></td>
			</tr>
			<tr>
					<td>㈜지오스토리</td>
					<td class="bg-common">v</td>
					<td></td>
					<td></td>
					<td class="bg-is-purple">v</td>
					<td></td>
			</tr>
			<tr>
					<td>WaferMasters</td>
					<td class="bg-common">v</td>
					<td></td>
					<td></td>
					<td class="bg-is-purple">v</td>
					<td></td>
			</tr>
			<tr>
					<td>레이징덕(주)</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="bg-gj-light">v</td>
			</tr>
			<tr>
					<td>충남문화교육협동조합 잇다</td>
					<td class="bg-common">v</td>
					<td></td>
					<td></td>
					<td></td>
					<td class="bg-gj-light">v</td>
			</tr>
			<tr>
					<td>㈜스쿱</td>
					<td class="bg-common">v</td>
					<td></td>
					<td class="bg-by-light">v</td>
					<td></td>
					<td class="bg-gj-light">v</td>
			</tr>
			<tr>
					<td>벤타브이알</td>
					<td class="bg-common">v</td>
					<td></td>
					<td></td>
					<td></td>
					<td class="bg-gj-light">v</td>
			</tr>
	</tbody>
</table>
</div>
</div>

</div> -->
			<!--테이블2-->

        </div>
      </section>
      <!-- <section class="sec1-1 ani active">
        <div class="inner">
          <h2>목적 & 비전</h2>
          <div class="vision">
            <ul class="clearfix">
              <li class="left">디지털 헤리티지 분야 최신기술 및 관련산업 소개</li>
              <li class="right">문화유산의 보존 - 활용과 디지털 대전환 촉진 환경 마련</li>
            </ul>
            <ul class="clearfix">
              <li class="left">디바이스 - 솔루션 - 콘텐츠 - 미래교육 기반 디지털 헤리티지 생태계 구축</li>
              <li class="right">디지털 헤리티지 사업 중심지로서 공주시의 위상증대</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sec1-1 ani active">
        <div class="inner">
          <h2>기대효과</h2>
          <div class="vision">
            <ul class="clearfix">
              <li class="left">문화유산의 새로운 가치 창출 및 비즈니스 모델 구축</li>
              <li class="right">'문화유산, 디지털 대전환 시대'에 맞는 디지털 헤리티지 문화 형성</li>
            </ul>
            <ul class="clearfix">
              <li class="left">디지털 기술을 이용하여 인간과 문화유산의 초연결성 확대</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sec2 ani active">
        <div class="inner">
          <h2>2021 Gongju<br>Digital Heritage Festival</h2>
          <p>
            2021 공주디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p>
          <div class="lists">
            <ul>
              <li>
                <a href="#">
                  <img src="/common/img/digital_sec2_img1.jpg" alt="">
                  <div class="text">
                    <span>Program 01</span>
                    <h4>전시콘텐츠</h4>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/common/img/digital_sec2_img2.jpg" alt="">
                  <div class="text">
                    <span>Program 02</span>
                    <h4>미래교육</h4>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/common/img/digital_sec2_img3.jpg" alt="">
                  <div class="text">
                    <span>Program 03</span>
                    <h4>문화유산상품</h4>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/common/img/digital_sec2_img4.jpg" alt="">
                  <div class="text">
                    <span>Program 04</span>
                    <h4>컨퍼런스</h4>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/common/img/digital_sec2_img5.jpg" alt="">
                  <div class="text">
                    <span>Program 05</span>
                    <h4>미래교육</h4>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/common/img/digital_sec2_img6.jpg" alt="">
                  <div class="text">
                    <span>Program 06</span>
                    <h4>문화유산상품</h4>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <a href="./" class="reservation_btn">
            <b>사전예약하기</b>
            <span>12. 18(토) ~ 12. 20(월) 3일간</span>
          </a>
        </div>
      </section> -->
    </div>
    <footer>
      <section class="f_sec1">
        <div class="inner">
          <div class="wrap ani active">
            <div class="contact">
              <h3>Contact</h3>
              <ul>
                <li>
                  공주국립대학교 디지털유산전<span></span>TEL. 042-000-0000
                </li>
                <li>(32552) 충청남도 공주시 봉황로1 공주시청</li>
                <li>E-mail. mail@naver.co.kr</li>
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
          <p>Copyright ⓒ 2021공주디지털문화유산전. All rights reserved.</p>
        </div>
      </section>
    </footer>
<!-- </body>
</html> -->