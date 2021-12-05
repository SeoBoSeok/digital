<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$board_skin_url.'/style.css">';
?>

<script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=l9r10c765c&callback=initMap"></script>
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
            <h2>공지사항</h2>
            <p>교통안내</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>공지사항</li>
            <li>교통안내</li>
          </ul>
        </div>
      </section>
      <section class="sec2 ani active" style="padding-top: 100px;">
        <div class="inner">
            <div class="center">
                <h2>교통안내</h2>
            </div>

				<div id="map" style="width:100%;height:650px;margin-top: 50px;">

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
		<script>
      var position = new naver.maps.LatLng(36.46655916745191, 127.10766250471471);
var mapOptions = {
  center: position, //36.46655916745191, 경도는 127.10766250471471
  zoom: 15,
  scaleControl: true,
  logoControl: true,
  mapDataControl: false,
  zoomControl: true,
};
function initMap() {
    var map = new naver.maps.Map('map', mapOptions);
    var polygon = new naver.maps.Polygon({
        map: map,
        // paths: [
        //     [
        //         new naver.maps.LatLng(36.450661798071515, 127.12065610505286),
        //         new naver.maps.LatLng(36.45653253301743, 127.12072200222792),
        //         new naver.maps.LatLng(36.45653774203083, 127.1259237240578),
        //         new naver.maps.LatLng(36.450642796208626, 127.1259848268245),
        //         new naver.maps.LatLng(36.450661798071515, 127.12065610505286),
        //     ]
        // ],
        fillColor: '#b39fd9',
        fillOpacity: 0.3,
        strokeColor: '#452d9e',
        strokeOpacity: 0.6,
        strokeWeight: 3,
        clickable: true
    });
    var markerOptions = {
      position: position,
      map: map,
      icon: {
          url: '/common/img/pin_default.png',
          size: new naver.maps.Size(150, 60),
          origin: new naver.maps.Point(0, 0),
          anchor: new naver.maps.Point(11, 35)
      }
    };

    var marker = new naver.maps.Marker(markerOptions);
}
</script>