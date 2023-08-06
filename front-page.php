<?php get_header(); ?>
<main>
  <div class="main-view">
    <div class="main-view__container">
      <div class="main-view__image">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide ">
              <div class="slide-img">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/main1-pc.webp" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/main1-sp.webp" alt="" width="2560" height="1700">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/main2-pc.webp" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/main2-sp.webp" alt="" width="2560" height="1700">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/main3-pc.webp" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/main3-sp.webp" alt="" width="2560" height="1700">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main-view__content">
        <h2 class="main-view__title">メインタイトルが入ります</h2>
        <p class="main-view__sub-title">サブタイトルが入ります</p>
      </div>
    </div>
  </div>

  <section class="top-news">
    <div class="inner top-news__container">
      <div class="top-news__warp">
        <div class="top-news__info">
          <time class="top-news__time" datetime="2020-07-20">2020.07.20</time>
          <div class="top-news__category">
            <div class="top-news__category-container">
              <p class="top-news__category-title">お知らせ</p>
            </div>
          </div>
        </div>
        <div class="top-news__title-container">
          <p class="top-news__title"><a href="<?= home_url(); ?>" class="top-news__title-link">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a></p>
        </div>
      </div>
      <div class="top-news__button-container">
        <a href="<?= home_url(); ?>" class="top-news__button">すべて見る</a>
      </div>
    </div>
  </section>

  <section class="section content">
    <div class="line line--content is-sp">
      <svg viewBox="0 0 375 681" fill="none" class="line__svg line__svg--content-sp" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.437685" y1="0.758274" x2="375.597" y2="680.046" stroke="#F9F871"/>
      </svg>
    </div>
    <div class="line line--content is-pc">
      <svg viewBox="0 0 1213 1213" fill="none" class="line__svg line__svg--content-pc" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.353553" y1="0.646447" x2="1212.33" y2="1212.63" stroke="#F9F871"/>
      </svg>
    </div>
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--left">Content</span>
      <span class="section__title-ja section__title-ja--content">事業内容</span>
    </h2>
    <div class="content__container">
      <div class="content__items">
        <div class="content__items-container">
          <div class="content__item">
            <a href="<?= home_url(); ?>" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content1-pc.webp" width="2560" height="1700" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content1-sp.webp" loading="lazy" width="376" height="336" alt="">
              </picture>
              <span class="content__item-text">経営理念ページへ</span>
            </a>
          </div>
          <div class="content__item">
            <a href="<?= home_url(); ?>" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content2-pc.webp" width="2560" height="1700" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content2-sp.webp" loading="lazy" width="376" height="336" alt="">
              </picture>
              <span class="content__item-text">理念1へ</span>
            </a>
          </div>
          <div class="content__item">
            <a href="<?= home_url(); ?>" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content3-pc.webp" width="2560" height="1700" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content3-sp.webp" loading="lazy" width="376" height="336" alt="">
              </picture>
              <span class="content__item-text">理念2へ</span>
            </a>
          </div>
          <div class="content__item">
            <a href="<?= home_url(); ?>" class="content__item-link">
              <picture>
                <source srcset="<?= get_template_directory_uri() ?>/images/top/content4-pc.webp" width="2560" height="1700" media="(min-width: 768px)">
                <img src="<?= get_template_directory_uri() ?>/images/top/content4-sp.webp" loading="lazy" width="376" height="336" alt="">
              </picture>
              <span class="content__item-text">理念3へ</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section works">
    <div class="line line--works is-sp">
      <svg viewBox="0 0 375 1399" class="line__svg line__svg--works-sp" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="375.483" y1="0.129801" x2="-0.419472" y2="1398.49" stroke="#F9F871"/>
      </svg>
    </div>
    
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--right">Works</span>
      <span class="section__title-ja section__title-ja--works">制作実績</span>
    </h2>
    <div class="media-text works__warp">
      <div class="pc-inner  media-text__container works__container">
        <div class="media-text__image works__image">
          <div class="swiper">
            
            <div class="swiper-wrapper">
              
              <div class="swiper-slide works-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/works1-pc.webp" width="750" height="552" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/works1-sp.webp" loading="lazy" width="750" height="552" alt="" >
                </picture>
              </div>
              <div class="swiper-slide works-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/works2-pc.webp" width="750" height="552" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/works2-sp.webp" loading="lazy" width="750" height="552" alt="">
                </picture>
              </div>
              <div class="swiper-slide works-slide">
                <picture>
                  <source srcset="<?= get_template_directory_uri() ?>/images/top/works3-pc.webp" width="750" height="552" media="(min-width: 768px)">
                  <img src="<?= get_template_directory_uri() ?>/images/top/works3-sp.webp" loading="lazy" width="750" height="552" alt="">
                </picture>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="media-text__contents works__contents">
          <div class="inner media-text__contents-container works__contents-container">
            <div class="media-text__title-container works__title-container">
              <h3 class="media-text__title works__title">メインタイトルが入ります。</h3>
            </div>
            <div class="media-text__text-container works__text-container">
              <p class="media-text__text works__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>

            <div class="media-text__button works__button">
              <a href="<?= home_url(); ?>" class="button">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section overview">
    <div class="line line--works is-pc">
      <svg viewBox="0 0 1212 1212" fill="none" class="line__svg line__svg--overview-pc" xmlns="http://www.w3.org/2000/svg">
        <line x1="0.646447" y1="1211.65" x2="1211.46" y2="0.837022" stroke="#F9F871"/>
      </svg>
    </div>
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--left">Overview</span>
      <span class="section__title-ja section__title-ja--overview">企業概要</span>
    </h2>

    <div class="media-text media-text--left">
      <div class="pc-inner  media-text__container media-text__container--left">
        <div class="media-text__image overview__image">
          <picture>
            <source srcset="<?= get_template_directory_uri() ?>/images/top/overview1-pc.webp" width="1114" height="522" media="(min-width: 768px)">
            <img src="<?= get_template_directory_uri() ?>/images/top/overview1-sp.webp" loading="lazy" width="750" height="522" alt="">
          </picture>
        </div>
        <div class="media-text__contents">
          <div class="inner media-text__contents-container">
            <div class="media-text__title-container">
              <h3 class="media-text__title">メインタイトルが入ります。</h3>
            </div>
            <div class="media-text__text-container">
              <p class="media-text__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>
            <div class="media-text__button">
              <a href="<?= home_url(); ?>" class="button">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog">
    <h2 class="inner section__title">
      <span class="section__title-en section__title-en--right">Blog</span>
      <span class="section__title-ja section__title-ja--blog">ブログ</span>
    </h2>
    <div class="inner blog__container">
      <div class="cards blog__cards">
        <?php
          // WP_Queryの引数を設定
          $args = array(
              'post_type' => 'post',   // 投稿タイプは通常の投稿
              'posts_per_page' => 3,  // 3件の投稿を表示
            );
            $the_query = new WP_Query( $args );
        ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <article class="card cards__card new-icon">
            <a href="<?php the_permalink(); ?>" class="card__link">
              <div class="card__image">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail( 'full', array( 'loading' => 'lazy', 'width' => '770', 'height' => '466', 'alt' => get_the_title() ) ); ?>
                <?php else : ?>
                  <img src="<?= get_template_directory_uri() ?>/images/top/blog2.webp" loading="lazy" width="770" height="466" alt="">
                <?php endif; ?>
              </div>
              <div class="card__contents">
                <dl class="card__contents-container">
                  <dt class="card__title"><?php the_title(); ?></dt>
                  <dd class="card__description"><?php the_excerpt(); ?></dd>
                </dl>
                <div class="card__info">
                  <span class="card__category">
                    <?php
                      $category = get_the_category(); 
                      if($category) {
                        echo esc_html($category[0]->name);
                      }
                    ?>
                  </span>
                  <time class="card__time" datetime="<?php echo get_the_date('Y.m.d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
              </div>
            </a>
          </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
      <div class="blog__button">
        <a href="<?= home_url(); ?>" class="button">詳しく見る</a>
      </div>
    </div>
  </section>

  <section class="section contact">
    <div class="inner contact__container">
      <h2 class="section__title">
        <span class="section__title-en section__title-en--left">Contact</span>
        <span class="section__title-ja section__title-ja--contact">お問い合わせ</span>
      </h2>
      <div class="contact__text-container">
        <p class="contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>

      <div class="contact__button">
        <a href="<?= home_url(); ?>" class="button button--contact">お問い合わせへ</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>