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
            <h2>초청전</h2>
            <p>문화유산, 디지털 DNA를 품다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>초청전</li>
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
              <a class="subpage-link" href="/bbs/content.php?co_id=Invitation_baekjae">
                  <span class="subpage-link-text">백제역사유적지구</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=Invitation_baekjae_a">
                  <span class="subpage-link-text">공주·수원화성·문화상품 AR콘텐츠</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=Invitation_baekjae_v">
                  <span class="subpage-link-text">공산성 VR·AR색칠·디지털 돋보기</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div> 
      <section class="sec2 ani active">
        <div class="inner">
          <h2>야간 미디어사파드</h2>
          <!-- <p>
            2022디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/ccm.jpg" alt="정지산 유적">
            </div>
            <div class="right">
              <h3>
              국립공주대학교 공주학연구원
              <!-- '빛, 역사, 기술' 주제로 제작된 미디어파사드 -->
              </h3>
              <!-- <dl>
                <dt>기관</dt>
                <dd>미래영상</dd>
              </dl> -->
              <dl>
                <dt>소개</dt>
                <dd>2022 디지털문화유산전에서 대학(원)생을 대상으로 최신 미디어아트 제작 기술 교육 프로그램을 운영하였습니다. 학생들의 비교과 역량을 강화 시키고 디지털을 선도하는 트렌드에 걸맞은 교육 모델로 나아가고자 합니다. 2022년 5월부터 한달간 6회차로 디지털콘텐츠 전문가를 초청하여 실습기반으로 교육을 진행하였습니다. 국립공주대학교와 한국전통문화대학교 대학(원)생 11명이 함께 제작한 작품은 주간에는 실내전시관에서 야간에는 아트센터고마 야외에서 미디어파사드로 감상하실 수 있습니다.</dd>
              </dl>
              <!-- <dl>
                <dt>홈페이지</dt>
                <dd><a href="https://munbo.kongju.ac.kr/ZC0200/index.do" target="_blank">https://munbo.kongju.ac.kr/ZC0200/index.do</a></dd>
              </dl> -->
              <!-- <dl>
                <dt>담당자</dt>
                <dd>도미솔 팀장 (010-8704-2070)</dd>
              </dl> -->
              <!-- <dl>
                <dt>장소</dt>
                <dd>아트센터 고마 (충남 공주시 고마나루길 90)</dd>
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
                <dt>후원</dt>
                <dd>문화재청</dd>
              </dl> -->
            </div>
          </div>
          <!-- <div class="video_contents">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 1200px; width: 100%; margin: 30px auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/9m52o3a8788' frameborder='0' allowfullscreen></iframe></div>
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