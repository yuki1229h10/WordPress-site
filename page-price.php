<?php get_header(); ?>
  <main>
    <!-- template -->
    <section class="template" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/plan@2x.png);">
      <div class="template__wrapper wrapper">
        <h2 class="template__title"><?php the_title(); ?></h2>
      </div>
    </section>
    <!-- template close -->

    <!-- bread crumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!-- bread crumb close -->

    <!-- price -->
    <section class="price">
      <div class="price__wrapper wrapper">
        <h2 class="price__title">料金体系</h2>
        <div class="price__box-list">
          <div class="price__box">入会金 39,800円</div>
          <div class="price__box price__plus">+</div>
          <div class="price__box">月額費用</div>
        </div>
        <p class="price__text">
        Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
        </p>
        <h3 class="price__title">料金表</h3>
        <ul class="price__list-wrapper">
          <li class="price__list">
            <div class="price__plan">基礎プラン</div>
            <div class="price__body">
              <div class="price__yen">
              <?php the_field('basic'); ?>
                <br>
                <span class="price__yen-small">*月額（税抜価格）</span>
              </div>
              <ul class="price__list-inner">
                <li class="price__item">
                  <i class="fas fa-check"></i>カリキュラム作成
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>TOEFL学習サポート
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>週一回のビデオMTG
                </li>
              </ul>
            </div>
          </li>
          <li class="price__list">
            <div class="price__plan">演習プラン</div>
            <div class="price__body">
              <div class="price__yen">
                <?php the_field('exercise'); ?>
                <br>
                <span class="price__yen-small">*月額（税抜価格）</span>
              </div>
              <ul class="price__list-inner">
                <li class="price__item">
                  <i class="fas fa-check"></i>カリキュラム作成
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>TOEFL学習サポート
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>週一回のビデオMTG
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>月二回の模試（解説 付き）
                </li>
              </ul>
            </div>
          </li>
          <li class="price__list">
            <div class="price__plan price__plan-recommend">
              おすすめ
              <br>
              志望校対策プラン
            </div>
            <div class="price__body">
              <div class="price__yen price__yen-recommend">
              <?php the_field('recommended'); ?>
                <br>
                <span class="price__yen-small">*月額（税抜価格）</span>
              </div>
              <ul class="price__list-inner">
                <li class="price__item">
                  <i class="fas fa-check"></i>カリキュラム作成
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>TOEFL学習サポート
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>週一回のビデオMTG
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>月二回の模試（解説 付き）
                </li>
                <li class="price__item">
                  <i class="fas fa-check"></i>週一の英語面接対策
                </li>
              </ul>
            </div>
          </li>
          <li class="price__list">
            <div class="price__plan">フレックスプラン</div>
            <div class="price__body">
              <div class="price__yen">
              <?php the_field('special'); ?>
                <br>
                <span class="price__yen-small">*月額（税抜価格）</span>
              </div>
              <ul class="price__list-inner">
                <li class="price__item price__item-center">
                  ＊別途ご相談ください
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- price close -->

  <?php get_footer(); ?>