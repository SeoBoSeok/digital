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
	<div id="contens" class="contents_wrap">
			<!-- title_layout :s -->
			<div id="location" class="title_wrap">
	<!-- <h2 class="page__title">숙박정보</h2> -->
	<!-- 유틸 시작 -->
	<div class="utile_wrap">
		<div class="utile_wrap_inner">
			
	    	<!-- 프린트 시작 -->
	        <ul class="print_wrap setting-box__group">
	        	
	        	<li id="sns_layout" class="n1 sns clickOpen">
	            	<button><span class="tmpl_ir">SNS공유 열림버튼</span></button>
	                <div class="sns_wrap">

	                	<button class="fa tmpl_ir" data-button="sns_share" data-service="facebook" data-title="페이스북 SNS공유" title="페이스북 공유하기, 새창열림">페이스북</button>
	                	<button class="tw tmpl_ir" data-button="sns_share" data-service="twitter" data-title="트위터 SNS공유" title="트위터 공유하기, 새창열림">트위터</button>
	                	<button class="bl tmpl_ir" data-button="sns_share" data-service="naver" data-title="네이버 SNS공유" title="블로그 공유하기, 새창열림">블로그</button>
	                	<button class="ca tmpl_ir" data-button="sns_share" data-service="kakaostory" data-title="카카오스토리 SNS공유" title="카카오스토리 공유하기, 새창열림">카카오스토리</button>
	                	<button class="clickClose"><span class="tmpl_ir">SNS공유 닫힘버튼</span></button>
	                	
	                </div>
	            </li>
	            <li class="n2"><button onclick="CopyUrl(); return false;" title="복사하기" class="copy"><span class="tmpl_ir">복사하기</span></button></li>
	            <li class="n3" id="print"><button data-print="print"><span class="tmpl_ir">프린트</span></button></li>
	        </ul>
	    	<!-- 프린트 끝 -->
    	</div>
    </div>
    <!-- 유틸 끝 -->
	
			</div>
			<!-- title_layout :e -->
			<!-- content :s -->
			<div id="txt">
	          
<script type="text/javascript">
	function linkPage(pageIndex){
// 		location.href = "?area=&pageIndex="+pageIndex+"" ;
		$("#pageIndex").val(pageIndex);
		$("#searchForm").submit();
	}
	
	function onSubmit(){
		$("#pageIndex").val(1);
	}
</script>


<div class="program--contents">
		
			<form id="searchForm" name="searchForm" method="post" action="/prog/hotelData/tour/sub05_02/list.do">
	
	<fieldset>
		<legend>게시물 검색</legend>
		<input type="hidden" name="pageUnit" value="10"> <input type="hidden" name="pageIndex" id="pageIndex" value="1"> <input type="hidden" name="pageSize" value="10">
		<div class="ui program--search">
			<div class="float-md-left">
				<div class="ui program--count">
					<span>총 게시물 <strong>254</strong> 개
					</span>, <span class="ui program--division-line">페이지 <strong>1</strong> / 10
					</span>
				</div>
			</div>

			<div class="search_inner clearfix float-md-right">
				<div class="fieldset">
					<div class="search--select">
						<!-- select추가시 -->
						<span>
							<select name="searchCondition2" title="읍면동을 선택해주세요">
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
						</span>
						<span>
							<select name="searchCondition" title="검색어를 선택해주세요">
								<option value="SUBJECT">업소명</option>
							</select>
						</span>
						<!-- select추가시 -->
					</div>
					<div class="search--text">
						<span><input type="text" name="searchKeyword" value="" title="검색어를 입력해주세요" placeholder="검색어를 입력해주세요" class="form-control"></span>
					</div>
					<div class="search--btn">
						<span class="btn--submit"><input type="submit" value="검색" onclick="onSubmit();"></span>
					</div>

				</div>
			</div>
		</div>
	</fieldset>
	</form>


	<div class="ui board--card--list type2">
		<div class="obj col3">			
				<div class="col">
					<div class="inner-box">
						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=22" class="link">
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
												<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">	
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">한옥마을</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 관광단지길 12 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>041-840-8900</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 단체동(6동 37실), 개별동(16동 19실)</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=361" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">하숙마을</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 당간지주길 21 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>041-852-4747</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 10</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=341" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">공주산림휴양마을</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 수원지공원길 222 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>041-855-0855</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 숙박시설 20개, 야영장 20개</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=524" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">나르빅 민박(펜션)</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 왕촌길 81 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>010-4132-5210</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 5</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=525" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">무릉(관광)민박(펜션)</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 느랏티길 47-7 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>041-852-1946</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 1</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=526" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">고마게스트하우스</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 백미고을길 5-2 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>010-5894-3897</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 6</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=527" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">공주공산성게스트하우스</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 백미고을길 5-4 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>010-8800-3703</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 5</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=528" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">달빛정원</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 백미고을길 14 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>010-8790-8285</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 8</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=529" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">로컬하우스</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 향교1길 16-8 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>010-4254-5660</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 4</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=530" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">미나리깡</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 정자방1길 22-13 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>010-8893-8381</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 3</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=531" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">봉황재(모던한옥)</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 큰샘3길 8 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>041-960-5525</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 4</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
				<div class="col">
					<div class="inner-box">

						
							
							
								
							
						

						<a href="/prog/hotelData/tour/sub05_02/view.do?pageIndex=1&amp;cntNo=615" class="link">
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
										
											
											
									<img class="card-img-top" src="/common/img/getImage.jpg" alt="한옥마을">
											
										
									</div>
								</div>
								<div class="card--body">
									<strong class="tit">한적한가</strong>
									<ul>
										<li class="icon_01"><em><i class="fa fa-map-marker"></i> 주소</em>충청남도 공주시 한적2길 47-25 </li>
										<li class="icon_02"><em><i class="fa fa-phone"></i> 연락처</em>0507-1475-2701</li>
										<li class="icon_06"><em><i class="fa md-hotel"></i> 객실수</em> 2</li>
									</ul>
								</div>
							</div>
						</a>
					</div>
				</div>
			
		</div>
	</div>
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


	<div class="text-center">
		<!--페이징 -->
		<ul class="pagination">
			<li class="page-item"><a class="page-link" aria-label="first" href="?pageIndex=1" onclick="linkPage(1);return false; "><span aria-hidden="true">&lt;&lt;</span><span class="sr-only">첫번째페이지</span></a></li><li class="page-item"><a class="page-link" aria-label="Previous" href="?pageIndex=1" onclick="linkPage(1);return false; "><span aria-hidden="true">&lt;</span><span class="sr-only">이전페이지</span></a></li><li class="page-item active"><a class="page-link" onclick="return false;">1</a></li><li class="page-item"><a class="page-link" href="?pageIndex=2" onclick="linkPage(2);return false; ">2</a></li><li class="page-item"><a class="page-link" href="?pageIndex=3" onclick="linkPage(3);return false; ">3</a></li><li class="page-item"><a class="page-link" href="?pageIndex=4" onclick="linkPage(4);return false; ">4</a></li><li class="page-item"><a class="page-link" href="?pageIndex=5" onclick="linkPage(5);return false; ">5</a></li><li class="page-item"><a class="page-link" href="?pageIndex=6" onclick="linkPage(6);return false; ">6</a></li><li class="page-item"><a class="page-link" href="?pageIndex=7" onclick="linkPage(7);return false; ">7</a></li><li class="page-item"><a class="page-link" href="?pageIndex=8" onclick="linkPage(8);return false; ">8</a></li><li class="page-item"><a class="page-link" href="?pageIndex=9" onclick="linkPage(9);return false; ">9</a></li><li class="page-item"><a class="page-link" href="?pageIndex=10" onclick="linkPage(10);return false; ">10</a></li><li class="page-item"><a class="page-link" aria-label="Next" href="?pageIndex=11" onclick="linkPage(11);return false; "><span aria-hidden="true">&gt;</span><span class="sr-only">다음페이지</span></a></li><li class="page-item"><a class="page-link" aria-label="last" href="?pageIndex=22" onclick="linkPage(22);return false; "><span aria-hidden="true">&gt;&gt;</span><span class="sr-only">마지막페이지</span></a></li>

		</ul>
	</div>           

			</div>	
		
		<!-- content :e -->
		<div class="content-info  clearfix">

	</div>
<!-- } 게시판 페이지 정보 및 버튼 끝 -->
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