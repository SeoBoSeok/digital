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
            <p>문화유산,<br>디지털 DNA를 품다.</p>
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
            <span class="subpage-item each-line display-2 subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=Invitation_baekjae_a">
                  <span class="subpage-link-text">공주 정지산 유적 고건축 AR</span>
              </a>
            </span>
            <span class="subpage-item each-line display-2 subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=Invitation_baekjae_v">
                  <span class="subpage-link-text">공산성 VR·AR 콘텐츠</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>      
      <section class="sec2 ani active">
        <div class="inner">
          <h2>공산성 왕궁 및 정지산 유적·숙종대왕 태실 3D 콘텐츠<br>조선시대 야간군사훈련 재현 콘텐츠</h2>
          <!-- <p>
            2022디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털 문화
            <br>형성 학생, 일반인, 관련 전문가, 스타트업까지 광범위한 관람층
            구축을하고 있습니다
          </p> -->
          <div class="lists clearfix">
            <div class="left">
              <img src="/common/img/cc2.jpg" alt="정지산 유적">
            </div>
            <div class="right">
              <h3>
                한국전통문화대학교 IDH연구소
              </h3>
              <!-- <dl>
                <dt>소개</dt>
                <dd>문화재청 한국전통문화대학교(총장 김영모)는 소실된 정지산 유적지의 제의시설 건물(기와건물지 1동, 벽주건물지 2동)을 야외 유적지 현장에서 실제 크기로 관람할 수 있도록 3차원 입체(3D) 가상복원과 증강현실(Augmented Reality, AR)로 개발·구현하였다.<br>
정지산 유적지는 충남 공주시에 있는 삼국 시대 백제 왕실의 제의시설로 현재 터만 남아 있으며 사적으로 지정되어 있다. 이번 증강현실 복원은 관람객이 직접 건축물의 단계별 고증안을 선택하여 다양한 고증 복원안을 야외 유적지 현장에서 체험할 수 있도록 연구개발 되었다. 소실된 고건축 문화재를 디지털로 구현한 사례는 이전에도 몇 차례 있었으나 건축물의 여러 부위별 복원안을 가상 재조립하여 야외 증강현실로 시각화한 사례는 이번 정지산 유적지 복원이 최초다.</dd>
              </dl>
              <h3>
                한국전통문화대학교 IDH연구소
              </h3> -->
              <!-- <dl>
                <dt>기관·대학명</dt>
                <dd>한국전통문화대학교</dd>
              </dl> -->
              <dl>
                <dt>소개</dt>
                <dd>문화유산 전문지식과 첨단 ICT 기술융합을 바탕으로 유무형 문화유산 디지털 기록-가상복원-콘텐츠 서비스 플랫폼 연구개발을 하고 있습니다.<br>고증 기반 디지털 복원 및 증강현실(AR)/가상현실(VR) 등 실감 3D 기술을 통해 개발된 공주시 문화유적 콘텐츠 3종과 더불어 조선시대 수원화성 야간군사훈련 등을 체험할 수 있습니다.</dd>
              </dl>
              <!-- <dl>
                <dt>소개</dt>
                <dd>백제역사유적지구의 국내외 연구기반 확대를 위해서 백제문화와 관련한 종합적인 학술자료들을 제공하고 있습니다. 또한 백제역사유적지구의 세계유산적 가치 및 우수성을 홍보하고, 유산의 대중적 향유를 위한 연구성과 체계를 구축하였습니다.</dd>
              </dl>
              <dl>
                <dt>홈페이지</dt>
                <dd><a href="http://archive.baekje-heritage.or.kr/site/kr/" target="_blank">http://archive.baekje-heritage.or.kr/site/kr/</a></dd>
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
          <div class="video_contents">
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 1200px; width: 100%; margin: 30px auto;} .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/hBT4slTIXR4' frameborder='0' allowfullscreen></iframe></div>
          </div>
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