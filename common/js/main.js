$(document).ready(function () {
  function parallax(e) {
    $(".layer").each(function (index, item) {
      var speed = $(this).attr("data-speed");
      var pageX = (window.innerWidth - e.pageX * speed) / 400;
      var pageY = (window.innerHeight - e.pageY * speed) / 400;

      if (window.innerWidth > 767) {
        $(this).css({
          transform: "translate(" + pageX + "px," + pageY + "px)",
        });
      }
    });
  }
  $(document).mousemove(parallax);

  $(".sec2 .slider > ul").each(function () {
    var $sec2Slider = $(this);

    $sec2Slider.slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      fade: false,
      dots: false,
      autoplay: true,
      speed: 800,
      infinite: true,
      autoplaySpeed: 3000,
      easing: "easeInOutQuint",
      pauseOnHover: true,
      zIndex: 1,
      prevArrow: ".sec2 .controls .prev_btn",
      nextArrow: ".sec2 .controls .next_btn",
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  });
});
