<?php get_header(); ?>
<main>
  <!-- bread crumb -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- bread crumb close -->

  <!-- sing-news -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <section class="sing-news">
        <div class="sing-news__wrapper wrapper">
          <h2 class="sing-news__title">
            <?php the_title(); ?>
          </h2>
          <p class="sing-news__data"><?php the_time('Y年m月d日'); ?></p>
          <hgroup class="sing-news__column">
            <h3 class="sing-news__heading">見出し1</h3>
            <h4 class="sing-news__text"><?php the_content(); ?></h4>
          </hgroup>
          <hgroup class="sing-news__column">
            <h3 class="sing-news__heading sing-news__heading-two">見出し2</h3>
            <h4 class="sing-news__text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</h4>
          </hgroup>
          <div class="sing-news__card">
            <p class="sing-news__quote">
              引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
          <div class="sing-news__thumbnail thumbnail" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                      $image_id = get_post_thumbnail_id();
                                                                                      $image_url = wp_get_attachment_image_src($image_id, true);
                                                                                      echo $image_url[0];
                                                                                    } else {
                                                                                      echo get_bloginfo('template_directory') . '/img/unnamed.png';
                                                                                    } ?>);"></div>
          <ul class="sing-news__list">
            <li class="sing-news__item">リストリストリストリストリスト</span></li>
            <li class="sing-news__item">リストリストリストリストリストリストリストリストリストリスト</span></li>
            <li class="sing-news__item">リストリストリストリストリストリストリストリストリストリストリストリストリストリストリスト</span></li>
          </ul>
          <a class="sing-news__link link-hover" href="<?php echo home_url('news'); ?>">テキストリンク</a>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
  <!-- sing-news close -->

  <?php get_footer(); ?>