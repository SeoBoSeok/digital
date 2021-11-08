$(document).ready(function () {
  function headerMouseHover() {
    $("#nav>ul>li").mouseenter(function () {
      $("#header").addClass("on");
      $(this).addClass("on");
      $(this).siblings("li").removeClass("on");
    });
    $("#header").mouseleave(function () {
      $(this).removeClass("on");
      $("#nav>ul>li").removeClass("on");
    });
  }

  function clickNavLiA() {
    $("#nav>ul>li>a").click(function (e) {
      e.preventDefault();
      $(this).parent("li").toggleClass("on");
    });
  }

  var header_flag = true;
  function animateHeader() {
    if (window.innerWidth > 1270 && header_flag) {
      header_flag = false;
      $("#nav>ul>li>a").off();
      $("#header, #nav>ul>li").removeClass("on");
      headerMouseHover();
    }
    if (window.innerWidth <= 1270 && !header_flag) {
      header_flag = true;
      $("#nav>ul>li").off();
      $("#header").off();
      clickNavLiA();
    }
  }

  if (window.innerWidth > 1270) {
    headerMouseHover();
  } else {
    clickNavLiA();
  }

  $(window).resize(function () {
    animateHeader();
  });

  $("#menu_btn").click(function () {
    $("html, header").toggleClass("on");
  });

  $(".lang").click(function () {
    $(this).toggleClass("on");
  });

  $(".search button").click(function () {
    if (!$(".search").hasClass("on")) {
      $(".search, .right").addClass("on");
    } else {
      if ($.trim($(".search input").val()).length) {
        $(this).parent().submit();
      } else {
        alert("寃��됱뼱瑜� �낅젰�댁＜�몄슂.");
      }
    }
    return false;
  });

  $(document).mouseup(function (e) {
    $closeTarget = $(".close_target");
    if (!$closeTarget.is(e.target) && $closeTarget.has(e.target).length === 0) {
      if ($closeTarget.hasClass("on")) {
        $closeTarget.removeClass("on");
      }
    }

    $homepageLists = $("footer .homepage_lists");
    if (
      !$homepageLists.is(e.target) &&
      $homepageLists.has(e.target).length === 0
    ) {
      if ($homepageLists.hasClass("on")) {
        $homepageLists.removeClass("on");
        $homepageLists.find("ul").slideUp(200);
      }
    }
  });

  $(".shortcut .lists > ul").each(function () {
    var $shortcutSlider = $(this);
    var $shortSlideControls = $(".shortcut .controls");

    $shortcutSlider.slick({
      variableWidth: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: false,
      dots: false,
      autoplay: true,
      speed: 800,
      infinite: true,
      autoplaySpeed: 1000,
      easing: "easeInOutQuint",
      pauseOnFocus: true,
      pauseOnHover: true,
      variableWidth: true,
      prevArrow: ".shortcut .controls .prev_btn",
      nextArrow: ".shortcut .controls .next_btn",
    });
    $shortSlideControls.find(".pause_btn").click(function () {
      $shortcutSlider.slick("slickPause");
      $(this).hide().siblings().show();
    });
    $shortSlideControls.find(".play_btn").click(function () {
      $shortcutSlider.slick("slickPlay");
      $(this).hide().siblings().show();
    });
  });

  $("#top_btn").click(function () {
    $("html, body").stop().animate({ scrollTop: "0" }, 500);
    return false;
  });

  $(".homepage_lists .txt").click(function () {
    $(this).parents(".homepage_lists").toggleClass("on");
    $(this).siblings("ul").slideToggle(200);
  });
});