<?php get_header(); ?>
<main>
  <!-- bread crumb -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- bread crumb close -->

  <!-- sing-post -->
  <section class="sing-post">
    <div class="sing-post__wrapper wrapper">
      <div class="sing-post__flex">
        <div class="sing-post__left">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('sing-post__main'); ?>>
                <div class="sing-post__category post__category"><?php
                                                                $category = get_the_category();
                                                                echo $category[0]->cat_name;
                                                                ?></div>
                <h2 class="sing-post__title"><?php the_title(); ?>
                </h2>
                <div class="sing-post__icons">
                  <p class="sing-post__data"><?php the_time('Y年m月d日'); ?>
                  </p>
                </div>
                <div class="sing-post__thumbnail thumbnail" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                            $image_id = get_post_thumbnail_id();
                                                                                            $image_url = wp_get_attachment_image_src($image_id, true);
                                                                                            echo $image_url[0];
                                                                                          } else {
                                                                                            echo get_bloginfo('template_directory') . '/img/unnamed.png';
                                                                                          } ?>);"></div>
                <div class="sing-post__text">
                  <?php the_content(); ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="sing-post__rec">
            <h3 class="sing-post__rec-title">おすすめの記事
            </h3>
            <?php
            $tag_posts = get_posts(array(
              'post_type' => 'post',
              'tag'    => 'pickup',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC'
            ));
            global $post;
            if ($tag_posts) : foreach ($tag_posts as $post) : setup_postdata($post); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('sing-post__rec-card post__blog-card'); ?>>
                  <div class="post__category"><?php
                                              $category = get_the_category();
                                              echo $category[0]->cat_name;
                                              ?></div>
                  <a class="post__link" href="<?php the_permalink(); ?>"></a>
                  <div class="sing-post__rec-thumbnail post__thumbnail thumbnail" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                                                  $image_id = get_post_thumbnail_id();
                                                                                                                  $image_url = wp_get_attachment_image_src($image_id, true);
                                                                                                                  echo $image_url[0];
                                                                                                                } else {
                                                                                                                  echo get_bloginfo('template_directory') . '/img/unnamed.png';
                                                                                                                } ?>);"></div>
                  <div class="post__blog-body">
                    <p class="sing-post__rec-data post__blog-data"><?php the_time('Y年m月d日'); ?></p>
                    <h3 class="sing-post__rec-heading post__blog-title">
                      <?php
                      if (mb_strlen($post->post_title) > 20) {
                        $title = mb_substr($post->post_title, 0, 20);
                        echo $title . '...';
                      } else {
                        echo $post->post_title;
                      }
                      ?>
                    </h3>
                  </div>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
              <p class="error">記事が見つかりませんでした。</p>
            <?php endif;
            wp_reset_postdata(); ?>
          </div>
        </div>
        <aside class="sing-post__right">
          <?php get_sidebar('articles'); ?>
          <?php get_sidebar('categories'); ?>
        </aside>
      </div>
    </div>
  </section>
  <!-- sing-post close -->

  <?php get_footer(); ?>