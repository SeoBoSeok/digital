<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css?2">';
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
            <p>튜토리얼 사전신청</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>관람안내</li>
            <li>튜토리얼 사전신청</li>
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
            <span class="subpage-item each-line subpage_nav_item">
              <a class="subpage-link" href="/bbs/content.php?co_id=pre_forms">
                  <span class="subpage-link-text"><del>관람객 사전신청(마감)</del></span>
              </a>
            </span>
            <span class="subpage-item each-line subpage_nav_item">
              <a class="subpage-link" href="/bbs/content.php?co_id=tutorial_forms">
                  <span class="subpage-link-text"><del>튜토리얼 사전신청(마감)</del></span>
              </a>
            </span>
            <span class="subpage-item each-line subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=forms">
                  <span class="subpage-link-text"><del>미래교육 사전신청(마감)</del></span>
              </a>
            </span>            
            <span class="subpage-item each-line subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=formscheck">
                  <span class="subpage-link-text">사전신청 확인</span>
              </a>
            </span>
        </span>
      </div>
      <section class="sec2 ani active" style="padding-top: 100px;">
        <div class="inner">
        <div class="magam center">
            <div class="magam_image">
              <img src="/common/img/magam1.png" alt="사전신청 마감" >
            </div>
            <div class="magam_txt1">투토리얼 사전접수 마감 (행사방문시 현장등록가능합나다)</div>
            <div class="magam_txt2 magam_image2">
              <img src="/common/img/magam2.png" alt="사전신청 마감" >
            </div>
            <div class="magam_txt3">12월 18일 (토)부터 적용되는 강력한 거리두기 방안이 시행됨에 따라 전시장 박람회 관람시에도 방역패스가 적용됩니다.<br>
이에 입장시 확인 절차가 진행되오니 양해부탁드립니다.</div>
          </div>
            <!-- <div class="center">
                <h2>튜토리얼 사전신청</h2>
            </div>
<div class="wrap-tbl-calendar mb-50 table-container" style="padding-top: 40px;">
					<table class="tbl">
						<caption>
						</caption>
						<colgroup>
              <col style="width: 15%;">
              <col style="width: 10%;">
              <col style="width: 35%;">
              <col style="width: 5%;">
              <col style="width: 13%;">
              <col style="width: 5%;">
              <col style="width: 5%;">
              <col style="width: 15%;">
						</colgroup>
						<thead>
								<tr>
										<th scope="col" class="point_bg">주최</th>
                    <th scope="col" class="point_bg">주관</th>
										<th scope="col" class="point_bg">교육</th>
										<th scope="col" class="point_bg">교육비</th>
                    <th scope="col" class="point_bg">교육기간</th>
                    <th scope="col" class="point_bg">소요시간</th>
                    <th scope="col" class="point_bg">교육인원</th>
                    <th scope="col" class="point_bg">대상</th>
								</tr>
						</thead>
						<tbody>
								<tr>
                  <td>(사)한국문화재보존과학회</td>
                  <td>웨이퍼마스터즈</td>
                  <td>문화유산 디지털 이미지의 이해와 영상분석 적용 방법 교육<br>영상분석 맞춤형 소프트웨어 소개 및 사용법 교육</td>
                  <td>무료</td>
                  <td>2021. 12. 18. (토)<br>15:00~17:50</td>
                  <td>3시간</td>
                  <td>15명</td>
                  <td>디지털 문화 유산분야<br>대학생 및 종사자</td>
								</tr>
						</tbody>
					</table>
          <div class="bottom_txt" style="padding-right: 20px;">
          * 노트북 필참<br>
          * 이미지분석 소프트웨어 1개월 사용권 증정<br>
          * 교육생 15명 제한
          </div>
				</div>                 

                <div class="lists apply">
                <div class="form_wrap">
                    <form id="reserveForm" action="/api/apply.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="rsv_time" value="tutorial" >
                      <input type="hidden" name="token" value="tutorial" >
                        <table>
                        <tbody>
                        <tr>
                            <td class="ttl">프로그램</td>
                            <td class="box6 ride_count">
                                <div class="box6_01">
                                    <input type="text" id="rsv_program" class="rsv_program" name="rsv_program" value="튜토리얼" readonly />
                                </div>
                            </td>
                        </tr> 
                        <tr>
                            <td class="ttl">참관일시</td>
                            <td class="box6 ride_count">
                                <div class="box6_01">
                                    <select class="minimal" name="rsv_date" id="rsv_date">
                                      <option value="2021-12-18">2021-12-18</option>
                                    </select>
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
                                        <select name="rsv_tel1">
                                            <option value="010">010</option>
                                        </select>
                                        <span>-</span>
                                        <input type="text" class="tel1_02" name="rsv_tel2" maxlength="4">
                                        <span>-</span>
                                        <input type="text" class="tel1_03" name="rsv_tel3" maxlength="4">
                                    </div>
                                </div>
                                <div class="box5_02">
                                    <span>소속</span>
                                    <input type="text" name="rsv_group" placeholder="소속">
                                </div>
                                <div class="box5_02">
                                    <span>직책</span>
                                    <input type="text" name="rsv_position" placeholder="직책">
                                </div>
                                <div class="box5_02">
                                    <span>이메일</span>
                                    <input type="text" name="rsv_email" placeholder="이메일">
                                </div>                                
                                <div class="box7">
                                    <span>참가인원</span>
                                    <div>
                                        <label><input type="radio" name="rsv_types" value="개인" checked="checked">개인</label>
                                        <label><input type="radio" name="rsv_types" value="단체">단체</label>
                                        <span style="display: block; color: #007bff;">단체의 경우, 공지사항-단체참관 양식을 작성하여 이메일(kjhak@kongju.ac.kr)로 제출 부탁드립니다.</span>
                                    </div>
                                <div>
                                <fieldset>
                                <div class="privacy">
                                공주 디지털 문화 유산전은 본 전시회 진행 및 전시회 참관 편의를 위하여 아래와 같이 개인정보를 위탁 수집하고 있습니다. <br>
<br>
1. 개인정보 수집·이용 목적<br>
 1) 본 전시회가 수집한 관람객들의 개인정보는 차기 전시회 초청장 발송 및 안내를 위한 용도로만 활용합니다.<br>
 2) 신종코로나바이러스감염증-19(COVID-19)와 관련하여, 유사상황 발생시 질병관리본부의 역학조사 협조용으로 활용됩니다.<br>
 <br>
2. 수집하는 개인정보 항목<br>
 1) 필수항목 : 소속, 성명, 연락처(일반전화 또는 휴대전화), 이메일, 지역, 설문조사, 출입시간<br>
 2) 선택항목 : 직위, 부서, 주소<br>
 <br>
3. 수집한 개인정보의 이용 및 제3자 제공<br>
 1) 수집된 개인정보는 ‘개인정보수집·이용목적’에서 고지한 범위 내에서 사용하며, 동 범위를 초과하여 이용하거나 타인 또는 타기업·기관에 제공하지 않습니다. <br>
 2) 수집된 개인정보는 코로나 19확진자 발생시 역학조사를 위해 보건복지부, 질병관리본부, 지자체에 제공됩니다.<br>
 3) 단, 객관적인 전시회 검증을 위해 한국전시산업진흥회(AKEI)에 제공될 수 있으며, 제공된 개인정보는 전시회 검증 외 다른 목적으로 절대 사용되지 않습니다.<br>
 <br>
4. 개인정보 자동수집 장치의 설치/운영 및 거부에 관한 사항<br>
 1) 본 전시회는 편리하고 유용한 서비스를 제공하기 위해서 관람객의 정보를 참가업체에 제공하는 바코드시스템을 사용합니다.<br>
   - 바코드시스템이란 출입증에 출력된 바코드를 통해 저장된 정보를 사용자에게 전달하는 시스템입니다.<br>
 2) 전시회 참가업체는 바코드시스템을 통해 관람객의 개인정보를 수집할 수 있습니다.<br>
 3) 관람객은 바코드시스템 사용에 대한 선택권을 가지고 있습니다. <br>
    관람객이 참가업체에 제공된 바코드기에 출입증을 찍으면 개인정보 수집에 대해 동의한 것으로 간주됩니다.<br>
<br>
5. 개인정보의 보유 및 이용기간<br>
개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 파기합니다.<br>
<br>
6. 권리<br>
원칙적으로 개인정보보호법에 의해 개인정보 수집동의를 거부할 권리가 있으며 수집동의 거부시에는 본 전시회 입장에 제한이 발생할 수 있습니다.  
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
                        </tbody>
                    </table>

                    <div class="bottom_txt" style="padding-right: 20px;">
* 관람객 여러분 모두의 건강과 안전을 위하여 마스크 착용을 의무화 하고 있습니다. 마스크를 착용하지 않은 분들은 전시 관람이 불가 하오니, 꼭 마스크를 쓰고 방문해 주세요.<br>
* 관람객 간 최대 2M 거리를 유지하며 관람해 주세요.<br>
* 최근 14일 이내 해외 혹은 확진자 발생 지역을 다녀오신 경험이 있으시거나 37.5도 이상의 발열, 기침, 가래, 인후통과 같은 호흡기 증상이 있으신 분은 방문을 자제해 주세요.<br>
* 코로나바이러스감염증-19 확산 예방을 위하여 모든 직원은 마스크와 장갑을 착용하고 근무하며, 정기적으로 방역을 진행합니다.<br>
* 플래시, 삼각대 및 셀카봉을 이용한 촬영, 상업적 용도의 촬영, 동영상 촬영은 불가합니다.<br>
* 예약정보 오기로 인한 사전신청 오류시에는 책임지지 않습니다.
                    </div>
                        <div class="btn_box">
                        <button type="button" class="btn btn-primary" id="reservation_check">
                        예약 하러가기
                        </button>
                    </div>

                    </form>

                    </div>
                </div>
            </div>  -->
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
            날짜 : <span class="check_date"></span><br />
            소속 : <span class="check_group"></span><br />
            직책 : <span class="check_position"></span><br />
            이메일 : <span class="check_email"></span><br />
            참가인원 : <span class="check_types"></span><br />
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
            참가인원 : <span class="check_types"></span><br />
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
        if(!$('input[name=rsv_group]').val()) {
            alert('소속을 입력해주세요');
            $('input[name=rsv_group]').focus();
            return;
        }
        if(!$('input[name=rsv_position]').val()) {
            alert('직책을 확인해주세요');
            $('input[name=rsv_position]').focus();
            return;
        }
        if(!$('input[name=rsv_email]').val()) {
            alert('이메일을 입력해주세요');
            $('input[name=rsv_email]').focus();
            return;
        }
        // console.log($('input:checkbox[name=agree]:checked').val());
        // if ($('input[name=agree]').val())
        if ($('input:checkbox[name=agree]:checked').val()) {
            $('.check_name').text($('input[name=rsv_name]').val());
            $('.check_tel').text($('select[name=rsv_tel1]').val() + "-" + $('input[name=rsv_tel2]').val() + "-" + $('input[name=rsv_tel3]').val());
            $('.check_group').text($('input[name=rsv_group]').val());
            $('.check_date').text($('#rsv_date').val());
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