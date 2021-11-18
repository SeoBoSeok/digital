$(document).ready(function () {
  $("#menu_btn").click(function () {
    $("#header").toggleClass("on");
  });

  function headerMouseEvt() {
    $("#nav>ul>li>a").mouseenter(function () {
      $("#header").addClass("on");
    });

    $("#header").mouseleave(function () {
      $(this).removeClass("on");
    });
  }

  function clickNavLiA() {
    $("#nav>ul>li>a").click(function (e) {
      e.preventDefault();
      $(this).siblings("ul").slideToggle(200);
      $(this).parent("li").siblings().find("ul").slideUp(200);
    });
  }

  var header_flag = true;
  function animateHeader() {
    if (window.innerWidth > 767 && header_flag) {
      header_flag = false;
      headerMouseEvt();
      $("#nav>ul>li>a").off("click");
      $("#nav>ul>li>ul").removeAttr("style");
    }
    if (window.innerWidth <= 767 && !header_flag) {
      header_flag = true;
      clickNavLiA();
      $("#nav>ul>li>a").off("mouseenter");
      $("#header").off("mouseleave");
    }
  }

  if (window.innerWidth <= 767) {
    clickNavLiA();
  } else {
    headerMouseEvt();
  }

  $(window).resize(function () {
    animateHeader();
  });

  function scrollAnimation() {
    $(".ani").each(function () {
      var bottom_of_element = $(this).offset().top + $(window).height() / 10;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      if (bottom_of_window > bottom_of_element) {
        $(this).addClass("active");
      }
    });
  }

  scrollAnimation();

  $(window).scroll(function () {
    scrollAnimation();
  });

  $("#top_btn").click(function () {
    $("html, body").stop().animate({ scrollTop: 0 }, 500, "easeInOutCubic");
    return false;
  });
});