<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div class="sub_visual">
    <div class="sub_txt">
        <div class="cell">
            <p id="sub_tit"><span>미디어센터</span></p>
               <p class="sub_tit_s">제19회 대한민국 교육박람회<br> <span class="small">2022년 1월 13일~15일, 서울 코엑스 
</span></p>
        </div>
    </div>
</div>
<!-- container -->
<div id="container">
				<div id="lnb_wrap">
	<div class="lnb">
	<p class="ico_home"><a href="../main/main.php.html">home</a></p>
		<div class="lnbs lnbs1">
			<h2 id="lnb_tit">공지사항</h2>
			<ul class="copy_menu" id="gnb_menu">	
		    </ul>
		</div>
		<div class="lnbs lnbs2">
			<h3 id="lnb_tit2">공지사항</h3>
			<ul class="copy_menu" id="lnb_menu">
			</ul>
		</div>
	</div>
</div>					<div id="inner_wrap">
						<div class="title_bar">
    <h2 id="title">공지사항</h2>
    
</div>
							<!-- 내용 -->
				<div class="sub_con">



								<div class="bbs_search">
									<div class="bbs_search_in">
<form method="get" action="01.php.html" name="form1">
									<fieldset>
										<legend>게시물 검색</legend>
										<select name="make" class="select">
										  <option value="title" >제목</option>
										  <option value="content" >내용</option>
										  <option value="all" >제목+내용</option>
										</select>
										<input type="text" id="searchstr" style="width:320px;" value="" title="검색어를 입력하세요." placeholder="검색어를 입력하세요." class="input" name="search">
										<input class="btn_search" type="button" value="검색" onclick="document.form1.submit();">
									</fieldset>
</form>
									</div>
								</div>

								<div class="table_line">
									<table class="board-list" cellspacing="0" cellpadding="0" summary="게시판 리스트">
										<caption>
											게시판 리스트
										</caption>
										<colgroup>
											<col class="w_cell" width="10%">

											<col width="50%">
											<col class="w_cell" width="12%">
											<col class="w_date" width="15%">
											<col class="w_cell" width="12%">

										</colgroup>
										<thead>
											<tr>
												<th class="w_cell" scope="col">번호</th>

												<th scope="col">제목</th>
												<th scope="col">작성자</th>
												<th scope="col">등록일</th>
												<th class="w_cell" scope="col">조회수</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="w_cell"><span class="ico">공지</span></td>
												<td class="subject"><a href="01.php%EF%B9%96admin_mode=read&amp;no=158&amp;make=&amp;search=&amp;notice_type=&amp;page=1.html">[제1회 공주 디지털문화유산전] 신청서 양식</a></td>
												<td>관리자</td>
												<td>2021-09-17</td>
												<td class="w_cell">621</td>
											</tr>
										</tbody>
									</table>
								</div>
                <!-- PAGING -->
              <div div class='paging'>
                <a href='01.php%EF%B9%96page=1&amp;make=&amp;search=.html' class='first'><img src='/img/main/btn_first.gif' alt='처음으로' /></a>
                <a class='prev' href='#url'><img src='/img/main/btn_prev2.gif' alt='이전으로' /></a>
                <a href='#' class='on'>1</a><a href='01.php%EF%B9%96page=2&amp;make=&amp;search=.html'>2</a>
                <a href='01.php%EF%B9%96page=3&amp;make=&amp;search=.html'>3</a>
                <a href='01.php%EF%B9%96page=4&amp;make=&amp;search=.html'>4</a>
                <a href='01.php%EF%B9%96page=5&amp;make=&amp;search=.html'>5</a>
                <a href='01.php%EF%B9%96page=6&amp;make=&amp;search=.html' class='next'><img src='/img/main/btn_next2.gif' alt='다음으로' /></a>
                <a href='01.php%EF%B9%96page=10&amp;make=&amp;search=.html' class='last'><img src='/img/main/btn_last.gif' alt='마지막으로' /></a>
              </div>  
              <!-- PAGING -->
							</div>
				<!-- //내용 -->
					</div>
			</div>
			<!-- //container -->

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
