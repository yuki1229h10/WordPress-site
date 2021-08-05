<!DOCTYPE html>
<html lang="ja" prefix="og: サイトURL#">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header>
    <div class="header">
      <a class="header__hm-btn" id="header__hm-btn">
        <div></div>
        <div></div>
        <div></div>
      </a>
      <nav class="header__hm-menu" id="header__hm-menu">
        <ul class="header__hm-list">
          <li class="header__hm-item header__hm-logo-wrapper">
            <a class="header__hm-link header__logo-link link-hover" href="<?php echo home_url(); ?>">
              <img class="header__hm-logo header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ">
            </a>
          </li>
          <li class="header__hm-item"><a href="<?php echo home_url(); ?>" class="header__hm-link link-hover">ホーム</a></li>
          <li class="header__hm-item"><a href="<?php echo home_url('news'); ?>" class="header__hm-link link-hover">お知らせ</a></li>
          <li class="header__hm-item"><a href="<?php echo home_url('blog'); ?>" class="header__hm-link link-hover">ブログ</a></li>
          <li class="header__hm-item"><a href="<?php echo home_url('price'); ?>" class="header__hm-link link-hover">コース・料金</a></li>
          <li class="header__hm-item"><a href="<?php echo home_url('contact'); ?>" class="header__hm-link header__contact-yellow link-hover">資料請求</a></li>
          <li class="header__hm-item"><a href="<?php echo home_url('contact'); ?>" class="header__hm-link header__contact-blue link-hover">お問い合わせ</a></li>
        </ul>
      </nav>
      <div class="header__inner">
        <p class="header__logo-wrapper">
          <a class="link-hover" href="<?php echo home_url(); ?>">
            <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ">
          </a>
        </p>
        <nav class="header__list">
          <ul class="header__left-list">
            <li class="header__item"><a class="header__link link-hover" href="<?php echo home_url(); ?>">ホーム</a></li>
            <li class="header__item"><a class="header__link link-hover" href="<?php echo home_url('news'); ?>">お知らせ</a></li>
            <li class="header__item"><a class="header__link link-hover" href="<?php echo home_url('blog'); ?>">ブログ</a></li>
            <li class="header__item"><a class="header__link link-hover" href="<?php echo home_url('price'); ?>">コース・料金</a></li>
          </ul>
          <ul class="header__right-list">
            <li class="header__column">
              <p class="header__data">平日08:00-20:00</p>
              <p class="header__number"><i class="fas fa-phone-square"></i>0123-456-7890</p>
            </li>
            <li class="header__contact yellow"><a class="header__contact-link header__contact-yellow link-hover" href="<?php echo home_url('contact'); ?>">資料請求</a></li>
            <li class="header__contact blue"><a class="header__contact-link header__contact-blue link-hover" href="<?php echo home_url('contact'); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>