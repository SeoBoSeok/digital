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
echo '<link rel="stylesheet" href="'.$board_skin_url.'/bbs.css">';
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
            <h2>미디어센터</h2>
            <p>갤러리</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>미디어센터</li>
            <li>갤러리</li>
          </ul>
        </div>
      </section>
      <section class="sec2 ani active" style="padding-top: 100px;">
        <div class="inner">
            <div class="center">
                <h2>갤러리</h2>
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

<form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">

<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="spt" value="<?php echo $spt ?>">
<input type="hidden" name="sca" value="<?php echo $sca ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<input type="hidden" name="sw" value="">

<!-- 게시판 검색 시작 { -->
	<div class="bo_sch_wrap">
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
</div>
<script>
jQuery(function($){
		// 게시판 검색
		$(".btn_bo_sch").on("click", function() {
				$(".bo_sch_wrap").toggle();
		})
		$('.bo_sch_bg, .bo_sch_cls').click(function(){
				$('.bo_sch_wrap').hide();
		});
});
</script>
<!-- } 게시판 검색 끝 --> 

<!-- 게시판 페이지 정보 및 버튼 시작 { -->
<div id="bo_btn_top">
		<div id="bo_list_total">
				<span>Total <?php echo number_format($total_count) ?>건</span>
				<?php echo $page ?> 페이지
		</div>

		<ul class="btn_bo_user" style="display: none;">
			<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
				<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
				<li>
					<button type="button" class="btn_bo_sch btn_b01 btn" title="게시판 검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">게시판 검색</span></button>
				</li>
				<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
			<?php if ($is_admin == 'super' || $is_auth) {  ?>
			<li>
				<button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
				<?php if ($is_checkbox) { ?>	
				<ul class="more_opt is_list_btn">  
						<li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
						<li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
						<li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
				</ul>
				<?php } ?>
			</li>
			<?php }  ?>
		</ul>
</div>
<!-- } 게시판 페이지 정보 및 버튼 끝 -->
			
<div class="sub_con ">                       



						<div class="bbs_search">
							<div class="bbs_search_in ">
<form method="get" action="/media_center/03.php" name="form1">
									<fieldset>
										<legend>게시물 검색</legend>
										<select name="make" class="select">
										  <option value="title">제목</option>
										  <option value="content">내용</option>
										  <option value="all">제목+내용</option>
										</select>
										<input type="text" id="searchstr" style="width:320px;" value="" title="검색어를 입력하세요." placeholder="검색어를 입력하세요." class="input" name="search">
										<input class="btn_search" type="button" value="검색" onclick="document.form1.submit();">
									</fieldset>
</form>
							</div>
						</div>

					   <div class="photo_listW">
							<ul class="  ">
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=219&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g1.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2021 제18회 대한민국 공주 디지털 문화산업전</strong>
											<span class="date tr">2021-08-27</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=78&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g2.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=77&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g1.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=76&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g2.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=75&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g1.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=74&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g2.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=73&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g1.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
								<li>
									<a href="/media_center/03.php?admin_mode=read&amp;no=72&amp;make=&amp;search=&amp;notice_type=">
										<span class="pic"><img src="/common/img/g2.jpg"></span>
										<span class="txtW">
											<strong class="txt_t">2020 제17회 대한민국 공주 디지털 문화산업전 현장</strong>
											<span class="date tr">2020-11-05</span>
										</span>

									</a>
								</li>
							</ul>



						</div>
<div class="paging"><a href="?page=1&amp;make=&amp;search=" class="first"><img src="/common/img/btn_first.gif" alt="처음으로"></a><a class="prev" href="#url"><img src="/common/img/btn_prev2.gif" alt="이전으로"></a><a href="#" class="on">1</a><a href="?page=2&amp;make=&amp;search=">2</a><a class="next" href="#url"><img src="/common/img/btn_next2.gif" alt="다음으로"></a><a href="?page=2&amp;make=&amp;search=" class="last"><img src="/common/img/btn_last.gif" alt="마지막으로"></a></div> 

						</div>

<!-- 페이지 -->
<?php echo $write_pages; ?>
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
</form>
</div>

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
                  공주국립대학교 디지털유산전<span></span>TEL. 042-000-0000
                </li>
                <li>(32552) 충청남도 공주시 봉황로1 공주시청</li>
                <li>E-mail. mail@naver.co.kr</li>
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
          <p>Copyright ⓒ 2021공주디지털문화유산전. All rights reserved.</p>
        </div>
      </section>
    </footer>
