<div class="sing-post__side">
  <div class="sing-post__side-title">関連記事</div>
  <div class="sing-post__mb-side-wrapper">
    <?php
    $categories = get_the_category($post->ID);
    $category_ID = array();
    foreach ($categories as $category) :
      array_push($category_ID, $category->cat_ID);
    endforeach;
    $args = array(
      'post__not_in' => array($post->ID),
      'posts_per_page' => 3,
      'category__in' => $category_ID,
      'orderby' => 'rand',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
    ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('sing-post__side-card post__blog-card'); ?>>
          <a class="post__link" href="<?php the_permalink(); ?>"></a>
          <div class="sing-post__side-thumbnail post__thumbnail thumbnail" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                                          $image_id = get_post_thumbnail_id();
                                                                                                          $image_url = wp_get_attachment_image_src($image_id, true);
                                                                                                          echo $image_url[0];
                                                                                                        } else {
                                                                                                          echo get_bloginfo('template_directory') . '/img/unnamed.png';
                                                                                                        } ?>);"></div>
          <div class="sing-post__side-body post__blog-body">
            <h3 class="sing-post__side-heading post__blog-title">
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
      <?php endwhile;
      wp_reset_postdata(); ?>
    <?php else : ?>
      <p class="error">記事が見つかりませんでした。</p>
    <?php endif; ?>
  </div>
</div>