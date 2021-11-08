$(document).ready(function () {
  function parallax(e) {
    $(".layer").each(function (index, item) {
      const speed = $(this).attr("data-speed");
      const x = (window.innerWidth - e.pageX * speed) / 100;
      const y = (window.innerHeight - e.pageY * speed) / 100;

      $(this).css({ transform: "translate(" + x + "px," + y + "px)" });
    });
  }
  $(document).mousemove(parallax);

  // $(".sec4_slider ul").each(function () {
  //   var $sec4Slider = $(this);
  //   var $sec4SliderItem = $sec4Slider.find("li");
  //   var visualNum = $sec4SliderItem.length;
  //   var $sec4SliderControls = $(".sec4 .controls");

  //   $sec4Slider.slick({
  //     slidesToShow: 2,
  //     slidesToScroll: 2,
  //     arrows: true,
  //     fade: false,
  //     dots: false,
  //     autoplay: false,
  //     speed: 800,
  //     infinite: true,
  //     autoplaySpeed: 3000,
  //     easing: "easeInOutQuint",
  //     pauseOnFocus: false,
  //     pauseOnHover: false,
  //     zIndex: 1,
  //     prevArrow: ".sec4 .controls .prev_btn",
  //     nextArrow: ".sec4 .controls .next_btn",
  //     responsive: [
  //       {
  //         breakpoint: 1270,
  //         settings: {
  //           autoplay: true,
  //         },
  //       },
  //       {
  //         breakpoint: 480,
  //         settings: {
  //           slidesToShow: 1,
  //           slidesToScroll: 1,
  //         },
  //       },
  //     ],
  //   });
  //   $sec4SliderControls.find(".pause_btn").click(function () {
  //     $sec4Slider.slick("slickPause");
  //     $(this).hide().siblings().show();
  //   });
  //   $sec4SliderControls.find(".play_btn").click(function () {
  //     $sec4Slider.slick("slickPlay");
  //     $(this).hide().siblings().show();
  //   });
  //   $sec4Slider.on(
  //     "beforeChange",
  //     function (event, slick, currentSlide, nextSlide) {
  //       $sec4SliderItem.removeClass("active-item");
  //       $sec4SliderItem.eq(nextSlide).addClass("active-item");
  //       $sec4SliderControls.find(".paging .cur").text(nextSlide + 1);
  //     }
  //   );
  //   $sec4SliderControls.find(".total").text(visualNum);
  //   $sec4Slider.on("init", function (event, slick) {
  //     $sec1SliderItem.eq(0).addClass("active-item");
  //   });
  // });
});
