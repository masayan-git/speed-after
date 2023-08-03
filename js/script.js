document.addEventListener('DOMContentLoaded', (event) => {
  // ボタンの表示設定
  const topBtn = document.querySelector('#js-to-top');
  topBtn.style.display = "none";

  window.addEventListener('scroll', () => {
    // 指定px以上のスクロールでボタンを表示
    if (window.scrollY > 70) {
      topBtn.style.display = "";
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.style.display = "none";
    }
  });

  topBtn.addEventListener('click', (event) => {
    event.preventDefault();
    window.scrollTo({top: 0, behavior: 'smooth'});
  });

  // Swiper
  const swiper1 = new Swiper('.swiper-container', {
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
  });

  const swiper2 = new Swiper('.swiper', {
    direction: 'horizontal',
    loop: true,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });

  // ハンバーガーメニュー
  const header = document.querySelector('#js-header');
  const hamburger = document.querySelector('#js-hamburger');
  const drawerBackground = document.querySelector('#js-drawer-background');

  hamburger.addEventListener('click', (event) => {
    header.classList.toggle('is-active');
    hamburger.classList.toggle('is-active');
    drawerBackground.classList.toggle('is-active');
  });

  drawerBackground.addEventListener('click', (event) => {
    header.classList.remove('is-active');
    hamburger.classList.remove('is-active');
    drawerBackground.classList.remove('is-active');
  });

  // 1024px以上でハンバーガーメニューを強制非表示
  const mediaQueryPc = window.matchMedia("(min-width: 1024px)");

  const listener = (e) => {
    if(e.matches) {
      header.classList.remove('is-active');
      hamburger.classList.remove('is-active');
      drawerBackground.classList.remove('is-active');
    } 
  };

  mediaQueryPc.addEventListener("change", listener);
  listener(mediaQueryPc);
});
