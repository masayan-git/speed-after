
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('#js-to-top');
  topBtn.hide();

   // ボタンの表示設定
   $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  topBtn.on('click', function(){
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });



  let swipeOption = {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    }
  }
  new Swiper('.swiper-container', swipeOption);


  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    autoplay: {
      delay: 5000,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

  });

  

  var $header = $('#js-header') 
  var $hamburger = $('#js-hamburger')
  var $drawerBackground = $('#js-drawer-background');
  const mediaQueryPc = window.matchMedia("(min-width: 1024px)");

  $('#js-hamburger').on('click', function(e) {
    $header.toggleClass('is-active');
    $hamburger.toggleClass('is-active');
    $drawerBackground.toggleClass('is-active');
  });

  $('#js-drawer-background').on('click', function() {
    $header.removeClass('is-active');
    $hamburger.removeClass('is-active');
    $drawerBackground.removeClass('is-active');
  });

  const listener = (e) => {
    if(mediaQueryPc.matches) {
      $header.removeClass('is-active');
      $hamburger.removeClass('is-active');
      $drawerBackground.removeClass('is-active');
    } 
  };

  mediaQueryPc.addEventListener("change", listener);

  listener(mediaQueryPc);

});
