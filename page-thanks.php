<?php get_header(); ?>
  <main>
    <!-- template -->
    <section class="template" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/cta.png);">
      <div class="template__wrapper wrapper">
        <h2 class="template__title">お問い合わせ・資料請求</h2>
      </div>
    </section>
    <!-- template close -->

    <!-- bread crumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!-- bread crumb close -->

    <!-- contact-thx -->
    <section class="contact-thx">
      <div class="contact-thx__wrapper wrapper">
        <h2 class="contact-thx__title"><?php the_title(); ?></h2>
        <p class="contact-thx__text">
          お問い合わせありがとうございました。
        </p>
      </div>
    </section>
    <!-- contact-thx close -->

<?php get_footer('contact'); ?>