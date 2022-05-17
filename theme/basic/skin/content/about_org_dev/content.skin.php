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
            <li>연구개발</li>
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
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org_dev">
                  <span class="subpage-link-text">연구개발</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org_edu">
                  <span class="subpage-link-text">미래교육</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=about_org_product">
                  <span class="subpage-link-text">상품 마켓</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div> 
      <section class="sec1">
        <div class="inner">
          <div class="cont ani active">
            <div class="img_box">
              <div class="wrap invitation_one">
                <img src="/common/img/m2.jpg" alt="디지털 문화 유산전 2021.12.18.SAT - 12.20.MON 10:00 - 18:00 아트센터고마">
              </div>
            </div>
            <div class="info">
              <div class="wrap">
                <h3>연구개발</h3>
                <div class="lists">
                  <p>
                  제4차 산업혁명 시대를 살아가는 지금, 문화유산 보존과 활용의 뉴패러다임은 디지털 연구개발에 있습니다. 다수의 기관과 대학들은 문화유산의 기록, 분석, 진단, 모니터링, 복원, 복제, 플랫폼, 빅데이터, AI 솔루션, 콘텐츠 기획·제작 등 다양한 연구를 진행하고 있습니다. 매년 관련 연구자들이 증가하고 있고, 다수의 기관에서 디지털 문화유산 관련 다양한 연구개발을 기획하고 진행하고 있는 만큼 미래가치를 위한 핵심기술 개발에 앞장서고자 합니다.
                  </p>
                </div>
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