<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
?>
<script>
  var program_detail = {
    "da10": "다빈치에듀 10시",
    "da11": "다빈치에듀 11시",
    "da13": "다빈치에듀 13시",
    "da14": "다빈치에듀 14시",
    "da15": "다빈치에듀 15시",
    "da16": "다빈치에듀 16시",
    "da17": "다빈치에듀 17시",
    "edu10": "에듀크래프트(유료) 10시",
    "edu11": "에듀크래프트(유료) 11시",
    "edu13": "에듀크래프트(유료) 13시",
    "edu14": "에듀크래프트(유료) 14시",
    "edu15": "에듀크래프트(유료) 15시",
    "edu16": "에듀크래프트(유료) 16시",
    "edu17": "에듀크래프트(유료) 17시",
    "davin10": "다빈치창의융합연구소 10시",
    "davin11": "다빈치창의융합연구소 11시",
    "davin13": "다빈치창의융합연구소 13시",
    "davin14": "다빈치창의융합연구소 14시",
    "davin15": "다빈치창의융합연구소 15시",
    "davin16": "다빈치창의융합연구소 16시",
    "davin17": "다빈치창의융합연구소 17시",
    "science10": "생활과학교실 10시",
    "science11": "생활과학교실 11시",
    "science13": "생활과학교실 13시",
    "science14": "생활과학교실 14시",
    "science15": "생활과학교실 15시",
    "science16": "생활과학교실 16시",
    "science17": "생활과학교실 17시",
  }
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <h2>관람안내</h2>
            <p>사전등록 확인</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>관람안내</li>
            <li>사전등록 확인</li>
          </ul>
        </div>
      </section>
      <!-- <section class="sec1">
        <div class="inner">
          <div class="cont ani active">
            
          </div>
        </div>
      </section> -->
      <section class="sec2 ani active" style="">
        <div class="inner">
            <div class="center">
                <!-- <h2>사전등록 확인</h2>
                <p>
                2022디지털문화유산전 사전등록 확인
                </p> -->
            </div>
                <div class="lists apply">
                  <div class="form_wrap">
                    
                  <div id="contents">
        <div class="rv_check">
            <div class="inner_box">
                <h3 class="dep_name type2 mt-5">사전등록 확인</h3>
                <!-- <div class="txt_box">2022 디지털문화유산전 <br class="m_show"><span>신청자 정보를 입력</span>하시면 <br class="pc_show"> 상세정보를 확인해 볼 수 있습니다.</div> -->
                <div class="txt_box">전시 준비중입니다. 많은 관심 부탁드립니다.</div>
                <div class="info_chk">
                    <form action="check_view.php" method="POST" id="rsvForm" autocomplete="off">
                        <div class="info_form">
                            <div class="title">예약자 이름</div>
                            <div class="name_box">
                                <input type="text" class="name" name="rsv_name">
                                <div><input type="radio" id="p1" name="rsv_region" value="1" checked=""><label for="p1">내국인</label></div>
                                <div><input type="radio" id="p2" name="rsv_region" value="2"><label for="p2">외국인</label></div>
                            </div>
                            <div class="title">연락처</div>
                            <div class="tel_box">
                                <!-- <input type="text" class="tel1" name="rsv_tel1" maxlength="3">
                                <span>-</span>
                                <input type="text" class="tel2" name="rsv_tel2" maxlength="4" onkeyup="numChk(this)">
                                <span>-</span>
                                <input type="text" class="tel3" name="rsv_tel3" maxlength="4" onkeyup="numChk(this)"> -->
                                <select name="rsv_tel1">
                                    <option value="010">010</option>
                                </select>
                                <span>-</span>
                                <input type="text" class="tel1_02" name="rsv_tel2" maxlength="4">
                                <span>-</span>
                                <input type="text" class="tel1_03" name="rsv_tel3" maxlength="4">
                            </div>
                            <div class="title">신청 프로그램</div>
                            <select class="minimal" name="program" id="program">
                                <option>관람객</option>
                                <option>튜토리얼</option>
                                <option>미래교육</option>
                            </select>
                        </div>
                        <div class="btn_box">
                            <a class="chk_btn" id="chk_btn"><span>예약확인</span></a>
                            <a class="reset_btn" id="reset_btn"><span>초기화</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                  </div>
                </div>
            </div> 
          <a href="/bbs/content.php?co_id=pre_forms" class="reservation_btn">
            <b>사전등록하기</b>
            <span>06.03(금) ~ 06.05(일) 3일간</span>
          </a>
        </div>
      </section>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">예약 내역 확인</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            예약자 : <span class="check_name"></span><br />
            연락처 : <span class="check_tel"></span><br />
            소속 : <span class="check_group"></span><br />
            직책 : <span class="check_position"></span><br />
            이메일 : <span class="check_email"></span><br />
            유형 : <span class="check_types"></span><br />
            개인정보 동의 : <span class="check_agree">Y</span><br />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">취소</button>
            <button type="button" class="btn btn-primary" id="reservation_go">예약하기</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="successModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">예약 되었습니다</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            예약자 : <span class="check_name"></span><br />
            연락처 : <span class="check_tel"></span><br />
            날짜 : <span class="check_date"></span><br />
            소속 : <span class="check_group"></span><br />
            직책 : <span class="check_position"></span><br />
            이메일 : <span class="check_email"></span><br />
            유형 : <span class="check_types"></span><br />
            개인정보 동의 : <span class="check_agree">Y</span><br />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="successModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">예약 되었습니다</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            예약자 : <span class="check_name"></span><br />
            연락처 : <span class="check_tel"></span><br />
            예약내역<br>
            <div id="datails_info">

            </div>
            소속 : <span class="check_group"></span><br />
            직책 : <span class="check_position"></span><br />
            이메일 : <span class="check_email"></span><br />
            유형 : <span class="check_types"></span><br />
            개인정보 동의 : <span class="check_agree">Y</span><br />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="failModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">예약 내역이 없습니다</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            예약 내역을 찾을 수 없습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="modal fade" id="failModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            연락처 : <span class="check_tel"></span> 으로 이미 예약하셨습니다.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div> -->
    <!--MODAL-->
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
    $(document).ready(function(){
        $('#chk_btn').click(function(){
          if(!$('input[name=rsv_name]').val()) {
            alert('이름을 입력해주세요');
            $('input[name=rsv_name]').focus();
            return;
          }
          if(!$('input[name=rsv_tel2]').val() || !$('input[name=rsv_tel3]').val()) {
              alert('전화번호를 확인해주세요');
              $('input[name=rsv_tel2]').focus();
              return;
          }
            var sendData = $('#rsvForm').serialize();
            $.ajax({
                type:'post',   //post 방식으로 전송
                url:'/api/check.php',   //데이터를 주고받을 파일 주소
                data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
                dataType:'json',   //html 파일 형식으로 값을 담아온다.
                success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                    // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                    // console.log(data.data.program);
                    if (data.result === "success") {
                        if (data.array.length >= 2) {
                          var h = "";
                          $('.check_program').text(data.data.program);
                          $('.check_name').text(data.data.rsv_name);
                          $('.check_tel').text(data.data.rsv_tel);
                          $('#id').val(data.data.id);
                          $('.check_date').text(data.data.rsv_date);
                          // if (data.data.program == "미래교육") {
                          //   $('.check_time').text(program_detail[data.data.rsv_time]);
                          // }
                          console.log(data.array);
                          data.array.forEach(function(e){
                            h += "<span>";
                            h += e.rsv_date;
                            h += " | ";
                            h += program_detail[e.rsv_time];
                            h == "</span>";
                            h += "<br>";
                          });
                          console.log(h);
                          $('#datails_info').html(h);
                          $('.check_email').text(data.data.rsv_email);
                          $('.check_group').text(data.data.rsv_group);
                          $('.check_position').text(data.data.rsv_position);
                          $('.check_types').text(data.data.rsv_types);
                          $('.check_cnt').text(data.data.ride_adult_cnt);

                          $('#successModalCenter2').modal("show");
                        } else {
                          $('.check_program').text(data.data.program);
                          $('.check_name').text(data.data.rsv_name);
                          $('.check_tel').text(data.data.rsv_tel);
                          $('#id').val(data.data.id);
                          $('.check_date').text(data.data.rsv_date);
                          $('.check_email').text(data.data.rsv_email);
                          $('.check_group').text(data.data.rsv_group);
                          $('.check_position').text(data.data.rsv_position);
                          $('.check_types').text(data.data.rsv_types);
                          $('.check_cnt').text(data.data.ride_adult_cnt);
  
                          $('#successModalCenter').modal("show");
                        }
                    } else {
                        $('#failModalCenter').modal("show");
                    }
                }
            });
            // $('#successModalCenter').modal("show");
        });
        $('#reset_btn').click(function(){
            location.reload();
        });
    });
    $('#address_fix').click(function(){
      var sendData = {
        'id': $('#id').val(),
        'rsv_address': $('#check_address').val(),
        'rsv_detailAddress': $('#check_address_detail').val()
      }
      $.ajax({
            type:'post',   //post 방식으로 전송
            url:'/api/modify.php',   //데이터를 주고받을 파일 주소
            data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
            dataType:'json',   //html 파일 형식으로 값을 담아온다.
            success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                // console.log(data.data.program);
                if (data.result === "success") {
                    alert('주소가 수정되었습니다.');
                    location.reload();
                } else {
                  alert(data.msg);
                  location.reload();
                }
            }
        });
        // $('#successModalCenter').modal("show");
    });
    function fixAddress() {
      var sendData = {
        'id': $('#id').val(),
        'rsv_address': $('#check_address').val(),
        'rsv_detailAddress': $('#check_address_detail').val()
      }
      $.ajax({
            type:'post',   //post 방식으로 전송
            url:'/api/modify.php',   //데이터를 주고받을 파일 주소
            data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
            dataType:'json',   //html 파일 형식으로 값을 담아온다.
            success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                // console.log(data.data.program);
                if (data.result === "success") {
                    alert('주소가 수정되었습니다.');
                    location.reload();
                } else {
                  alert(data.msg);
                  location.reload();
                }
            }
        });
        // $('#successModalCenter').modal("show");
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>