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
    <title>2022 디지털문화유산전</title>
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="2022 디지털문화유산전" />
    <meta name="description" content="2022 디지털문화유산전" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="2022 디지털문화유산전" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="/common/img/sns-thumbnail.png" />
    <meta property="og:description" content="2022 디지털문화유산전" />
    <link rel="canonical" href="https://gongju-digitage.co.kr/">
    <link rel="shortcut icon" href="common/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="common/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="common/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="common/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="common/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="common/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="common/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="common/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="common/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="common/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="common/img/apple-icon-180x180.png">
    <!-- <link rel="icon" type="image/png" sizes="192x192"  href="common/img/android-icon-192x192.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="common/img/favicon-32x32.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="96x96" href="common/img/favicon-96x96.png"> -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="common/img/favicon-16x16.png"> -->
    <!-- <link rel="manifest" href="common/img/manifest.json"> -->
    <!-- <meta name="msapplication-TileColor" content="#ffffff"> -->
    <!-- <meta name="msapplication-TileImage" content="common/img/ms-icon-144x144.png"> -->
    <!-- <meta name="theme-color" content="#ffffff"> -->
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KDQ06J075Y"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-KDQ06J075Y');
    </script>
  </head>
  <body>
    <style>
.sound_only {display: none;}
/* 팝업레이어 */
#hd_pop {z-index:1000;position:relative;margin:0 auto;height:0}
#hd_pop h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
.hd_pops {position:absolute;border:1px solid #e9e9e9;background:#fff}
.hd_pops img {max-width:100%}
.hd_pops_con {}
.hd_pops_footer {padding:0;background:#000;color:#fff;text-align:left;position:relative}
.hd_pops_footer:after {display:block;visibility:hidden;clear:both;content:""}
.hd_pops_footer button {padding:10px;border:0;color:#fff}
.hd_pops_footer .hd_pops_reject {background:#000;text-align:left}
.hd_pops_footer .hd_pops_close {background:#393939;position:absolute;top:0;right:0}

.YouTubePopUp-Wrap{
    position:fixed;
    width:100%;
    height:100%;
    background-color:#000;
    background-color:rgba(0,0,0,0.8);
    top:0;
    left:0;
    z-index:9999999999999;
}

.YouTubePopUp-animation{
    opacity: 0;
    -webkit-animation-duration: 0.5s;
    animation-duration: 0.5s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-name: YouTubePopUp;
    animation-name: YouTubePopUp;
}

@-webkit-keyframes YouTubePopUp {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

@keyframes YouTubePopUp {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.YouTubePopUp-Content{
    max-width:680px;
    display:block;
    margin:0 auto;
    height:100%;
    position:relative;
}

.YouTubePopUp-Content iframe{
    max-width:100% !important;
    width:100% !important;
    display:block !important;
    height:480px !important;
    border:none !important;
    position:absolute;
    top: 0;
    bottom: 0;
    margin: auto 0;
}

.YouTubePopUp-Hide{
    -webkit-animation-duration: 0.5s;
    animation-duration: 0.5s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-name: YouTubePopUpHide;
    animation-name: YouTubePopUpHide;
}

@-webkit-keyframes YouTubePopUpHide {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

@keyframes YouTubePopUpHide {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

.YouTubePopUp-Close{
    position:absolute;
    top:0;
    cursor:pointer;
    bottom:528px;
    right:0px;
    margin:auto 0;
    width:24px;
    height:24px;
    /* background:url(../images/close.png) no-repeat; */
    background-size:24px 24px;
    -webkit-background-size:24px 24px;
    -moz-background-size:24px 24px;
    -o-background-size:24px 24px;
}

.YouTubePopUp-Close:hover{
    opacity:0.5;
}

@media all and (max-width: 768px) and (min-width: 10px){
    .YouTubePopUp-Content{
        max-width:90%;
    }
}

@media all and (max-width: 600px) and (min-width: 10px){
    .YouTubePopUp-Content iframe{
        height:320px !important;
    }

    .YouTubePopUp-Close{
        bottom:362px;
    }
}

@media all and (max-width: 480px) and (min-width: 10px){
    .YouTubePopUp-Content iframe{
        height:220px !important;
    }

    .YouTubePopUp-Close{
        bottom:262px;
    }
}
    </style>
    <?php
      if(defined('_INDEX_')) { // index에서만 실행
          include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    ?>
    <!-- <a class="bla-1" href="#" style="height:0; display: none;"></a>
    <div id="hd_pop">
      <h2>팝업레이어</h2>
      <div id="hd_pops_1" class="hd_pops" style="top:100px;left:50px">
      <div class="hd_pops_con" style="width:400px;height:430px">
              <p><img src="/common/img/p.jpg" title="fb4b9488897987bc4163859f8c1ae739_1639462739_327.png" alt="fb4b9488897987bc4163859f8c1ae739_1639462739_327.png"><br style="clear:both;">&nbsp;</p>        </div>
          <div class="hd_pops_footer">
              <button class="hd_pops_reject hd_pops_1 24"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
              <button class="hd_pops_close hd_pops_1">닫기 <i class="fa fa-times" aria-hidden="true"></i></button>
          </div>
      </div>
      <div id="hd_pops_2" class="hd_pops" style="top:100px;left:450px">
          <a href="/bbs/content.php?co_id=tutorial_forms" style="display: block;"><div class="hd_pops_con" style="width:400px;height:470px">
              <p><img src="https://gongju-digitage.co.kr/common/img/popup_tutorial.jpg" title="fb4b9488897987bc4163859f8c1ae739_1639463702_7797.png" alt="fb4b9488897987bc4163859f8c1ae739_1639463702_7797.png"><br style="clear:both;">&nbsp;</p>        </div></a>
          <div class="hd_pops_footer">
              <button class="hd_pops_reject hd_pops_2 24"><strong>24</strong>시간 동안 다시 열람하지 않습니다.</button>
              <button class="hd_pops_close hd_pops_2">닫기 <i class="fa fa-times" aria-hidden="true"></i></button>
          </div>
      </div>
    </div> -->
    
    <script>
      if ($(window).innerWidth() < 769) {
        $('#hd_pops_1').css('left', '5px');
        $('#hd_pops_1').css('top', '10px');
        $('#hd_pops_2').css('left', '5px');
        $('#hd_pops_2').css('top', '510px');
      }
      setTimeout(() => {
        $("body").append('<div class="YouTubePopUp-Wrap YouTubePopUp-animation"><div class="YouTubePopUp-Content"><span class="YouTubePopUp-Close"></span><iframe src="https://www.youtube.com/embed/6F8hsts5gs0" allowfullscreen></iframe></div></div>');

          if( $('.YouTubePopUp-Wrap').hasClass('YouTubePopUp-animation') ){
              setTimeout(function() {
                  $('.YouTubePopUp-Wrap').removeClass("YouTubePopUp-animation");
              }, 600);
          }

          $(".YouTubePopUp-Wrap, .YouTubePopUp-Close").click(function(){
              $(".YouTubePopUp-Wrap").addClass("YouTubePopUp-Hide").delay(515).queue(function() { $(this).remove(); });
          });

          e.preventDefault();
      }, 1000);
    </script>
    <?php
      }
    ?>    
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
            src="common/img/main_sec1_img3_2_1.png"
            alt="2022 디지털문화유산전"
          />
          <img class="img3" src="common/img/main_sec1_img3_3.png" alt="유산전" />
          <img
            class="img4"
            src="common/img/main_sec1_img4_1.png"
            alt="2022. 06. 03. FRI - 06. 05. SUN 10:00 ~ 18:00 아트센터고마"
          />
          <img
            class="img5 layer"
            data-speed="-3.2"
            src="common/img/main_sec1_img6.png"
            alt=""
          />
          <img
            class="img6 layer pc"
            data-speed="2.3"
            src="common/img/main_sec1_img7.png"
            alt=""
          />
          <img
            class="img6 layer mobile"
            data-speed="2.3"
            src="common/img/main_sec1_img7_m.png"
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
        <a href="/bbs/content.php?co_id=pre_forms" class="reservation_btn">
          <!-- <b>사전등록하기</b> -->
          <b>디지털문화유산전</b>
          <span>06.03(금) ~ 06.05(일) 3일간</span>
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
          <h2><span>2022</span> Digital Heritage Festival</h2>
          <p>
            2022 디지털문화유산전은 차별화된 디지털 헤리티지 체험, 교육,
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
                    <img src="common/img/m1.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 01</span>
                      <h3>산업</h3>
                      <p>
                      디지털 HW·SW, 드론, 솔루션, 메타버스, 빅데이터, BIM, AI, 디지털 트윈 등
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=about_org_dev">
                    <img src="common/img/m2.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 02</span>
                      <h3>연구개발</h3>
                      <p>
                      디지털 기록·모델링, 형상분석, 복원·복제, 콘텐츠 기획·제작, RTI, IoT 등
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=about_org_edu">
                    <img src="common/img/m3.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 03</span>
                      <h3>미래교육</h3>
                      <p>
                      핑퐁로봇, 박물관 온도 제어 코딩, 코스페이시스 에듀프로그램, 가상 박물관 디자인 등
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=Invitation">
                    <img src="common/img/m4.jpeg" alt="" />
                    <div class="text">
                      <span class="top">Program 04</span>
                      <h3>초청전</h3>
                      <p>
                      문화유산 VR·AR·MR 체험콘텐츠, 인터랙티브 프로젝션매핑 등
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=conference">
                    <img src="common/img/m7.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 05</span>
                      <h3>특별전</h3>
                      <p>
                        <제1회 디지털문화유산 콘텐츠 경진대회> 입상작, 수행성과 전시
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=conference">
                    <img src="common/img/m5.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 06</span>
                      <h3>컨퍼런스</h3>
                      <p>
                      디지털 문화유산 관련 심포지엄, 발표회, 튜토리얼
                      </p>
                      <span class="arrow"></span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="/bbs/content.php?co_id=about_org_product">
                    <img src="common/img/m6.jpg" alt="" />
                    <div class="text">
                      <span class="top">Program 07</span>
                      <h3>부대행사</h3>
                      <p>
                      문화유산 상품마켓‧체험, 푸드트럭, 후원기업과 함께하는 이벤트, 무형문화재 및 버스킹 공연 등
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
      <!-- <img src="common/img/main_sec3_img1.jpg" alt="" /> -->
      <div class="apply ani">
        <div class="inner">
          <h3>온라인 참가신청</h3>
          <p>
            디지털문화유산전은 관람객 사전 등록을 받고 있습니다.<br />
            참가를 희망하시면 사전등록을 통해 빠르게 입장하실 수 있습니다.
          </p>
          <div class="box">
            <b>관람정보</b>
            <dl>
              <dt>관람기간</dt>
              <dd>2022.06.03(금) ~ 06.05(일) 3일간</dd>
            </dl>
            <dl>
              <dt>관람시간</dt>
              <dd>전시회 10:00~18:00 / 마켓·푸드트럭 등 11:00~21:00</dd>
            </dl>
            <dl>
              <dt>장소</dt>
              <dd>공주 아트센터고마</dd>
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
              2022 디지털문화유산전의 뉴스 및 공지사항을 확인하실 수
              있습니다.
            </p>
          </div>
          <div class="new">
            <h4>NEWS</h4>
            <ul>
            <?php
              $sql = " SELECT wr_id, wr_subject, wr_content, wr_datetime FROM g5_write_notice ORDER BY wr_datetime DESC LIMIT 0, 3 ";
              $result = sql_query($sql);
              for ($i=0; $row=sql_fetch_array($result); $i++) {
            ?>
              <li>
                <a href="<?php echo G5_URL.'/bbs/board.php?bo_table=notice&wr_id='.$row["wr_id"]; ?>">
                  <h5><?php echo $row["wr_subject"]; ?></h5>
                  <?php
                  $content = strip_tags($row['wr_content']);
                  $content = get_text($content, 1);
                  $content = strip_tags($content);
                  $content = str_replace('&nbsp;', '', $content);
                  $content = cut_str($content, 80, "…");
                  ?>
                  <p><?php echo $content; ?></p>
                </a>
              </li>
              <?php
              }
              ?>
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
								2022 디지털문화유산전<span></span>TEL. 041-850-0448
                </li>
                <li>(32552) 충청남도 공주시 봉황로1 공주시청 문화재과</li>
              </ul>
            </div>
            <div class="lists">
              <ul>
                <li>
                  <span>주최.</span>
                  <img src="common/img/main_sec5_img1.png?v=1" alt="공주시" />
                  <img
                    class="mo"
                    src="common/img/main_sec5_img1_m.png?v=1"
                    alt="공주시"
                  />
                </li>
                <li>
                  <span>주관.</span>
                  <img
                    src="common/img/main_sec5_img2.png"
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
          <p>Copyright ⓒ 2022 디지털문화유산전. All rights reserved.</p>
        </div>
      </section>
      <script>
$(function() {
    $(".hd_pops_reject").click(function() {
        var id = $(this).attr('class').split(' ');
        var ck_name = id[1];
        var exp_time = parseInt(id[2]);
        $("#"+id[1]).css("display", "none");
        set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
    });
    $('.hd_pops_close').click(function() {
        var idb = $(this).attr('class').split(' ');
        $('#'+idb[1]).css('display','none');
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- <script src="/common/js/youtubepopup.js"></script> -->
<!-- } 팝업레이어 끝 -->      
    </footer>
  </body>
</html>

<?php
// include_once(G5_THEME_PATH.'/tail.php');