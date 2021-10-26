	//common.js - kr
	
	// 기기 체크
	var deviceChecker = function(){
    var device;
    var width = window.innerWidth;
    if(width >= 1025){
      device = "pc";
    }else if(width >= 768){
      device = "tablet";
    }else if(767 >= width){
      device = "mobile";
    }
    return device;
    };
    
    // 글로벌빙그레 (PC)
    function init_globalProduct() {
    var $map = $(".map_area"),
      $globalSlides = $(".global_slide_wrap"),
      $slides = $globalSlides.find(".slide_item");
    
    $slides.on({
      "mouseenter": function() {
        var indexArr = $(this).data("index").split(",")
    
        $.each(indexArr, function(i, ele) {
          var $country = $map.find("span");
          
          $country.filter("[data-index="+ ele +"]").addClass("on");
        });
        var imgBox = $('.img_box');
        var hoverBox = $('.over_box');
        
        
      },
      "mouseleave": function() {
        $map.find("span").removeClass("on");
      }
    });
    }
    
    $(function(){
    var device = deviceChecker(); //deviceChecker
    var $msk = $('div.mask'); // 마스크 
    
    
    var gnb = {
      init: function() {
        this.setPcEvent();
        this.setMobileEvent();
      },
      setPcEvent: function() {
        var $gnbWrap = $('.header .gnb_wrap'), 
          $pcGnb = $gnbWrap.find('.gnb_box'),
          $gnbArea = $gnbWrap.find('.gnd_2depth_area');
    
        $pcGnb.on('mouseenter focusin', function() {
          if (!$pcGnb.find('*').is(':animated')) {
            $pcGnb.find('.gnb_2dep').stop().slideDown('fast');
            $gnbWrap.find('.gnb_bg').stop().slideDown('fast');
            $gnbArea.stop().slideDown('fast');
            $gnbArea.find('.slide_wrap').slick('setPosition');
          }
        });
    
        $pcGnb.on('mouseleave', closeGnb);
    
        $pcGnb.find("a, button").filter(":first").on("keydown", function(e) {
          if (e.shiftKey && e.keyCode == 9) {
            closeGnb()
          }	
        });
    
        $pcGnb.on("keydown", 'a, button[tabindex=0]', function(e) {
          var $lastItem = $pcGnb.find("a, button[tabindex=0]").filter(":last");
          
          if ($lastItem[0] == $(this)[0] && e.keyCode === 9) {
            closeGnb()
          }
        });
    
        function closeGnb() {
          if (!$pcGnb.find("*").is(":animated")) {
            $pcGnb.find('.gnb_2dep').stop().slideUp('fast');
            $gnbArea.stop().slideUp('fast');
            $gnbWrap.find('.gnb_bg').stop().slideUp('fast');
          }
        }
      },
      setMobileEvent: function() {
        var $moAll = $('button.menu_btn_open'),
          $mGnb_bar = $('.mobile_gnb_wrap').find('div.mobile_gnb'),
          $mGnb_depBtn = $('.gnb_con li a.btn_open');
    
        $mGnb_depBtn.on('click', function(e){
          var $thisOpen = $(this);
    
          $thisOpen.toggleClass('on')
          $thisOpen.next('ul').toggleClass('on');
          
          e.preventDefault();
        });
    
        $moAll.on('click', toggleGnb);
    
        function toggleGnb() {
          $moAll.next('.mobile_gnb').toggleClass('on')
          $moAll.toggleClass('close');
          
          if($moAll.hasClass('close')) {
            $moAll.children('.blind').text('모바일 메뉴 닫기');
            $msk.show();
            $msk.on('click.gnb', toggleGnb);
            $('.mask').css({zIndex:30}); //12.15 모바일 팝업시 메뉴 마스크 적용 문제 해결
          } else {
            $moAll.children('.blind').text('모바일 메뉴 열기');
            if(!$('.side_bar').hasClass('on')){
              $msk.hide();
            }
            $msk.off('click.gnb');
          }
        }
      }
    };
    
    var location = {
      init: function() {
        this.$location = $('.location');
        this.setEvent();
      },
      setEvent: function() {
        var self = this;
    
        self.$location.find('>li').on('focusin mouseenter', function(e) {
          $(this).addClass('on');
          $(this).siblings('li').removeClass('on');
        });
    
        self.$location.on('mouseleave', function(e) {
          $(this).find('>li').removeClass('on');
        });
    
        self.$location.find('a:last').on('keydown', function(e) {
          if (e.keyCode ===  9 && !e.shiftKey) {
            self.$location.find('>li').removeClass('on');
          }
        });
    
      }
    };
    
    /*var sticky = {
      init: function() {
        var self = this;
    
        self.$target = ($(".tab_menu").length && $(".tab_menu")) || ($(".location_wrap").length && $(".location_wrap")) || null;
    
        if (self.$target) {
    
          self.setEvent();
    
          $(window).on('scroll.sticky resize.sticky', $.proxy(self.setEvent, self));
        }
      },
      setEvent: function() {
        var self = this,
          scrollTop = $(window).scrollTop();
    
        self.setException();
        self.setSticky();
          
        scrollTop >= self.$target.offset().top ? self.$sticky.addClass('sticky') : self.$sticky.removeClass('sticky')
      },
      setException: function() {
        var self = this;
      
        if ($('.story_global').length) {
    
          device = deviceChecker();
    
          self.$target = (device == 'pc' && $('.location_wrap')) || $('.tab_menu');
        }
      },
      setSticky: function() {
        var self = this;
    
        if (!self.$target.is(self.prevTarget)) {
          
          self.$prevTarget && self.$prevTarget.find('.sticky_box').length && self.$prevTarget.find('.sticky_box').removeClass('sticky');
          
          if (!self.$target.find('.sticky_box').length) {
            self.$target.wrapInner('<div class="sticky_box"></div>');	
          }
    
          self.$sticky = self.$target.find('.sticky_box');
        }
    
        self.$prevTarget = self.$target;
      }
      
    }*/
    
    /* 171129 수정 */
    var sticky = {
      init: function() {
        var self = this;
    
        self.$target = ($(".location_wrap").length && $(".location_wrap")) || null;
        self.$target2 = ($(".tab_menu").length && $(".tab_menu")) || null;
    
        if (self.$target || self.$target2) {
          self.setEvent();
    
          $(window).on('scroll.sticky resize.sticky', $.proxy(self.setEvent, self));
        }
      },
      setEvent: function() {
        var self = this;
    
        self.setException();
        self.setSticky();
      },
      setException: function() {
        var self = this,
          device = deviceChecker();
    
        if (device == 'mobile') {
          self.$target = ($(".tab_menu").length && $(".tab_menu")) || null;
          self.$target2 = null;
        } else {
          self.$target = ($(".location_wrap").length && $(".location_wrap")) || null;
          self.$target2 = ($(".tab_menu").length && $(".tab_menu")) || null;
        }
      },
      setSticky: function() {
        var self = this,
          scrollTop = $(window).scrollTop();
    
        if (self.$target && !self.$target.is(self.prevTarget)) {
          
          self.$prevTarget && self.$prevTarget.find('.sticky_box').length && self.$prevTarget.find('.sticky_box').removeClass('sticky');
          
          if (!self.$target.find('.sticky_box').length) {
            self.$target.wrapInner('<div class="sticky_box"></div>');	
          }
    
          self.$sticky = self.$target.find('.sticky_box');
          self.$sticky.css({
            top: 0
          });
          
          scrollTop >= self.$target.offset().top ? self.$sticky.addClass('sticky') : self.$sticky.removeClass('sticky');
    
          if (self.$target2) {
            if (!self.$target2.find('.sticky_box').length) {
              self.$target2.wrapInner('<div class="sticky_box"></div>');	
            }
    
            self.$sticky2 = self.$target2.find('.sticky_box');
            self.$sticky2.css({
              top: self.$target.outerHeight(true) + 1 /* 12.14 수정 */
            });
            scrollTop >= self.$target2.offset().top - self.$target.outerHeight(true) ? self.$sticky2.addClass('sticky') : self.$sticky2.removeClass('sticky');	
          }
        }
    
        self.$prevTarget = self.$target;
      }		
    }
    
    gnb.init();
    location.init();
    sticky.init();
    
    // top - Go link Btn
    if ($('.topgo_link').length){
      var $topBtn = $('.topgo_link');
      $topBtn.hide();
      $(window).scroll(function(e){
        var $topBtnSp = $(this).scrollTop();
        if($topBtnSp >= 100){
          $topBtn.fadeIn();
        }
        else {
          $topBtn.fadeOut();
        }
      });
      $('.topgo_link').on('click', function(){
        $('body,html').animate({scrollTop:0},350);
    
    
      });
    }
    
    
    $(".sel_box, .msel_box").each(function() {
      var $selWrap = $(this),
        $curBtn = $selWrap.find(">a");
    
      $curBtn.on("click", function(e) {
        var $thisBtn = $(this),
          $selList = $thisBtn.siblings("ul");
    
        if ($selWrap.hasClass("on")) {
          $selWrap.removeClass("on");
        } else {
          $selWrap.addClass("on");
        }
    
        $('body').on("click", function(e){
          if( !$selWrap.has(e.target).length ){
            $selWrap.removeClass('on');
          }
        });
    
        $selWrap.find("a, button").filter(":first").on("keydown", function(e) {
          if (e.shiftKey && e.keyCode === 9) {
            $selWrap.removeClass('on');
          }
        });
        $selWrap.find("a, button").filter(":last").on("keydown", function(e) {
          if (!e.shiftKey && e.keyCode ===  9) {
            $selWrap.removeClass('on');
          }
        });
    
        e.preventDefault();
      });
    });
    $(".sle_box2").each(function() {
      var $selboxWrap = $(this),
        $sle_Btn = $selboxWrap.find(">a");
    
      $sle_Btn.on("click", function(e) {
        var $thisBtn = $(this),
          $selbxList = $thisBtn.siblings("ul");
        if ($sle_Btn.hasClass("on")) {
          $sle_Btn.removeClass("on");
        } else {
          $sle_Btn.addClass("on");
        }
        e.preventDefault();
      }); //click
    }); //mo
    //selectBox - jquery.selectric.min.js 
    
    $(".yut_play").on("click", function (e){
      if(device == "mobile"){
        $(this).attr('[data-role="layer-button"]').remove()
        
      }
    });
    
    $(window).resize(function(){
      resize_iframe();
    });
    resize_iframe();
    function resize_iframe(){
    
      var youtube = /^https?:\/\/www.youtube.com\/embed\//;
      var ytb_width =$(window).width();
      
      if(ytb_width < 768){
        $("iframe").each(function(){
          $(this).css({"width":"100%"});
    
    
          $(this).css("height", Math.ceil(parseInt($(this).css("width")) * $(this).attr("height") / $(this).attr("width")) + "px");
        });
      }
    } //end
    
    
    // content Lnb
    $('.lnb').each(function(){
      var _this = $(this);
      var $btnLnb = _this.find('ul>li>a');
      var $lnbCont = _this.next('.cont');
      $lnbCont.find('.con_box').eq(0).addClass('active');
      $btnLnb.on('click', function(e){
        var lnbIdx = $(this).parent().index();
        $(this).parent().addClass('active').siblings().removeClass('active');
        $lnbCont.find('.con_box').eq( lnbIdx ).addClass('active').siblings().removeClass('active');
        e.preventDefault();
      });
    });
    
    // TAB
    if($(".tabs").length) {
      $(".tab_con").hide();
      $(".tabs .tab_con:first").show();
      $(".tabs .tab_btn:first").addClass('active');
      $(".tabs .tab_btn").click(function(e){
        e.preventDefault();
        var idx = $(this).index();
        $(this).siblings().removeClass('active').end().addClass('active');
        //$(this)
        $(".tab_con").hide();
        $(".tab_con").eq(idx).show();
      });
    }
    if($(".tabs02").length) {
      $(".tab_cont").hide();
      $(".tabs02 .tab_cont:first").show();
      $(".tabs02 li:first").addClass('active');
      $(".tabs02 li a").click(function(e){
        e.preventDefault();
        var idx = $(this).parent().index();
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
        $(".tab_cont").hide();
        $(".tab_cont").eq(idx).show();
      });
    }
    
    /* tab + slider : 끌레도르 17-11-30 수정 */
    if ($(".tabs3").length) {
      $(".tab_con").hide();
      $(".tabs3 li:first").addClass('on');
      $(".tab_con:first").show();
    
      var tab_settings_nav = {
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        cssEase: 'linear',
        slide: 'div',
        centerPadding: '8px',
        focusOnSelect: true,
        asNavFor: '.type_for',
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      };
      // type_nav_s
      var tab_settings2_nav = {
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        cssEase: 'linear',
        slide: 'div',
        centerMode: true,
        centerPadding: '8px',
        focusOnSelect: true,
        asNavFor: '.type_for',
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 767,
            settings: {
              dots: true,
              /* 2017-11-13 추가 */
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      };
      // type_for
      var tab_settings_for = {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true,
        fade: true,
        zIndex: 1,
        swipe:false
      };
    
      $(".tabs3 li a").click(function(e) {
        var idx = $(this).parent().index();
    
        e.preventDefault();
    
        $(this).addClass('on').parents('li').siblings('li').children('a').removeClass('on');
        $(".tab_con").hide();
        $(".tab_con").eq(idx).show();
        $(".tab_con").find('.slick-initialized').slick('unslick');
    
        if($(".tab_con").eq(idx).find(".type_nav").find('.slide_item').size() > 5){
          $(".tab_con").eq(idx).find(".type_nav").slick(settings_nav);	
        } else {
          $(".tab_con").eq(idx).find(".type_nav").slick(settings2_nav);	
        }
        $(".tab_con").eq(idx).find(".type_for").slick(tab_settings_for);
      });
    }
    if($(".tabs04").length) {
    
      $(".tab_con").hide();
      $(".tabs04 .tab_con:first").show();
      $(".tabs04 ul li:first").addClass('active');
      $(".tabs04 ul li a").click(function(e){
        e.preventDefault();
        var idx = $(this).parent().index();
        $(this).parent().siblings().removeClass('active').end().addClass('active');
        //$(this)
        $(".tab_con").hide();
        $(".tab_con").eq(idx).show();
      });
    }
    /* accodian */
    $('.accodian_wrap').each(function(){
      var _this = $(this);
      var $btnToggle = _this.find('.btn_toggle');
      var $irTxt = _this.find('.accordian_type').find('.tit_type').after('<span class="ir">open</span>');
      var $accodianCon01 = _this.find('.accordian_type').eq(0);
    
      $accodianCon01.find('.ir').text('close');
    
      $btnToggle.on('click', function(e){
        var $accodianCont = $(this).parents('.accordian_type');
        if( !$accodianCont.hasClass('on') ){
          $accodianCont.addClass('on').find('.ir').text('close').parents('.accordian_type').siblings().removeClass('on').find('.ir').text('open');
        } else {
          $accodianCont.removeClass('on').find('.ir').text('open');
        }
        e.preventDefault();
      });
    });
    
    // LayerPop
    function layerPop(){
      var $button = $('[data-role="layer-button"]'); 
      var $close = $('[data-role="layer-close"]'); 
      var $dimm = $('.mask');
    
      $button.on('click', function(e){
        var layer = $(this).data('layer-name');
        var $currentLayer = $("#" + layer);
        var scrollHeight =  $(window).scrollTop();
        var _top = "";
        if(!$('[data-layer-active="true"]').length){
          $dimm.show();
          $('body').css({overflow: 'hidden'});
          $('.mask').css({zIndex:121});
          
          $currentLayer.fadeIn(200).attr('data-layer-active', 'true');
          _top = $(window).height() < $('[data-layer-active="true"]').outerHeight(true) ? 
          scrollHeight : 
          (scrollHeight + ($(window).height() - $currentLayer.outerHeight(true)) / 2) ;
    
          $currentLayer.css({
            top: _top
          });
        }
        e.preventDefault();
      });
      $close.add($dimm).on('click', function(e){
        $('[data-layer-active="true"]').fadeOut(200).removeAttr('data-layer-active');
        $dimm.hide();
        $('body').css({overflow: 'visible'});
        //$('.mask').css({zIndex:0});
        e.preventDefault();
      });
    }
    layerPop();
  
  // 접근성 관련 포커스 강제 이동
  function accessibilityFocus() {
    
    $(document).on('keydown', '[data-focus-prev], [data-focus-next]', function(e){
      var next = $(e.target).attr('data-focus-next'),
        prev = $(e.target).attr('data-focus-prev'),
        target = next || prev || false;
      
      if(!target || e.keyCode != 9) {
      return;
      }
      
      if( (!e.shiftKey && !!next) || (e.shiftKey && !!prev) ) {
      setTimeout(function(){
        $('[data-focus="' + target + '"]').focus();
      }, 1);
      }
      
    });
    
    }
    
    function tooltip() {
    var openBtn = '[data-tooltip]',
      closeBtn = '.tooltip-close';
    
    function getTarget(t) {
      console.log($(t).attr('data-tooltip'));
      return $(t).attr('data-tooltip');
    }
    
    function open(t) {
      var showTarget = $('[data-tooltip-con="' + t + '"]');
      showTarget.show().focus();
      showTarget.find('.tooltip-close').data('activeTarget', t);
      $('body').css({overflow: 'hidden'});
    }
    
    function close(t) {
      var activeTarget = $('[data-tooltip-con="' + t + '"]');
      activeTarget.hide();
      $('[data-tooltip="' + t + '"]').focus();
      $('body').css({overflow: 'visible'});
    }
    
    $(document)
      .on('click', openBtn, function(e){
      e.preventDefault();
      open(getTarget(e.target));
      })
      .on('click', closeBtn, function(e) {
      e.preventDefault();
      close($(this).data('activeTarget'));
      })
    
    }
    
    
    $(document).ready(function(){
    
    tooltip();
    accessibilityFocus();
    
    });
    
  
    // noticePop 17.12.18 추가
    var param;
    var $currentLayer;
    function noticePop(param){
      var $button = $('[data-role="layer-button"]'); 
      var $close = $('[data-role="layer-close"]'); 
      var $dimm = $('.mask');
      var noticeClass = $('.main_notice').attr('class');
      if(!noticeClass){ //17.12.19 브랜드 배너 깨짐 해결
        return;
      }
  
      $currentLayer = $("." + param);
      var scrollHeight =  $(window).scrollTop();
      var _top = "";
  
      if(noticeClass.indexOf('cont_layer_wrap main_notice') > -1 ){
        $dimm.show();
        $('body').css({overflow: 'hidden'});
        $('.mask').css({zIndex:121});
        
        $currentLayer.fadeIn(200).attr('data-layer-active', 'true');
        //_top = $(window).height() < $('[data-layer-active="true"]').outerHeight(true) ? 
        scrollHeight : 
        (scrollHeight + ($(window).height() - $currentLayer.outerHeight(true)) / 2) ;
        /*
        $currentLayer.css({
          top: _top
        }); */
      }
      $close.add($dimm).on('click', function(e){
        //$('[data-layer-active="true"]').fadeOut(200).removeAttr('data-layer-active');
        $currentLayer.fadeOut(200).removeAttr('data-layer-active');
        $dimm.hide();
        $('body').css({overflow: 'visible'});
        e.preventDefault();
      });
    }
    noticePop('main_notice');
  
    if($('.main_notice').length) {
      var $mNotice = $('.main_notice');
      var _noticePos = ($(window).height() - $mNotice.outerHeight(true)) / 2;
      //$mNotice.css({'top':_noticePos});
    }
    
    // radio button
    $(document).on("change", "input[type='radio']", function() {
      var $this = $(this),
        thisName = $this.attr("name");
      $("input[name=" + thisName + "]").parent().removeClass("checked");
      $this.parent().addClass("checked");
    });
    
    // checkbox
    $(document).on("change", "input[type='checkbox']", function(){
      var $this = $(this);
      $this.is(":checked") ? $this.parent().addClass("checked") : $this.parent().removeClass("checked");
    });
    
    // fileSearch (input)
    var uploadFile = $('.fileBox .uploadBtn');
    uploadFile.on('change', function(){
      if(window.FileReader){
        var filename = $(this)[0].files[0].name;
      } else {
        var filename = $(this).val().split('/').pop().split('\\').pop();
      }
      $(this).siblings('.fileName').val(filename);
    });
    
    //ScrollBar
    if ($('.scrollbar-inner').length) {
      $('.scrollbar-inner').scrollbar({
        autoScrollSize : false,
      });
    }
    
    //Slider banner
    if ($('.slide_wrap').length){
      var settings = {
        dots:true,
        arrows: false,
        infinite: true,
        speed: 500,
        cssEase: 'linear',
        slide:'div.slide_item'
      };
      // type2
      var settings2 = {
        dots: true,
        autoplay:true, //자동실행
        autoplaySpeed:3000, //슬라이드간격(시간)
        infinite: true,
        arrows: false,
        speed: 500,
        cssEase: 'linear',
        slide:'div.slide_item'
      };
      //type3
      var settings3 = {
        dots: false,
        infinite: true,
        arrows: true,
        speed: 500,
        cssEase: 'linear',
        slide:'div'
      };
      //type4
      var settings4 = {
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        cssEase: 'linear',
        slide:'div',
        centerMode: true,
        centerPadding:'8px',
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
            },
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            }
          }
        ]
      };
      //type5
      var settings5 = {
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 500,
        arrows: true,
        cssEase: 'linear',
        slide:'div',
        centerMode: false,
        centerPadding:'40px',
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
            }
          }
        ]
      };
      //type6
      var settings6 = {
        dots:true,
        slidesToShow: 2,
        arrows: false,
        infinite: true,
        speed: 500,
        cssEase: 'linear',
        slide:'div.slide_item'
      };
      var settings7 = {
        dots: false,
        arrows: false,
        infinite: true,
        speed: 700,
        autoplaySpeed:800, //슬라이드간격(시간)
        cssEase: 'linear',
        autoplay:'auto',
        slide:'div',
        variableWidth: true,
        swipeToSlide: true
      };
      // type_nav 2017-11-16 centerMode 삭제
      var settings_nav = {
        dots: true,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 500,
        arrows: true,
        cssEase: 'linear',
        slide:'div',
        centerPadding:'8px',
        focusOnSelect: true,
        asNavFor: '.type_for',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 1, /* 2017-11-23 변경 */
            infinite: true /* 2017-11-23 추가 */
            }
          },
          {
            breakpoint: 767,
            settings: {
            slidesToShow: 1,
            slidesToScroll: 1
            }
          }
        ]
      };
      // type_nav_s
      var settings2_nav = {
        dots: false,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        speed: 500,
        arrows: true,
        cssEase: 'linear',
        slide:'div',
        centerMode: true,
        centerPadding:'8px',
        focusOnSelect: true,
        asNavFor: '.type_for',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
            slidesToShow: 3,
            slidesToScroll: 3
            }
          },
          {
            breakpoint: 767,
            settings: {
            dots: true, /* 2017-11-13 추가 */
            slidesToShow: 1,
            slidesToScroll: 1
            }
    
          }
        ]
      };
      // type_for
      var settings_for = {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows :false,
        infinite: false,
        centerMode: true,
        focusOnSelect: true,
        fade:true,
        zIndex:1
      };
      // type8
      var settings8 = {
        dots: true,
        autoplay:true, //자동실행
        autoplaySpeed:3000, //슬라이드간격(시간)
        infinite: true,
        arrows: true,
        speed: 500,
        cssEase: 'linear',
        slide:'div'
      };
      var main_setting = {
        dots: false,
        infinite: true,
        autoplay:true, //자동실행
        autoplaySpeed:3000, //슬라이드간격(시간)
        arrows: true,
        speed: 500,
        cssEase: 'linear',
        slide:'div'
      };
    
      var set_slider = [];
      
      // 17-11-30 수정 
      $(window).ready(function() {
        $(".slide_wrap").each(function(i, el) {
          var palyControl = true; //play auto/stop
    
          if ($(this).not('.slick-initialized')) {
    
            if ($(this).hasClass('type2')) {
              set_slider[i] = $(this).slick(settings2);
            } else if ($(this).hasClass('type3')) {
              set_slider[i] = $(this).slick(settings3);
            } else if ($(this).hasClass('type4')) {
              set_slider[i] = $(this).slick(settings4);
            } else if ($(this).hasClass('type5')) {
              set_slider[i] = $(this).slick(settings5);
            } else if ($(this).hasClass('type6')) {
              set_slider[i] = $(this).slick(settings6);
            } else if ($(this).hasClass('type7')) {
              set_slider[i] = $(this).slick(settings7);
            } else if ($(this).hasClass('type8')) {
              set_slider[i] = $(this).slick(settings8);
            } else if ($(this).hasClass('type_nav')) {
              if ($(this).find('.slide_item').size() > 5) {
                set_slider[i] = $(this).slick(settings_nav);
              } else {
                set_slider[i] = $(this).slick(settings2_nav);
              }
            } else if ($(this).hasClass('type_for')) {
              if($(this).hasClass('swipe_non')){
                settings_for.swipe = false;
              }
              set_slider[i] = $(this).slick(settings_for);
            } else if ($(this).hasClass('type_main')) {
              set_slider[i] = $(this).slick(main_setting);
            } else {
              set_slider[i] = $(this).slick(settings);
            }
          }
    
          if ($(this).has('.btn_play')) { 
            var option = $(this).slick('slickGetOption', "autoplay"),
              $playBtn = $(this).find('.btn_play'),
              $slickBar = $(this).find('.slick-dots'),
              $indigatorW = $slickBar.width();
    
            playControl = option;
    
            if (playControl) {
              $playBtn.removeClass('stop_state');
              $playBtn.find('span.ir').text('Stop');
            } else {
              $playBtn.addClass('stop_state');
              $playBtn.find('span.ir').text('Play');
            }
    
            $playBtn.on('click', function() {
              if (playControl) {
                $(this).addClass('stop_state');
                $(this).find('span.ir').text('Play');
                set_slider[i].slick('slickPause'); //슬라이더 자동실행 일시정지
              } else {
                $(this).removeClass('stop_state');
                $(this).find('span.ir').text('Stop');
                set_slider[i].slick('slickPlay'); //슬라이더 자동실행
              }
              playControl = !playControl;
            });
        
            if ($(this).hasClass('type8')) {
              var $css1 =(($indigatorW/2)+23);
            } else {
              var $css1 =(($indigatorW/2)+10);
            }
    
            $playBtn.css({'margin-left': $css1});
    
    
          }
        });
      });
    }
    
    // slide2 - swipe Type (content) - only mobile 
    /* if($('.cont_swipe_wrap').length && device == "mobile") {
      var $swpWrap = $('.cont_swipe_wrap');
      var $swpCont = $('.cont_swipe_wrap .cont_swipe');
      $swpWrap.slick({
        adaptiveHeight: true,
        infinite: false,
        arrows: false,
        slide:'div.cont_swipe',
        slidesToShow:1,
        swipeToSlide: false
      });
    } */
    
    // slide 브랜드 목록 > 모바일 > 슬라이드 
    ($('.slide_wrap.brand_detlist').length && device == "mobile") ?	$(this).find('.slide_wrap.brand_detlist').addClass('type2') : $(this).find('.slide_wrap.brand_detlist').removeClass('type2');
    
    
    // 스토리 > 글로벌 빙그레
    if ($(".export_product").length) {
      init_globalProduct();
    }
    
    // 브랜드
    if($('.visual_area').hasClass('brand_list')){
      if(device != "mobile"){
        $('.brand_list').children('div.slide_wrap').addClass('type8');
      } 
    }
    
    
    // 브랜드 목록 - sidebar
    if($('.side_bar').length){
      setSideBar();
      $('.mask').click(function(e){
        if( !$('.side_bar').has(e.target).length ){
          $('.side_bar').removeClass('on');
          //$('.header').css({'z-index':'20'});
          $('body').css({overflow: 'visible'});
    
    
          $msk.hide();
        }
      });
      
    }// 브랜드
    
    
    
    
    
    if($('.relation_product').length){
        productSlide();
      }
    
    function productSlide(){
    
    
    
    
      var prd_width = window.innerWidth;
    
      if(prd_width <= 767){
        $('.relation_product .slide_wrap').removeClass('type5').addClass('type6');
      } 
      if(prd_width >= 768){
        $('.relation_product .slide_wrap').removeClass('type6').addClass('type5');
      }
    }
    
    $(window).on("resize", function() {
      if($('.side_bar').length){
        setSideBar();
      }
      if($('.relation_product').length){
        productSlide();
      }
    });
    
    
    
    function setSideBar() {
      var $sideBar_btn = $('.side_bar .shortcut a');
      var $sideWrap = $('.shortcut_def');
      var $sideBnr = $('.shortcut_act');
      var $side_area = $('body').innerWidth();
      var width = window.innerWidth;
    
      if (width > 1280) {
        $msk.hide();
        $sideBar_btn.off().on('click', function(e){
          $('.side_bar').addClass('on');
          e.preventDefault();
        });
      } else {
        if ($('.side_bar').hasClass('on')) {
          $msk.show();
          //$('.header').css({'z-index':'20'});
          $('body').css({overflow: 'visible'});
    
    
        }
    
        $sideBar_btn.off().on('click', function(e){
          if ($('.side_bar').hasClass('on')) {
            if(!$(".mobile_gnb").hasClass('on')){
              $msk.hide();
            }
            $('.side_bar').removeClass('on');
            $('.header').css({'z-index':'25'}); //171201 수정 z-index
            $('body').css({overflow: 'visible'}); 
          } else {
            $msk.show();
            $('.side_bar').addClass('on');
            //$('.header').css({'z-index':'10'});//171201 수정 z-index
            $('body').css({overflow: 'hidden'}); 
          }
          e.preventDefault();
        });
      }
    }
    
    
    // 라이브 > 빙그레 영상 > 상세 > 자막 
    if($('.video_info').length){
      $videoWrap = $('.video_info');
      $btnPlay =$('.video_info').find('.thum_video');
    
      $btnPlay.on('click',function(e){
        e.preventDefault();
        $(this).parents('div').parents('div.video_info').addClass('on');
        $(this).css({"display":"none"});
    
    
      });
    }
    
    // 히스토리 > 영상 
    if($('.visual_img').length){
      var $thum_vImg = $('.visual_img .thum_img').find('.btnPlay');
      $thum_vImg.on('click', function(e){
        e.preventDefault();
        $(this).remove();
      });
    }
    
    // 고객센터 > FAQ
    if($('.faq_list').length){
      var $anchor = $('.question').find('a');
      var $answer = $('.answer');
      $anchor.on('click',function(e){
        e.preventDefault();
        if(device =="mobile" ) {
          $(this).parents().addClass('active').siblings('li').removeClass('active');
        } else {
          $(this).parents('td').parents($answer).addClass('active').siblings('tr').removeClass('active');
        }
      });
    }
    
    // 1:1 문의 placeholder 적용
    if($('.plc_hld').length){
      $('input, textarea').placeholder();
    }
    
    
    /* 171129 수정 */
    if ($('.history_nav').length) {
      var $menu = $('.history_nav li'),
        $contents = $('.circle_box'),
        plusTop = $('.tab_menu').outerHeight(true) + $('.location_wrap').outerHeight(true);
    
      $menu.find('a').on('click', function(e) {
        var $thisNav = $(this),
          $navWrap = $thisNav.parent(),
          $target = $($thisNav.attr('href'));
    
        $navWrap.siblings().removeClass('on');
        $navWrap.addClass('on');
    
        $('body, html').stop().animate({scrollTop: $target.offset().top - plusTop}, 200);
    
    
    
        e.preventDefault();
      });
    
      $(window).on('scroll', function() {
        var scltop = $(window).scrollTop();
    
        $menu.each(function(idx, item){
          var $target = $($(this).find('a').attr('href')),
            targetTop = $target.offset().top;
    
          if (targetTop <= scltop + plusTop + 10) { 
            $menu.removeClass('on');
            $menu.eq(idx).addClass('on');
          }
    
          if (scltop == $(document).height() - $(window).height()) {
            $menu.removeClass('on');
            $menu.eq($menu.length - 1).addClass('on');
          }
        });
      });
    }
    
    });
    
    
    
  