<?php get_header(); ?>
<main>
  <!-- template -->
  <section class="template" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/news@2x.png);">
    <div class="template__wrapper wrapper">
      <h2 class="template__title">お知らせ</h2>
    </div>
  </section>
  <!-- template close -->

  <!-- bread crumb -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- bread crumb close -->

  <!-- spe-news -->
  <section class="spe-news">
    <div class="spe-news__wrapper wrapper">
      <h2 class="spe-news__title">お知らせ一覧</h2>
      <div class="spe-news__card-wrapper post__news">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="spe-news__bb-wrapper">
              <div id="post-<?php the_ID(); ?>" <?php post_class('spe-news__card post__news-card'); ?>>
                <a class="post__link" href="<?php the_permalink(); ?>"></a>
                <p class="spe-news__data post__news-data"><?php the_time('Y年m月d日'); ?></p>
                <h4 class="spe-news__heading post__news-title">
                  <?php
                  if (mb_strlen($post->post_title) > 20) {
                    $title = mb_substr($post->post_title, 0, 20);
                    echo $title . '...';
                  } else {
                    echo $post->post_title;
                  }
                  ?>
                </h4>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p class="error">記事が見つかりませんでした。</p>
        <?php endif; ?>
        <?php wp_pagenavi(); ?>
      </div>
    </div>
  </section>
  <!-- spe-news close -->

  <?php get_footer(); ?>