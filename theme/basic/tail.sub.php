<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>
<!-- footer-->
<div id="footerW">
    <div id="footer">
        <div class="addressW">
            <address>
                <span>공주학 연구원</span> <span> Tel : +82-</span> <span> Fax : +82-</span> <span>E-mail : </span><br>
               <span></span>
			</address>
            <p class="copy">Copyright ⓒ 2021 공주 디지털 박람회.      All Rights Reserved.</p>
            <!-- <p class="f_logo"><img src="../img/common/f_logo2.png" alt="공주디지털박람회"></p> -->
            <p class="go_top"><a href="javascript:void(0);" onclick="goTop();"><img src="/img/main/top.png" alt="top"> </a></p>
        </div>
    </div>
</div>

<div class="quick_wrap">
    <ul>
        <!-- <li><a href="https://www.facebook.com/koreaedu" target="_blank"><img src="../img/main/sns_f.png" alt=""></a></li>
        <li><a href="https://www.instagram.com/educationkorea/" target="_blank"><img src="../img/main/sns_i.png" alt=""></a></li>
        <li><a href="http://edufair.blog.me/" target="_blank"><img src="../img/main/sns_b.png" alt=""></a></li>
        <li><a href="https://www.youtube.com/channel/UCHomuSrZwskuWT_gJxDj9Kg" target="_blank"><img src="../img/main/sns_y.png" alt=""></a></li>
        <li><a href="javascript:void(0);" onclick="ViewlayerPop(0);"><img src="../img/main/sns_n.png" alt=""></a></li> -->
    </ul>
</div>

<script>
	function newsletter_submit() {
		var news_name=$("#news_name").val();
		var news_email=$("#news_email").val();

		if (news_name=="") {
			alert('이름을 입력하세요.');
			return false;
		}

		if (news_email=="") {
			alert('이메일을 입력하세요.');
			return false;
		}

		$("#loading_area").css({"display":"block"});

		$.ajax({
			type : "POST",
			url : "../src/newsletter_process.php",
			data : { 'news_name' : news_name, 'news_email' : news_email , 'auth_token' : auth_token},
			success : function(data, status) {
				var json = eval("(" + data + ")");

				if (json.result=="true") {
					alert(json.msg);
					location.reload();
				} else {
					alert(json.msg);
				}

				$("#loading_area").delay(100).fadeOut();
			},
			error : function(err)
			{
				alert(err.responseText);
				return false;
			}
		});
	}
</script>
<!-- 로그인 -->
<div id="layerPop0" class="layerPop" style="display:none;">
    <div class="layerPop_inner">
        <div class="pop_wrap">
            <div class="pop_wrap_in" style="max-width:420px;">
                <!-- <div class="pop_head">
                    <p class="title tc">뉴스레터 신청</p>
                    <p class="x_btn" onclick="CloselayerPop();"><img src="../img/common/close_bt.png" alt="닫기"></p>
                </div> -->
                <div class="pop_body">
                    <ul class="signup">
                        <li><label class="f115 fcor0" for="uid">이름</label>
                            <input type="text" id="news_name" placeholder="">
                        </li>
                        <li><label class="f115 fcor0" for="passwd">이메일</label>
                            <input type="email" id="news_email" placeholder="">
                        </li>
                    </ul>
                    <div class="btn-tc">
                        <a href="javascript:void(0);" onclick="newsletter_submit();" class="btnStrong db"><span>제출하기</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //로그인 -->		<!-- //footer-->
		<script src="../js/jquery.malihu.PageScroll2id%EF%B9%96ver=180813.js" charset="utf-8"></script>

		<script>
			(function($) {
				$(window).load(function() {
					$("#navigation a").mPageScroll2id({
						offset: 88
					});
					/*$(".item a").on("click touchend", function(e) {
						var el = $(this);
						var link = el.attr("href");
						window.location = link;
					});*/


				});
			})(jQuery);

		</script>
</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.