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
            <!-- <li>디지털문화유산 산업</li> -->
          </ul>
        </div>
      </section>
      <!-- <section class="sec0">
        <div class="inner">
          <div class="cont ani">
          <table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
                <td width="33.33%" height="55" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org'" align="center" style="border-bottom:solid 2px #101443; border-top:solid 1px #efefef; font-size:18px; font-weight:500; cursor:pointer">컨퍼런스</td>
                <td width="33.33%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_dev'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">바이어 매칭</td>
                <td width="33.33%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_edu'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">참가업체 자료</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </section> -->
      <div class="subpage-more-wrap">
        <span class="subpage-item-lists subpage_nav_lists">
            <!-- <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=about">
                  <span class="subpage-link-text">전시구성</span>
              </a>
            </span> -->
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=Invitation">
                  <span class="subpage-link-text">초청전</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=conference">
                  <span class="subpage-link-text">컨퍼런스</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>
      <section class="sec1">
        <div class="inner">
          <div class="cont ani active">
            <div class="img_box">
              <div class="wrap invitation_one">
                <!-- <img src="/common/img/digital_sec1_img1.png" alt="디지털 문화 유산전 2021.12.18.SAT - 12.20.MON 10:00 - 18:00 아트센터고마"> -->
              </div>
            </div>
            <div class="info">
              <div class="wrap">
                <h3>컨퍼런스</h3>
                <div class="lists">
                  <p>
                  2022 디지털문화유산전은 우리나라의 문화유산의 디지털 기술 발전 현황을 조명해 볼 수 있는 자리입니다. 문화유산 분야의 ‘이미지 분석과 활용 튜토리얼‘, ‘디지털 문화유산 생태계 심포지엄’, ‘문화자원과 디지털아카이브 세미나’, ‘디지털 고고학 세미나’, ‘디지털 헤리티지 전문가 워크숍’ 등 디지털 문화유산 산업·교육·연구 분야의 생태계를 구축하고, 디지털 대전환을 촉진하는 환경을 마련하고자 합니다.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="sec1-1 ani active">
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
      </section> -->
      <section class="sec2 ani active">
        <div class="inner">
          <!-- <h2>2021 Gongju<br>Digital Heritage Festival</h2>
          <p>
            2022디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists pc">
            <ul>
              <li>
                <!-- <a href="#"> -->
                  <!-- <img src="/common/img/digital_sec2_img1.png" alt=""> -->
                  <div class="text">
                    <h4>심포지엄</h4>
                    <span>디지털 문화유산 생태계 : 산업&교육&연구</span>
                    <div class="btn">
                      <a href="/bbs/content.php?co_id=symposium"><span></span></a>
                    </div>
                  </div>
                <!-- </a> -->
              </li>
              <li>
                <!-- <a href="#"> -->
                  <!-- <img src="/common/img/digital_sec2_img2.jpg" alt=""> -->
                  <div class="text">
                    <h4>세미나</h4>
                    <span>문화자원과 디지털 아카이브</span>
                    <div class="btn">
                      <a href="/bbs/content.php?co_id=seminar"><span></span></a>
                    </div>
                  </div>
                <!-- </a> -->
              </li>
              <li>
                <!-- <a href="#"> -->
                  <!-- <img src="/common/img/digital_sec2_img3.jpg" alt=""> -->
                  <div class="text">
                    <h4>워크샵</h4>
                    <span>디지털 헤리티지 전문가 워크숍 : 원형DB 고도화 방안</span>
                    <div class="btn">
                      <a href="/bbs/content.php?co_id=workshop"><span></span></a>
                    </div>
                  </div>
                <!-- </a> -->
              </li>
              <li>
                <!-- <a href="#"> -->
                  <!-- <img src="/common/img/digital_sec2_img4.jpg" alt=""> -->
                  <div class="text">
                    <h4>튜토리얼</h4>
                    <span>문화재 분야에서의 이미지 분석과 활용</span>
                    <div class="btn">
                      <a href="/bbs/content.php?co_id=tutorial"><span></span></a>
                    </div>
                  </div>
                <!-- </a> -->
              </li>
            </ul>
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
          <p>Copyright ⓒ 2022 디지털문화유산전. All rights reserved.</p>
        </div>
      </section>
    </footer>
<!-- </body>
</html> -->