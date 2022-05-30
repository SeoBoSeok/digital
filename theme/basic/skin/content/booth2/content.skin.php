<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
echo '<link rel="stylesheet" href="'.$content_skin_url.'/style.css">';
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
            <h2>전시구성</h2>
            <p>디지털 문화유산의 현재와 미래</p>
          </div>
        </div>
      </section>
      <section class="location">
        <div class="inner">
          <ul>
            <li>전시구성</li>
            <li>전시배치</li>
          </ul>
        </div>
      </section>
      <!-- <section class="sec0">
        <div class="inner">
          <div class="cont ani">
          <table width="750" border="0" cellpadding="0" cellspacing="0" align="center">
            <tbody>
              <tr>
                <td width="50%" height="55" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=booth'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">전시배치</td>
                <td width="50%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=schedule'" align="center" style="border-bottom:solid 2px #101443; border-top:solid 1px #efefef; font-size:18px; font-weight:500; cursor:pointer">전시구성</td>
                <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_edu'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">디지털문화유산 미래교육</td>
                <td width="25%" bgcolor="#ffffff" onclick="location.href='/bbs/content.php?co_id=about_org_product'" align="center" style="border-bottom:solid 1px #efefef; border-top:solid 1px #efefef; font-size:18px; cursor:pointer">문화유산상품 마켓</td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </section> -->
			<div class="subpage-more-wrap">
        <span class="subpage-item-lists subpage_nav_lists">
            <span class="subpage-item each-line subpage_nav_item active">
              <a class="subpage-link" href="/bbs/content.php?co_id=booth">
                  <span class="subpage-link-text">전시배치</span>
              </a>
            </span>
            <span class="subpage-item each-line subpage_nav_item ">
              <a class="subpage-link" href="/bbs/content.php?co_id=schedule">
                  <span class="subpage-link-text">전시구성</span>
              </a>
            </span>
        </span><!--/.subpage-item-lists-->
      </div>
      <section class="sec1">
        <div class="inner">

          <div class="cont ani active schedule">
					<div class="booth_tite">
						<h2>층별 안내도</h2>
					</div>
					<div class="booth_pic">
						<img src="/common/img/booth4.jpeg?v1" alt="전시배치">
					</div>
					<div class="booth_tite second">
						<h2>디지털문화유산 산업·교육·연구 전시장</h2>
					</div>
					<div class="booth_pic">
						<img src="/common/img/booth3.jpeg?v1" alt="전시배치">
					</div>
          <div class="booth_tite second">
						<h2>디지털문화유산 초청전</h2>
					</div>
					<div class="booth_pic">
						<img src="/common/img/booth2.jpeg?v1" alt="전시배치">
					</div>
          <div class="booth_tite second">
						<h2>디지털문화유산 특별전</h2>
					</div>
					<div class="booth_pic">
						<img src="/common/img/booth1.jpeg?v1" alt="전시배치">
					</div>										
          </div>	

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
<!-- </body>
</html> -->
<script>
  function go_open(url) {
    $('#myModal iframe').attr('src', url);
    $('#myModal').modal('show');
  }
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="" width="100%" height="700px" frameborder="0" sandbox="allow-same-origin allow-scripts allow-popups allow-forms allow-top-navigation"
                        allowtransparency="true"></iframe>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    