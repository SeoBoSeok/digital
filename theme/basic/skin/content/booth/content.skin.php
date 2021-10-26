<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<!-- <article id="ctt" class="ctt_<?php //echo $co_id; ?>">
    <header>
        <h1><?php//echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con">
        <?php //echo $str; ?>
    </div>

</article> -->

<div class="sub_visual">
    <div class="sub_txt">
        <div class="cell">
            <p id="sub_tit"></p>
						<p class="sub_tit_s">제1회 공주디지털문화유산전<br> <span class="small">2021년 12월 18일(토) ~ 20일(월)
</span></p>
        </div>
    </div>
</div>
 <script>
       /* $(document).ready(function() {
            if (oneDepth == 1) {
                $(".sub_tit_s").html("");
            } else {
                $(".sub_tit_s").html("");
            }

        });*/

    </script>

                <!-- container -->
                <div id="container">
                    <div id="lnb_wrap">
	<div class="lnb">
	<p class="ico_home"><a href="../main/main.php.html">home</a></p>
		<div class="lnbs lnbs1">
			<h2 id="lnb_tit"></h2>
			<ul class="copy_menu" id="gnb_menu">	
		    </ul>
		</div>
		<div class="lnbs lnbs2">
			<h3 id="lnb_tit2"></h3>
			<ul class="copy_menu" id="lnb_menu">
                <li class="lnb1"><a href="#;">행사소개</a></li>
                <li class="lnb1 on"><a href="#;">부스배치도</a></li>
                <li class="lnb1"><a href="#;">참가업체 리스트</a></li>
			</ul>
		</div>
	</div>
</div>                        <div id="inner_wrap">
                            <div class="title_bar">
    <h2 id="title">부스배치도</h2>
</div>
<!-- 내용 -->
<div class="sub_con ">
	<iframe src="/booth/index.html" frameborder="0" width="100%" height="700px"></iframe>
</div>
<!-- //container -->