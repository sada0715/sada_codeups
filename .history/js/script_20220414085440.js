
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
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

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  // ドロワーメニュー
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').removeClass('is-open');
      $(this).removeClass('is-open');
    } else {
      $('.js-drawer-menu').addClass('is-open');
      $(this).addClass('is-open')
    }
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  // ヘッダー透過、追従時透過しない
  var mvh = $('.js-header-height').height();

  $(window).scroll(function() {
    var top = $(window).scrollTop();
    if (mvh < top) {
      $('.header').css('background-color', 'rgba(0,0,0,1)');
      } else {
      $('.header').css('background-color', 'rgba(0,0,0,0.5)');
    }
  });

  // フォームバリデーション
  $('.js-form-error').hide();

  $('.js-submit-btn').click(function() {
    

    return false;
  });
});

// Swiper
// js-slider1
var slider1 = new Swiper('.js-slider1', {
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
});

// slider2
var slider2 = new Swiper('.js-slider2', {
  effect: 'slide',
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
  },
  autoplay: {
    delay: 000,
    disableOnInteraction: false,
  },
  speed: 3000,
});

// slider3
var slider3 = new Swiper('.js-slider3', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  loopedSlides: 8, //スライドの枚数と同じ値を指定
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
});

// slider4
var slider4 = new Swiper('.js-slider4', {
  slidesPerView: 'auto',
  spaceBetween: 10,
  centeredSlides: true,
  loop: true,
  slideToClickedSlide: true,
});

//メインとサムネイルを紐づける
slider3.controller.control = slider4;
slider4.controller.control = slider3;
