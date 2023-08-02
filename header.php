<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>speed-before</title>
  <meta name="description" content="" />
  <meta name="keywords" content="なし" />
  <meta name="robots" content="noindex">

  <!-- css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- JavaScript -->

  <?php wp_head(); ?>
</head>
<body>
  
<header class="header">
  <div class="header__container">
    <!-- <h1 class="header__title"><a href="" class="header__title-link">CodeUps</a></h1> -->
    <h1 class="header__title"><a href="" class="header__title-link">Test</a></h1>
    
    <nav class="header__nav" id="js-header">
      <ul class="header__list drawer-header__list">
        <li class="header__item header__item--is-active"><a href="" class="header__link">トップ</a></li>
        <li class="header__item"><a href="" class="header__link">お知らせ</a></li>
        <li class="header__item"><a href="" class="header__link">事業内容</a></li>
        <li class="header__item"><a href="" class="header__link">制作実績</a></li>
        <li class="header__item"><a href="" class="header__link">企業概要</a></li>
        <li class="header__item"><a href="" class="header__link">ブログ</a></li>
        <li class="header__item"><a href="" class="header__link header__link--contact">お問い合わせ</a></li>
      </ul>
    </nav>
    <button type="button" class="drawer-hamburger" id="js-hamburger">
      <span class="drawer-hamburger__line"></span>
      <span class="drawer-hamburger__line"></span>
      <span class="drawer-hamburger__line"></span>
    </button>
  </div>
  <div class="drawer-header-background" id="js-drawer-background"></div>

</header>