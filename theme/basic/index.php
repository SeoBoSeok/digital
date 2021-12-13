<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/index.php');
//     return;
// }

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

// include_once(G5_THEME_PATH.'/head.php');
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>2021 공주 디지털 문화 유산전</title>
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="2021 공주 디지털 문화 유산전" />
    <meta name="description" content="2021 공주 디지털 문화 유산전" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="2021 공주 디지털 문화 유산전" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="/common/img/sns-thumbnail.jpg" />
    <meta property="og:description" content="2021 공주 디지털 문화 유산전" />
    <link rel="canonical" href="https://gongju-digitage.co.kr/">
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="common/img/favicon.ico"
    />
    <link
      rel="apple-icon-precomposed"
      sizes="192x192"
      href="common/img/favicon-192.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="common/img/favicon-114.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="common/img/favicon-32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="common/img/favicon-16.png"
    />
    <link rel="shortcut icon" type="image/x-icon" href="common/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="common/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="common/css/layout.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="common/libs/slick/slick.css"
    />
    <link rel="stylesheet" type="text/css" href="common/css/main.css" />

    <script
      type="text/javascript"
      src="common/libs/jquery/jquery-1.11.3.min.js"
    ></script>
    <script
      type="text/javascript"
      src="common/libs/jquery/easing/jquery.easing.1.3.js"
    ></script>
    <script type="text/javascript" src="common/libs/slick/slick.js"></script>
    <script type="text/javascript" src="common/js/common.js"></script>
    <script type="text/javascript" src="common/js/main.js"></script>
  </head>
  <body>
    <?php
      include_once(G5_THEME_PATH.'/header.part.php');
    ?>
    <section class="sec1">
      <div class="inner">
        <div class="line">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="wrap">
          <img class="img1" src="common/img/main_sec1_img3_1.png" alt="디지털" />
          <img
            class="img2"
            src="common/img/main_sec1_img3_2.png"
            alt="문화 2021 공주"
          />
          <img class="img3" src="common/img/main_sec1_img3_3.png" alt="유산전" />
          <img
            class="img4"
            src="common/img/main_sec1_img4.png"
            alt="2021. 12. 18. SAT - 12. 20. MON 10:00 ~ 18:00 아트센터고마"
          />
          <img
            class="img5 layer"
            data-speed="-3.2"
            src="common/img/main_sec1_img6.png"
            alt=""
          />
          <img
            class="img6 layer"
            data-speed="2.3"
            src="common/img/main_sec1_img7.png"
            alt=""
          />
          <img
            class="img7 layer"
            data-speed="-5.3"
            src="common/img/main_sec1_img8.png"
            alt=""
          />
          <img
            class="img8 layer"
            data-speed="3.1"
            src="common/img/main_sec1_img9.png"
            alt=""
          />
        </div>
        <a href="./" class="reservation_btn">
          <b>사전신청하기</b>
          <span>12. 18(토) ~ 12. 20(월) 3일간</span>
        </a>
      </div>
    </section>
    <section class="sec2">
      <div class="inner">
        <div class="line">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="wrap ani">
          <h2><span>2021</span>Gongju Digital Heritage Festival</h2>
          <p>
            2021 공주디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
            문화 소통의 장으로 최신 기술의 변화와 트렌드 이해를 통한 디지털
            문화를 형성하고, <br />학생·일반인· 관련 전문가·스타트업까지
            광범위한 관람층 구축을하고있습니다.
          </p>
          <div class="festival_slider">
            <div class="controls">
              <button class="prev_btn">PREV</button>
              <button class="next_btn">NEXT</button>
            </div>
            <div class="slider">
              <ul>
                <li>
                  <a href="/bbs/content.php?co_id=about_org">
                    <img src="common/img/digital_sec2_img1.png" alt="" />
                    <div class="text">
                      <span class="top">Program 01</span>
                      <h3>산업</h3>
                      <p>
                        3D스캐너·프린터,소프트웨어<br>
                        디지털솔루션·콘텐츠, 메타버스등
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=about_org_dev">
                    <img src="common/img/about_org_dev.png" alt="" />
                    <div class="text">
                      <span class="top">Program 02</span>
                      <h3>연구개발</h3>
                      <p>
                        디지털 기록 모델링,콘텐츠 기획·제작<br>
                        형상분석, 복원·복제
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=about_org_edu">
                    <img src="common/img/about_org_edu.png" alt="" />
                    <div class="text">
                      <span class="top">Program 03</span>
                      <h3>미래교육</h3>
                      <p>
                        가상·증강현실 교육컨텐츠, 로봇코딩<br>
                        게임 메이킹, 드론코딩
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=Invitation">
                    <img src="common/img/ccmain.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 04</span>
                      <h3>초청전</h3>
                      <p>
                        백제역사유적지구,수원화성,공주정지산유적,
                        청동거울
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=conference">
                    <img src="common/img/conference2.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 05</span>
                      <h3>컨퍼런스</h3>
                      <p>
                        심포지엄, 세미나<br>
                        워크샵, 튜토리얼
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=about_org_product">
                    <img src="common/img/about_org_market.png" alt="" />
                    <div class="text">
                      <span class="top">Program 06</span>
                      <h3>문화유산상품 마켓</h3>
                      <p>
                        3D프린터와 수공예품
                        문화유산상품 및 지역예술품 판매
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sec3">
      <img src="common/img/main_sec3_img1.jpg" alt="" />
      <div class="apply ani">
        <div class="inner">
          <h3>온라인 참가신청</h3>
          <p>
            2021공주디지털문화유산전은 관람객 사전 등록을 받고 있습니다.<br />
            참가를 희망하시면 사전등록을 통해 빠르게 입장하실 수 있습니다.
          </p>
          <div class="box">
            <b>관람정보</b>
            <dl>
              <dt>관람기간</dt>
              <dd>12.18(토) ~ 12.20(월) 3일간</dd>
            </dl>
            <dl>
              <dt>관람시간</dt>
              <dd>10:00 ~ 18:00</dd>
            </dl>
            <dl>
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
            </dl>
            <div class="btn">
              <a href="/bbs/content.php?co_id=pre_forms"><span>사전 예약</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sec4">
      <div class="inner">
        <div class="wrap ani">
          <div class="notice">
            <h3>공지사항</h3>
            <p>
              2021공주디지털문화유산전의 뉴스 및 공지사항을 확인하실 수
              있습니다.
            </p>
          </div>
          <div class="new">
            <h4>NEWS</h4>
            <ul>
              <li>
                <a href="#">
                  <h5>코로나로 인해 사전예약을 진행하고 있습니다.</h5>
                  <p>코로나로 인해 사전예약을 진행하고 있습니다.</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h5>코로나로 인해 사전예약을 진행하고 있습니다.</h5>
                  <p>코로나로 인해 사전예약을 진행하고 있습니다.</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <h5>코로나로 인해 사전예약을 진행하고 있습니다.</h5>
                  <p>코로나로 인해 사전예약을 진행하고 있습니다.</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <section class="f_sec1">
        <div class="inner">
          <div class="wrap ani">
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
                  <img src="common/img/main_sec5_img1.png" alt="공주시" />
                  <img
                    class="mo"
                    src="common/img/main_sec5_img1_m.png"
                    alt="공주시"
                  />
                </li>
                <li>
                  <span>주관.</span>
                  <img
                    src="common/img/main_sec5_img2_new.png"
                    alt="국립 공주대학교 공주학연구원"
                  />
                  <img
                    class="mo"
                    src="common/img/main_sec5_img2_m.png"
                    alt="국립 공주대학교 공주학연구원"
                  />
                </li>
                <li>
                  <span>후원.</span>
                  <img src="common/img/main_sec5_img3.png" alt="문화재청" />
                  <img
                    class="mo"
                    src="common/img/main_sec5_img3_m.png"
                    alt="문화재청"
                  />
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
  </body>
</html>

<?php
// include_once(G5_THEME_PATH.'/tail.php');