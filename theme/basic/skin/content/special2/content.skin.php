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
            <h2>특별전</h2>
            <p>문화유산,<br>디지털 DNA를 품다</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>특별전</li>
            <li>“과거, 현재, 미래 공존의 가치를 디지털로 담다.”</li>
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
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=special1">
                  <span class="subpage-link-text">디지털 콘텐츠 문화유산</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=special2">
                  <span class="subpage-link-text">공존의 가치를 디지털로 담다</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=special3">
                  <span class="subpage-link-text">한양도성 역사공간 속으로!</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=special4">
                  <span class="subpage-link-text">주미대한제국공사관</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>      
      <section class="sec2 ani active">
        <div class="inner">
          <h2>디지털 콘텐츠로 만나는 문화유산</h2>
          <!-- <p>
            2022디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/special3.png" alt="정지산 유적">
            </div>
            <div class="right">
              <h3>
                <2021-2022 문화유산 원형기록 통합DB> 구축 성과
              </h3>
              <dl>
                <dt>소개</dt>
                <dd>
                문화유산 원형을 3차원 디지털 기술로 정밀하게 기록하고, 개별 분산된 기록정보자원들을 관리 및 활용에 용이하도록 체계적으로 통합했습니다. 더불어 구축된 데이터를 실감콘텐츠로 제작한 후 비대면 교육과 관광, 게임, 영화, 공연, 디자인 등 문화산업 원천 콘텐츠 자원으로 활용될 수 있게 개방했습니다.
                </dd>
              </dl>
              <dl>
                <dt>기획</dt>
                <dd>NDS컨소시엄</dd>
              </dl>
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
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 1200px; width: 100%; margin: 30px auto;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/chrhW2ebCkg' frameborder='0' allowfullscreen></iframe></div>
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
								2022 디지털문화유산전<span></span>TEL. 041-850-0448
                </li>
                <li>(32552) 충청남도 공주시 봉황로1 공주시청 문화재과</li>
              </ul>
            </div>
            <div class="lists">
              <ul>
                <li>
                  <span>주최.</span>
                  <img src="/common/img/main_sec5_img1.png?v=1" alt="공주시">
                  <img class="mo" src="/common/img/main_sec5_img1_m.png?v=1" alt="공주시">
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