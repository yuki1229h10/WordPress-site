<?php get_header(); ?>
<main>
  <!-- template -->
  <section class="template" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/blog@2x.png);">
    <div class="template__wrapper wrapper">
      <h2 class="template__title">ブログ</h2>
    </div>
  </section>
  <!-- template close -->

  <!-- bread crumb -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- bread crumb close -->

  <!-- spe-blog -->
  <section class="spe-blog">
    <div class="spe-blog__wrapper wrapper">
      <h2 class="spe-blog__title">新着一覧</h2>
      <div class="spe-blog__card-wrapper post__blog">
        <div class="spe-blog__bb-wrapper">
          <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged,
          );
          $myposts = new WP_Query($args);
          if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post();
          ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('spe-blog__card post__blog-card'); ?>>
                <div class="spe-blog__category post__category"><?php
                                                                $category = get_the_category();
                                                                echo $category[0]->cat_name;
                                                                ?></div>
                <a class="post__link" href="<?php the_permalink(); ?>"></a>
                <div class="spe-blog__thumbnail thumbnail" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                          $image_id = get_post_thumbnail_id();
                                                                                          $image_url = wp_get_attachment_image_src($image_id, true);
                                                                                          echo $image_url[0];
                                                                                        } else {
                                                                                          echo get_bloginfo('template_directory') . '/img/unnamed.png';
                                                                                        } ?>);">
                </div>
                <div class="spe-blog__body post__blog-body">
                  <p class="spe-blog__data post__blog-data"><?php the_time('Y年m月d日'); ?></p>
                  <h3 class="spe-blog__heading post__blog-title">
                    <?php
                    if (mb_strlen($post->post_title) > 20) {
                      $title = mb_substr($post->post_title, 0, 20);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h3>
                  <p class="spe-blog__text"><?php echo get_the_excerpt(); ?></p>
                </div>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>
        </div>
        <?php
        if (function_exists('wp_pagenavi')) {
          wp_pagenavi(array('query' => $myposts));
        }
        ?>
        <?php if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
        } ?>
      </div>
    </div>
  </section>
  <!-- spe-blog close -->

  <?php get_footer(); ?>