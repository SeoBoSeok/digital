<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>세계유산도시공주</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index,follow" />
    <meta name="keywords" content="세계유산도시공주" />
    <meta name="description" content="세계유산도시공주" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="세계유산도시공주" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="<?php echo G5_THEME_PATH;?>/common/img/sns-thumbnail.jpg" />
    <meta property="og:description" content="세계유산도시공주" />

    <!-- <link
      rel="shortcut icon"
      type="image/x-icon"
      href="./common/img/favicon.ico"
    />
    <link
      rel="apple-icon-precomposed"
      sizes="192x192"
      href="./common/img/favicon-192.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="./common/img/favicon-114.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./common/img/favicon-32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./common/img/favicon-16.png"
    /> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico.html" />
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_PATH;?>/common/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_PATH;?>/common/css/layout.css" />
    <link rel="stylesheet" href="<?php echo G5_THEME_PATH;?>/common/css/plugin/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_PATH;?>/common/css/main.css" />

    <script
      type="text/javascript"
      src="<?php echo G5_THEME_PATH;?>/common/js/jquery-1.11.3.min.js"
    ></script>
    <script type="text/javascript" src="<?php echo G5_THEME_PATH;?>/common/js/plugin/slick.js"></script>
    <script type="text/javascript" src="<?php echo G5_THEME_PATH;?>/common/js/common.js"></script>
    <script type="text/javascript" src="<?php echo G5_THEME_PATH;?>/common/js/main.js"></script>
  </head>
  <body class="main">
    <section class="sec1">
      <header id="header">
        <div class="inner">
          <div class="wrap">
            <nav id="nav">
              <ul>
                <li>
                  <a href="#"></a>
                  <ul>
                    <li><a href="#"></a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
      <div class="inner">
        <div class="wrap">
          <h1>
            <a href="index.html">
              <img
                class="logo"
                src="common/img/logo.png"
                alt="세계유산도시공주"
              />
            </a>
          </h1>
          <div id="menu_btn">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <a href="index.html" class="btn">
            <b>사전예약하기</b>
            <span>12. 18(토) ~ 12. 20(월) 3일간</span>
          </a>
          <img class="img1" src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img1.png" alt="디지털" />
          <img
            class="img2"
            src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img2.png"
            alt="문화 2021 공주"
          />
          <img class="img3" src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img3.png" alt="유산전" />
          <img
            class="img4"
            src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img4.png"
            alt="2021. 12. 18. SAT - 12. 20. MON 10:00 ~ 18:00 아트센터고마"
          />
          <img class="img5" src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img5.png" alt="" />
          <img
            class="img6 layer"
            data-speed="-2.2"
            src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img6.png"
            alt=""
          />
          <img
            class="img7 layer"
            data-speed="1.3"
            src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img7.png"
            alt=""
          />
          <img
            class="img8 layer"
            data-speed="-3.5"
            src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img8.png"
            alt=""
          />
          <img
            class="img9 layer"
            data-speed="2.1"
            src="<?php echo G5_THEME_PATH;?>/common/img/main_sec1_img9.png"
            alt=""
          />
        </div>
      </div>
    </section>
    <section class="sec2">
      <div class="half">
        <div class="inner left"></div>
      </div>
      <div class="half right">
        <div class="inner"></div>
      </div>
    </section>
  </body>
</html>


<?php
// include_once(G5_THEME_PATH.'/tail.php');