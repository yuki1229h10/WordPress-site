<?php get_header(); ?>
<main>
  <!-- template -->
  <section class="template" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/cta.png);">
    <div class="template__wrapper wrapper">
      <h2 class="template__title"><?php the_title(); ?></h2>
    </div>
  </section>
  <!-- template close -->

  <!-- bread crumb -->
  <?php get_template_part('template-parts/breadcrumb'); ?>
  <!-- bread crumb close -->

  <!-- contact -->
  <section class="contact">
    <div class="contact__wrapper wrapper">
      <p class="contact__text">
        弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
      </p>
      <?php the_content(); ?>
    </div>
  </section>
  <!-- contact close -->

  <?php get_footer('contact'); ?>