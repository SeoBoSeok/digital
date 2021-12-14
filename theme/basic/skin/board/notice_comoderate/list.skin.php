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
echo '<link rel="stylesheet" href="'.$board_skin_url.'/board.min.css">';
// $paginationStr = '';
// if (empty($page)) $page = 1;
// $prevPage = $page == 1 ? 1 : $page - 1;
// $nextPage = $page == 17 ? 17 : $page + 1;
// if($page <= 10) {
// 	$paginationStr .= '<ul class="pagination">
// 	<li class="page-item"><a class="page-link" aria-label="first" href="?page=1&amp;bo_table=accommodations"><span aria-hidden="true">&lt;&lt;</span><span class="sr-only">첫번째페이지</span></a></li>
// 	<li class="page-item"><a class="page-link" aria-label="Previous" href="?page='.$prevPage.'&amp;bo_table=accommodations"><span aria-hidden="true">&lt;</span><span class="sr-only">이전페이지</span></a></li>
// 	<li class="page-item '.($page == 1 ? 'active' : '').'"><a class="page-link" href="?page=1&amp;bo_table=accommodations">1</a></li>
// 	<li class="page-item '.($page == 2 ? 'active' : '').'"><a class="page-link" href="?page=2&amp;bo_table=accommodations">2</a></li>
// 	<li class="page-item '.($page == 3 ? 'active' : '').'"><a class="page-link" href="?page=3&amp;bo_table=accommodations">3</a></li>
// 	<li class="page-item '.($page == 4 ? 'active' : '').'"><a class="page-link" href="?page=4&amp;bo_table=accommodations">4</a></li>
// 	<li class="page-item '.($page == 5 ? 'active' : '').'"><a class="page-link" href="?page=5&amp;bo_table=accommodations">5</a></li>
// 	<li class="page-item '.($page == 6 ? 'active' : '').'"><a class="page-link" href="?page=6&amp;bo_table=accommodations">6</a></li>
// 	<li class="page-item '.($page == 7 ? 'active' : '').'"><a class="page-link" href="?page=7&amp;bo_table=accommodations">7</a></li>
// 	<li class="page-item '.($page == 8 ? 'active' : '').'"><a class="page-link" href="?page=8&amp;bo_table=accommodations">8</a></li>
// 	<li class="page-item '.($page == 9 ? 'active' : '').'"><a class="page-link" href="?page=9&amp;bo_table=accommodations">9</a></li>
// 	<li class="page-item '.($page == 10 ? 'active' : '').'"><a class="page-link" href="?page=10&amp;bo_table=accommodations">10</a></li>
// 	<li class="page-item"><a class="page-link" aria-label="Next" href="?page='.$nextPage.'&amp;bo_table=accommodations"><span aria-hidden="true">&gt;</span><span class="sr-only">다음페이지</span></a></li>
// 	<li class="page-item"><a class="page-link" aria-label="last" href="?page=17&amp;bo_table=accommodations"><span aria-hidden="true">&gt;&gt;</span><span class="sr-only">마지막페이지</span></a></li>
// 	</ul>';
// } else {
// 	$paginationStr .= '<ul class="pagination">
// 	<li class="page-item"><a class="page-link" aria-label="first" href="?page=1&amp;bo_table=accommodations"><span aria-hidden="true">&lt;&lt;</span><span class="sr-only">첫번째페이지</span></a></li>
// 	<li class="page-item"><a class="page-link" aria-label="Previous" href="?page='.$prevPage.'&amp;bo_table=accommodations"><span aria-hidden="true">&lt;</span><span class="sr-only">이전페이지</span></a></li>
// 	<li class="page-item '.($page == 11 ? 'active' : '').'"><a class="page-link" href="?page=11&amp;bo_table=accommodations">11</a></li>
// 	<li class="page-item '.($page == 12 ? 'active' : '').'"><a class="page-link" href="?page=12&amp;bo_table=accommodations">12</a></li>
// 	<li class="page-item '.($page == 13 ? 'active' : '').'"><a class="page-link" href="?page=13&amp;bo_table=accommodations">13</a></li>
// 	<li class="page-item '.($page == 14 ? 'active' : '').'"><a class="page-link" href="?page=14&amp;bo_table=accommodations">14</a></li>
// 	<li class="page-item '.($page == 15 ? 'active' : '').'"><a class="page-link" href="?page=15&amp;bo_table=accommodations">15</a></li>
// 	<li class="page-item '.($page == 16 ? 'active' : '').'"><a class="page-link" href="?page=16&amp;bo_table=accommodations">16</a></li>
// 	<li class="page-item '.($page == 17 ? 'active' : '').'"><a class="page-link" href="?page=17&amp;bo_table=accommodations">17</a></li>
// 	<li class="page-item"><a class="page-link" aria-label="Next" href="?page='.$nextPage.'&amp;bo_table=accommodations"><span aria-hidden="true">&gt;</span><span class="sr-only">다음페이지</span></a></li>
// 	<li class="page-item"><a class="page-link" aria-label="last" href="?page=17&amp;bo_table=accommodations"><span aria-hidden="true">&gt;&gt;</span><span class="sr-only">마지막페이지</span></a></li>
// 	</ul>';
// }
// echo $paginationStr;
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
            <h2>공지사항</h2>
            <p>숙박안내</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>공지사항</li>
            <li>숙박안내</li>
          </ul>
        </div>
      </section>
      <section class="sec2 ani active" style="padding-top: 100px;">
        <div class="inner">
            <div class="center">
                <h2>숙박안내</h2>
            </div>

<!-- 게시판 목록 시작 { -->
	<div id="bo_list" style="width:<?php echo $width; ?>">

<!-- 게시판 카테고리 시작 { -->
<?php if ($is_category) { ?>
<nav id="bo_cate">
		<h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
		<ul id="bo_cate_ul">
				<?php echo $category_option ?>
		</ul>
</nav>
<?php } ?>
<!-- } 게시판 카테고리 끝 -->

<!-- 게시판 검색 시작 { -->
	<!-- <div class="bo_sch_wrap">
		<fieldset class="bo_sch">
				<h3>검색</h3>
				<form name="fsearch" method="get">
				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sop" value="and">
				<label for="sfl" class="sound_only">검색대상</label>
				<select name="sfl" id="sfl">
						<?php echo get_board_sfl_select_options($sfl); ?>
				</select>
				<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
				<div class="sch_bar">
						<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
						<button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
				</div>
				<button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
				</form>
		</fieldset>
		<div class="bo_sch_bg"></div>
	</div> -->
<script>
// jQuery(function($){
// 		// 게시판 검색
// 		$(".btn_bo_sch").on("click", function() {
// 				$(".bo_sch_wrap").toggle();
// 		})
// 		$('.bo_sch_bg, .bo_sch_cls').click(function(){
// 				$('.bo_sch_wrap').hide();
// 		});
// });
</script>
<!-- } 게시판 검색 끝 --> 

<!-- 게시판 페이지 정보 및 버튼 시작 { -->
	<div id="contens" class="contents_wrap">
			<div id="txt">
	          
<script type="text/javascript">
// 	function linkPage(page){
// // 		location.href = "?area=&page="+page+"" ;
// 		$("#page").val(page);
// 		$("#searchForm").submit();
// 	}
	
// 	function onSubmit(){
// 		$("#page").val(1);
// 	}
</script>

<!-- <form name="fsearch" method="get">
<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
<input type="hidden" name="sca" value="<?php echo $sca ?>">
<input type="hidden" name="sop" value="and">
<label for="sfl" class="sound_only">검색대상</label>
<select name="sfl" id="sfl">
		<?php echo get_board_sfl_select_options($sfl); ?>
</select>
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<div class="sch_bar">
		<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
		<button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
</div>
<button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
</form> -->

<div class="program--contents">
		
	<form name="fsearch" method="get">
	<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
	<input type="hidden" name="sop" value="and">
	<input type="hidden" name="sfl" value="wr_subject||wr_content">
	<fieldset>
		<!-- <legend>게시물 검색</legend> -->
		<div class="ui program--search">
			<div class="float-md-left">
				<div class="ui program--count">
					<span>총 게시물 <strong>254</strong> 개
					<!-- </span>, <span class="ui program--division-line">페이지 <strong>1</strong> / 10 -->
					</span>
				</div>
			</div>

			<div class="search_inner clearfix float-md-right">
				<div class="fieldset">
					<div class="search--select">
						<!-- select추가시 -->
						<!-- <span>
							<select name="sca" title="읍면동을 선택해주세요">
							<option value="">- 읍면을 선택해 주세요-</option>
							
								<option value="yugu">유구읍</option>
							
								<option value="einmyun">이인면</option>
							
								<option value="tancheon">탄천면</option>
							
								<option value="gyeryong">계룡면</option>
							
								<option value="banpo">반포면</option>
							
								<option value="euidang">의당면</option>
							
								<option value="jungan">정안면</option>
							
								<option value="woosung">우성면</option>
							
								<option value="sagok">사곡면</option>
							
								<option value="sinpoong">신풍면</option>
							
								<option value="junghak">중학동</option>
							
								<option value="ungjin">웅진동</option>
							
								<option value="geumhak">금학동</option>
							
								<option value="okryong">옥룡동</option>
							
								<option value="sinkwan">신관동</option>
							
								<option value="wolsong">월송동</option>
							
							</select>
						</span> -->
						<!-- select추가시 -->
					</div>
					<div class="search--text">
						<span><input type="text" name="stx" value="" title="검색어를 입력해주세요" placeholder="검색어를 입력해주세요" class="form-control"></span>
					</div>
					<button class="btn bd_srch_btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="23.999" height="24" viewBox="0 0 23.999 24">
								<g id="ic_search" transform="translate(-216 15)">
									<path id="패스_2066" data-name="패스 2066" d="M11.142,0a11.142,11.142,0,1,0,7.243,19.6l4.15,4.15a.858.858,0,0,0,1.212-1.213L19.6,18.386A11.132,11.132,0,0,0,11.142,0Zm0,1.714a9.428,9.428,0,1,1-9.428,9.428,9.415,9.415,0,0,1,9.428-9.428Z" transform="translate(216 -15)"></path>
								</g>
							</svg>
					</button>

				</div>
			</div>
		</div>
	</fieldset>
	</form>


	<div class="ui board--card--list type2">
		<div class="obj col3">			
				<?php
				for ($i=0; $i<count($list); $i++) {
					if ($i%2==0) $lt_class = "even";
					else $lt_class = "";
				?>
				<div class="col">
					<div class="inner-box">
						<a href="<?php echo $list[$i]["wr_link1"]; ?>" class="link" target="_blank">
							<div class="item">
								<!-- 카테고리 아이콘 -->
								<span class="tag"> <i> <svg id="svg-bed" viewBox="0 0 800 800" width="100%" height="100%" aria-hidden="true" tabindex="-1" focusable="false">
			                <path d="M639 212H366v239H93V145H25v510h68V553h614v102h68V349a136 136 0 0 0-135-137h-1z" transform="translate(0 150)" fill="#fff"></path>
			                <circle cx="231" cy="313" r="103" transform="translate(0 150)" fill="#fff"></circle> </svg>
								</i>
								</span>
								<!-- 카테고리 아이콘 -->
								<div class="thm--box">
									<div class="inner">											
												<img class="card-img-top" src="<?php echo $list[$i]["wr_3"] ?>" alt="한옥마을">	
									</div>
								</div>
								<div class="card--body">
									<strong class="tit"><?php echo $list[$i]["subject"] ?></strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em><?php echo $list[$i]["wr_content"]; ?></li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em><?php echo $list[$i]["wr_1"]; ?></li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em><?php echo $list[$i]["wr_2"]; ?></li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>

<div class="text-center">
		<!--페이징 -->
	<?php // echo $paginationStr; ?>
	<?php echo $write_pages; ?>
</div>           


<script type="text/javascript">
	function board_photo_list_AC() {
		var obj = $("#board_photo .list>ul");
		obj.find(">li:nth-child(3n+1)").addClass("l");
		obj.find(">li:nth-child(3n+2)").addClass("c");
		obj.find(">li:nth-child(3n+3)").addClass("r");
	}
	board_photo_list_AC();
</script>

			</div>	
		
		<!-- content :e -->
		<div class="content-info  clearfix">

	</div>
<!-- } 게시판 페이지 정보 및 버튼 끝 -->
<!-- 페이지 -->

<!-- 페이지 -->

<?php if ($list_href || $is_checkbox || $write_href) { ?>
<div class="bo_fx">
		<?php if ($list_href || $write_href) { ?>
		<ul class="btn_bo_user">
			<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
				<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
				<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
		</ul>	
		<?php } ?>
</div>
<?php } ?> 
</div>
<!-- <li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기">글쓰기<i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li> -->

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