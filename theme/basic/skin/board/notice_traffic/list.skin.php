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
        <div class="inner wrap">
            <div class="center">
                <h2>교통안내</h2>
            </div>

				<div id="map" style="width:100%;height:650px;margin-top: 50px;">

        </div>
        <div class="map-tx">
            <div class="tx-cts tx1">
                <ul class="w-50">
                    <li class="li-tit fw-700">장소</li>
                    <li>공주 아트센터고마</li>
                    <li class="li-tit fw-700">주소</li>
                    <li>충남 공주시 고마나루길 90</li>
                </ul>
                <ul class="w-50">
                    <!-- <li class="li-tit fw-700">문의사항</li>
                    <li>공주시청 문화재과 041-840-8204</li>
                    <li>국립공주대학교 공주학연구원 041-850-0448</li> -->
                </ul>
                <!-- <ul class="w-50">
                    <li class="li-tit fw-700">지정주차장</li>
                    <li>충청북도 옥천군 옥천읍 하계리 56-1<span class="m_nob"> /</span><br class="addBr"> 충청북도 옥천군 옥천읍 하계리 14-1<br class="web"><br class="addBr">충청북도 옥천군 옥천읍 하계리 2-5<br class="addBr"><span class="m_nob"> /</span> 충청북도 옥천군 옥천읍 교동리 308-6</li>
                </ul>  -->
            </div>
            <div class="tx-cts tx2" style="margin-top: 0;">
                <div class="row">
                    <div class="col">
                        <div class="tx-cts bluewrap dblock">대중교통</div>
                    </div>
                </div>
                <ul class="w-50">
                    <li class="li-tit fw-700">버스 이용시</li>
                    <li class="fw-700">공주종합버스터미널에서 오시는 법(약 50분 소요)</li>
                    <li>
                        - 125번 종합버스터미널(옥룡동방면)<br class="web">
                        → 문예회관, 경찰서 하차 후 도보 19분<br>
                    </li>
                    <!-- <li class="li-tit fw-700">버스 이용시</li> -->
                    <br>
                    <!-- <li class="fw-700">공주종합버스터미널에서 오시는 법(약 50분 소요)</li> -->
                    <li>
                        - 550번 종합버스터미널(옥룡동방면)<br class="web">
                        → 중동 사거리 하차 후 도보 10분<br class="web">
                        → 공주세무서, 북중학교 승차<br class="web">
                        → 국립공주박물관 하차 후 맞은편
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">택시 이용시</li>
                    <li>
                        - 공주종합버스터미널 (약 10분소요)
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">무료셔틀버스 안내</li>
                    <li>
                       <img src="/common/img/shuttle.png" alt="무료셔틀버스안내" height="400px">
                    </li>
                </ul>
                <!-- <ul class="w-50">
                    <li class="li-tit fw-700">세종시에서 오시는 방법</li>
                    <li>
                        - 세종고속시외버스터미널<br class="web">
                        → 공주종합버스터미널<br class="web">
                        → 중학동<br>
                        <a href="https://transportation.asamaru.net/%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4/%EC%8B%9C%EA%B0%84%ED%91%9C/%EC%84%B8%EC%A2%85%EA%B3%A0%EC%86%8D%EC%8B%9C%EC%99%B8%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EC%B6%9C%EB%B0%9C/%EA%B3%B5%EC%A3%BC%EC%A2%85%ED%95%A9%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EB%8F%84%EC%B0%A9/" target="_blank">※ 버스 시간표</a>
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">서울에서 오시는 방법</li>
                    <li>- 서울고속버스터미널<br class="web">→ 공주종합버스터미널<br class="web">→ 중학동<br>
                    <a href="https://transportation.asamaru.net/%EA%B3%A0%EC%86%8D%EB%B2%84%EC%8A%A4/%EC%8B%9C%EA%B0%84%ED%91%9C/%EC%84%9C%EC%9A%B8%EA%B3%A0%EC%86%8D%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EC%B6%9C%EB%B0%9C/%EA%B3%B5%EC%A3%BC%EC%A2%85%ED%95%A9%EB%B2%84%EC%8A%A4%ED%84%B0%EB%AF%B8%EB%84%90/%EB%8F%84%EC%B0%A9/" target="_blank">※ 버스 시간표</a>
                    </li>
                </ul>
                <ul class="w-50">
                    <li class="li-tit fw-700">공주 종합버스터미널에서 오시는 방법</li>
                    <li>- 100번(공주 종합버스터미널) → 중학동 <span class="time">30분</span></li>
                    <li>- 101번(공주 종합버스터미널) → 중동사거리</li>
                    <li>- 125번(공주 종합버스터미널) → 중학동</li>
                    <li>- 200번(공주 종합버스터미널) → 중학동</li>
                    <li>- 500번(공주 종합버스터미널) → 중동사거리
                    <br><a href="https://m.map.naver.com/directions/#/publicTransit/list/%25EA%25B3%25B5%25EC%25A3%25BC%25EC%25A2%2585%25ED%2595%25A9%25EB%25B2%2584%25EC%258A%25A4%25ED%2584%25B0%25EB%25AF%25B8%25EB%2584%2590,127.1347324,36.4685158,127.1348332,36.4682426,false,13323229/%25EA%25B3%25B5%25EC%25A3%25BC%25EB%25B0%2598%25EC%25A3%25BD%25EB%258F%2599%25EB%258B%25B9%25EA%25B0%2584%25EC%25A7%2580%25EC%25A3%25BC,127.1224369,36.4516611,,,false,20111714/0" target="_blank">※ 버스 노선(시간)</a>
                    </li>
                </ul> -->
                              
            </div>
            <p class="psTx fs-14">※주차공간이 협소하오니 대중교통을 이용해 주세요</p>
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