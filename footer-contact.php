<footer>
  <div class="footer">
    <div class="footer__wrapper wrapper">
      <nav class="footer__menu">
        <ul class="footer__list">
          <li class="footer__item"><a class="footer__link link-hover" href="<?php echo home_url(); ?>">ホーム</a></li>
          <li class="footer__item"><a class="footer__link link-hover" href="<?php echo home_url('news'); ?>">お知らせ</a></li>
          <li class="footer__item"><a class="footer__link link-hover" href="<?php echo home_url('blog'); ?>">ブログ</a></li>
          <li class="footer__item"><a class="footer__link link-hover" href="<?php echo home_url('price'); ?>">コース・料金</a></li>
        </ul>
        <p class="footer__logo-wrapper">
          <a class="link-hover" href="<?php echo home_url(); ?>">
            <img class="footer__img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ">
          </a>
        </p>
      </nav>
      <div class="footer__column">
        <p class="footer__number">0123-456-7890</p>
        <p class="footer__data">平日08:00〜20:00</p>
      </div>
    </div>
    <div class="footer__copy">
      <div class="footer__copy-wrapper wrapper">
        <small class="footer__text">© 2020 Engress.</small>
      </div>
    </div>
  </div>
</footer>
</main>
<?php wp_footer(); ?>
</body>

</html>