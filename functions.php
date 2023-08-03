<?php
function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
  // swiper cssの読み込み
  wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', false);

  // スタイルシートの読み込み
  wp_enqueue_style('my', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');

  // swiper scriptの読み込み
  wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);

  // jsの読み込み
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

function dequeue_jquery() { 
  if (!is_admin()) {
      wp_deregister_script('jquery');
  }
}
add_action('wp_enqueue_scripts', 'dequeue_jquery');
