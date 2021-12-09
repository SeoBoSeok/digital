<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
?>
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
            <p>미래교육 사전신청</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>관람안내</li>
            <li>미래교육 사전신청</li>
          </ul>
        </div>
      </section>
      <!-- <section class="sec1">
        <div class="inner">
          <div class="cont ani active">
            
          </div>
        </div>
      </section> -->
      <div class="subpage-more-wrap">
        <span class="subpage-item-lists subpage_nav_lists">
            <span class="subpage-item each-line subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=pre_forms">
                  <span class="subpage-link-text">관람객 사전신청</span>
              </a>
            </span>
            <span class="subpage-item each-line subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=forms">
                  <span class="subpage-link-text">미래교육 사전신청</span>
              </a>
            </span>            
            <span class="subpage-item each-line subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=formscheck">
                  <span class="subpage-link-text">사전신청 확인</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>
      <section class="sec2 ani active" style="padding-top: 100px;">
        <div class="inner">
            <div class="center">
                <h2>미래교육 사전신청</h2>
                <!-- <p>
                2021 공주디지털문화유산전 미래교육 사전신청
                </p> -->
            </div>
                <div class="lists apply">
                <div class="form_wrap">
                    <form id="reserveForm" action="/api/apply.php" method="POST" enctype="multipart/form-data">
                        <table>
                        <tbody>
                        <tr>
                            <td class="ttl">프로그램</td>
                            <td class="box6 ride_count">
                                <div class="box6_01">
                                    <input type="text" id="rsv_program" class="rsv_program" name="rsv_program" value="<?php echo $_program[$_program_detail]; ?>" readonly />
                                </div>
                            </td>
                        </tr>             
                        <tr>
                            <td class="ttl">예약자 정보</td>
                            <td class="box5">
                                <div class="box5_02">
                                    <span>예약자명</span>
                                    <input type="text" name="rsv_name" placeholder="예약자명을 입력해 주세요.">
                                </div>
                                <div class="box5_03">
                                    <span>예약자 연락처</span>
                                    <div class="tel1">
                                        <!-- <input type="text" class="tel1_01" name="rsv_tel1" maxlength="3" onkeyup="numChk(this)" placeholder="연락처를 입력해 주세요."> -->
                                        <select name="rsv_tel1">
                                            <option value="010">010</option>
                                        </select>
                                        <span>-</span>
                                        <input type="text" class="tel1_02" name="rsv_tel2" maxlength="4" onkeyup="numChk(this)">
                                        <span>-</span>
                                        <input type="text" class="tel1_03" name="rsv_tel3" maxlength="4" onkeyup="numChk(this)">
                                    </div>
                                </div>
                                <div class="box5_02">
                                    <span>소속</span>
                                    <input type="text" name="rsv_name" placeholder="소속">
                                </div>
                                <div class="box5_02">
                                    <span>직책</span>
                                    <input type="text" name="rsv_name" placeholder="직책">
                                </div>
                                <div class="box5_02">
                                    <span>이메일</span>
                                    <input type="text" name="rsv_name" placeholder="이메일">
                                </div>                                
                                <div class="box7">
                                    <!-- <span>주소</span> -->
                                    <!-- <input type="text" id="sample6_postcode" placeholder="우편번호"> -->
                                    <!-- <input type="text" id="rsv_address" name="rsv_address" placeholder="주소" readonly onclick="sample6_execDaumPostcode()"><br>
                                    <input type="text" id="rsv_detailAddress" name="rsv_detailAddress" placeholder="상세주소" style="margin-top: 5px;">
                                    <input type="button" onclick="sample6_execDaumPostcode()" value="주소 찾기"><br> -->
                                    <!-- <input type="text" id="sample6_extraAddress" placeholder="참고항목"> -->
                                    <!-- <input type="text" id="rsv_address" name="rsv_address">
                                    <button type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기">주소검색</button> -->
                                <!-- </div> -->
                                <!-- s:개인정보처리방침 -->
                                    <span>유형</span>
                                    <div>
                                        <label><input type="radio" name="types">개인</label>
                                        <label><input type="radio" name="types">단체</label>
                                    </div>
                                <div>
                                <fieldset>
                                <!-- <legend>개인정보처리방침</legend> -->
                                <div class="privacy"><span class="agr-tit1">제1조 (개인정보 수집에 대한 동의)</span><strong></strong>(이하 회사)는 이용자들이 회사의 개인정보취급방침 또는 이용약관의 내용에 대하여 “동의”버튼 또는 “취소”버튼을 클릭할 수 있는 절차를 마련하여, “동의”버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다. <span class="agr-tit1">제2조 (개인정보 수집항목)</span> 온라인 문의를 통한 상담을 위해 처리하는 개인정보 항목은 아래와 같습니다.<br>
                                수집항목 : 성명, 주소, 전화번호 <span class="agr-tit1">제3조 (개인정보의 이용목적)</span> 회사는 이용자의 사전 동의 없이는 이용자의 개인 정보를 공개하지 않으며, 원활한 고객상담, 각종 서비스의 제공을 위해 아래와 같이 개인정보를 수집하고 있습니다. 모든 정보는 상기 목적에 필요한 용도 이외로는 사용되지 않으며 수집 정보의 범위나 사용 목적, 용도가 변경될 시에는 반드시 사전 동의를 구할 것입니다.<br>
                                <br>
                                - 성명 : 제품상담에 따른 본인 확인<br>
                                - 이메일, 전화번호 : 제품상담 및 이벤트 관련 고지사항 전달, 새로운 서비스 및 신상품 정보 제공(DM, SMS, 이메일 등 이용)<br>
                                <br>
                                이용자는 개인정보의 수집/이용에 대한 동의를 거부할 수 있습니다. 다만, 동의를 거부하는 경우 온라인 문의를 통한 상담은 불가하며 서비스 이용 및 혜택 제공에 제한을 받을 수 있습니다. <span class="agr-tit1">제4조 (개인정보의 보유 및 이용기간)</span> 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.<br>
                                그리고 상법, 전자상거래 등에서의 소비자보호에 관한 법률 등 관계법렵의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령에서 정한 일정한 기간 동안 정보를 보관합니다.<br>
                                이 경우 회사는 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.<br>
                                <br>
                                - 계약 또는 청약철회 등에 관한 기록 : 5년(전자상거래등에서의 소비자보호에 관한 법률)<br>
                                - 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년(전자상거래등에서의 소비자 보호에 관한 법률)<br>
                                - 시용정보의 수집/처리 및 이용 등에 관한 기록 : 3년(신용정보의 이용 및 보호에 관한 법률)<br>
                                - 회사는 귀중한 이용자의 개인정보를 안전하게 처리하며, 유출의 방지를 위하여 다음과 같은 방법을 통하여 개인정보를 파기합니다.<br>
                                - 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.<br>
                                - 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다
                                <style type="text/css">.agr-tit1{display: block;margin: 15px 0 10px 0;font-size: 13px;color: #666;font-weight:bold;border-bottom: 1px solid #ddd;padding-bottom:13px;}
                                input[type=submit] {width: 200px; padding: 10px 0;}
                                @media screen and (max-width: 750px){
                                .agr-tit1{margin: 15px 0 10px 0;font-size: 13px;padding-left: 15px;}
                                .agr-tit2{margin: 20px 0;font-size: 13px;}
                                .agr-tit3{margin: 20px 0;font-size: 13px;}
                                }
                                </style>
                                </fieldset>
                                </div>
                                <div class="box5_05">
                                    <label><input type="checkbox" name="agree" id="agree" /> 개인정보 수집 동의</label>
                                </div>
                            </td>
                        </tr>
                        <?php
                        if ($_program_detail == "saturday" || $_program_detail == "sunday") {
                        ?>
                        <tr>
                            <td class="ttl">참여인원(본인+인원)</td>
                            <td class="box6 ride_count">
                                <div class="box6_01">
                                    <select name="ride_adult_cnt" id="ride_adult_cnt">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <span class="txt">성인(초등학생 이상 기준)</span>
                                </div>
                                
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>

                    <div class="bottom_txt" style="padding-right: 20px;">
                    <?php
                    if ($_program_detail == "saturday" || $_program_detail == "sunday") {
                    ?>
                    ※ 예약 확정되신 분에 한하여 11.02.(화)부터 문자 안내드립니다. <br />
                    <?php
                    if ($_program_detail == "sunday") {
                        echo '(여행자보험 가입 문의 등 상세 내용 안내 연락이 취해짐)';
                        echo '<br />';
                    }
                    ?>
                    <?php
                    }
                    ?>
                    ※ 전화번호당 한번만 참여 가능합니다.<br />
                    ※ 연락처 및 주소 오기로 인한 미수령시에는 책임지지 않습니다.<br />
                    </div>
                        <div class="btn_box">
                        <!-- <button class="rv_btn hidden" type="submit">예약하기</button> -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" id="reservation_check">
                        예약 하러가기
                        </button>
                    </div>

                    </form>

                    </div>
                </div>
            </div> 
          <!-- <a href="./" class="reservation_btn">
            <b>사전신청하기</b>
            <span>12. 18(토) ~ 12. 20(월) 3일간</span>
          </a> -->
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
            <h5 class="modal-title" id="exampleModalLongTitle">이미 예약 하셨습니다</h5>
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
    </div>
    <!--MODAL-->
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
    document.getElementById("reservation_check").addEventListener("click", function(){
        if(!$('input[name=rsv_name]').val()) {
            alert('이름을 입력해주세요');
            $('input[name=rsv_name]').focus();
            return;
        }
        if(!$('input[name=rsv_tel2]').val()) {
            alert('전화번호를 확인해주세요');
            $('input[name=rsv_tel2]').focus();
            return;
        }

        // console.log($('input:checkbox[name=agree]:checked').val());
        // if ($('input[name=agree]').val())
        if ($('input:checkbox[name=agree]:checked').val()) {
            $('.check_name').text($('input[name=rsv_name]').val());
            $('.check_tel').text($('select[name=rsv_tel1]').val() + "-" + $('input[name=rsv_tel2]').val() + "-" + $('input[name=rsv_tel3]').val());
            $('.check_group').text($('input[name=rsv_group]').val());
            $('.check_position').text($('input[name=rsv_position]').val());
            $('.check_email').text($('input[name=rsv_email]').val());
            $('.check_types').text($('input[name=rsv_types]:checked').val());
            $('#exampleModalCenter').modal('show');
        } else {
            alert("개인정보 수집 동의에 체크하셔야 합니다");
        }
    });
    $(document).ready(function(){
        $('#reservation_go').click(function(){   //submit 버튼을 클릭하였을 때
            $('#exampleModalCenter').modal('hide');
            // let sendData = "username="+$('input[name=username]').val();   //폼의 이름 값을 변수 안에 담아줌
            var sendData = $('#reserveForm').serialize();
            // console.log(sendData);
            $.ajax({
                type:'post',   //post 방식으로 전송
                url:'/api/apply.php',   //데이터를 주고받을 파일 주소
                data: sendData,   //위의 변수에 담긴 데이터를 전송해준다.
                dataType:'json',   //html 파일 형식으로 값을 담아온다.
                success : function(data){   //파일 주고받기가 성공했을 경우. data 변수 안에 값을 담아온다.
                    // $('#message').html(data);  //현재 화면 위 id="message" 영역 안에 data안에 담긴 html 코드를 넣어준다. 
                    console.log(data);
                    if (data.result === "success") {
                        $('#successModalCenter').modal("show");
                        $('input[name=rsv_name]').val("");
                        $('input[name=rsv_tel1]').val("");
                        $('input[name=rsv_tel2]').val("");
                        $('input[name=rsv_tel3]').val("");
                        $('input[name=agree]').attr("checked", false);
                    } else {
                        if (data.result === "fail") {
                            $('#failModalCenter').modal("show");
                        } else {
                            alert(data.msg);
                        }
                    }
                }
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    