<?php get_header(); ?>
<main>
  <!-- mv -->
  <section class="mv" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/mv.png);">
    <div class="mv__wrapper wrapper">
      <h1 class="mv__title">TOEFL対策はEngress</h1>
      <p class="mv__text">
        日本人へのTOEFL指導歴豊かな講師陣の
        <br>
        コーチング型TOEFLスクール
      </p>
      <div class="mv__column">
        <a class="mv__btn btn" href="<?php echo home_url('contact'); ?>">資料請求</a>
        <a class="mv__contact link-hover" href="<?php echo home_url('contact'); ?>">お問い合わせ</a>
      </div>
    </div>
  </section>
  <!-- mv close -->

  <!-- solution -->
  <section class="solution">
    <div class="solution__wrapper wrapper">
      <h2 class="solution__title">TOEFL学習でこんな悩みありませんか？</h2>
      <ul class="solution__items">
        <li class="solution__item">
          勉強の習慣が
          <br>
          身についていない
        </li>
        <li class="solution__item">
          勉強しているはず
          <br>
          なのに点数が伸びない
        </li>
        <li class="solution__item">
          正しい勉強方法が
          <br>
          わからない
        </li>
      </ul>
      <div class="solution__card-wrapper">
        <div class="solution__card">
          <h3 class="solution__heading">
            Engressは
            <br>
            <span class="solution__yellow-line">TOEFLに特化したスクール</span>です
          </h3>
          <p class="solution__text">
            完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で
            <br>
            TOEFLの苦手分野を克服します。
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- solution close -->

  <!-- key -->
  <section class="key">
    <div class="key__wrapper wrapper">
      <h2 class="key__title">TOEFL対策に特化したEngress3つの強み</h2>
      <div class="key__card-wrapper">
        <div class="key__card">
          <div class="key__body">
            <div class="key__label">特徴 1</div>
            <div class="key__heading">
              TOEFLに最適化された
              <br>
              無駄のないカリキュラム
            </div>
            <div class="key__detail">
              TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
            </div>
          </div>
          <figure class="key__img-wrapper">
            <img class="key__img" src="<?php echo get_template_directory_uri(); ?>/img/feature01.png" alt="特徴1">
          </figure>
        </div>
        <div class="key__card key--reverse">
          <div class="key__body">
            <div class="key__label">特徴 2</div>
            <div class="key__heading">
              日本人指導歴10年以上の
              <br>
              経験豊富な講師陣
            </div>
            <div class="key__detail">
              Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
            </div>
          </div>
          <figure class="key__img-wrapper">
            <img class="key__img" src="<?php echo get_template_directory_uri(); ?>/img/feature02.png" alt="特徴2">
          </figure>
        </div>
        <div class="key__card">
          <div class="key__body">
            <div class="key__label">特徴 3</div>
            <div class="key__heading">
              平均3ヶ月でTOEFL iBT20点アップ
            </div>
            <div class="key__detail">
              Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
            </div>
          </div>
          <figure class="key__img-wrapper">
            <img class="key__img" src="<?php echo get_template_directory_uri(); ?>/img/feature03.png" alt="特徴3">
          </figure>
        </div>
      </div>
      <div class="key__plan-card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/price.png);">
        <h3 class="key__plan-heading">Engressの料金プランはこちら</h3>
        <a class="key__btn btn" href="<?php echo home_url('price'); ?>">料金を見てみる</a>
      </div>
    </div>
  </section>
  <!-- key close -->

  <!-- interview -->
  <section class="interview">
    <div class="interview__wrapper wrapper">
      <h2 class="interview__title">TOEFL成功事例</h2>
      <?php $args = array(
        'post_type' => 'case',
        'posts_per_page' => 1,
      ); ?>
      <?php $query = new WP_Query($args); ?>
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div class="interview__items">
            <div class="interview__item">
              <h3 class="interview__heading"><?php the_field('left__outcome'); ?></h3>
              <div class="interview__thumbnail thumbnail" style="background-image: url(<?php the_field('left__picture'); ?>);"></div>
              <div class="interview__box">
                <div class="interview__job"><?php the_field('left__job'); ?></div>
                <div class="interview__name"><?php the_field('left__name'); ?></div>
              </div>
              <div class="interview__result"><?php the_field('left__score'); ?></div>
            </div>
            <div class="interview__item">
              <h3 class="interview__heading"><?php the_field('middle__outcome'); ?></h3>
              <div class="interview__thumbnail thumbnail" style="background-image: url(<?php the_field('middle__picture'); ?>);"></div>
              <div class="interview__box">
                <div class="interview__job"><?php the_field('middle__job'); ?></div>
                <div class="interview__name"><?php the_field('middle__name'); ?></div>
              </div>
              <div class="interview__result"><?php the_field('middle__score'); ?></div>
            </div>
            <div class="interview__item">
              <h3 class="interview__heading"><?php the_field('right__outcome'); ?></h3>
              <div class="interview__thumbnail thumbnail" style="background-image: url(<?php the_field('right__picture'); ?>);"></div>
              <div class="interview__box">
                <div class="interview__job"><?php the_field('right__job'); ?></div>
                <div class="interview__name"><?php the_field('right__name'); ?></div>
              </div>
              <div class="interview__result"><?php the_field('right__score'); ?></div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else : ?>
        <p class="error">記事が見つかりませんでした。</p>
      <?php endif; ?>
    </div>
  </section>
  <!-- interview close -->

  <!-- flow -->
  <section class="flow">
    <div class="flow__wrapper wrapper">
      <h2 class="flow__title">ご利用の流れ</h2>
      <ul class="flow__items">
        <li class="flow__item">
          <div class="flow__number">01</div>
          <div class="flow__long">
            <div class="flow__left">お問い合わせ</div>
            <div class="flow__right">まずはフォームまたはお電話からお申し込みください。
            </div>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__number">02</div>
          <div class="flow__long">
            <div class="flow__left">ヒアリング</div>
            <div class="flow__right">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。
            </div>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__number">03</div>
          <div class="flow__long">
            <div class="flow__left">学習プランのご提供</div>
            <div class="flow__right">目標達成のために最適な学習プランをご提案致します。
            </div>
          </div>
        </li>
        <li class="flow__item">
          <div class="flow__number">04</div>
          <div class="flow__long">
            <div class="flow__left">ご入会</div>
            <div class="flow__right">お申込み完了後、レッスンがスタートします。
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- flow close -->

  <!-- question -->
  <section class="question">
    <div class="question__wrapper wrapper">
      <h2 class="question__title">よくある質問</h2>
      <div class="question__menu">
        <h4 class="question__menu-title js-accordion-title">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
        <div class="question__content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
        <h4 class="question__menu-title js-accordion-title">教材はオリジナルのものを使用しているのでしょうか？</h4>
        <div class="question__content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
        <h4 class="question__menu-title js-accordion-title">講師に日本人はいますか？</h4>
        <div class="question__content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
        <h4 class="question__menu-title js-accordion-title">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
        <div class="question__content">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</div>
      </div>
    </div>
  </section>
  <!-- question close -->

  <!-- post -->
  <section class="post">
    <div class="post__wrapper wrapper">
      <div class="post__flex">
        <div class="post__blog">
          <h2 class="post__title">ブログ</h2>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('post__blog-card'); ?>>
                <div class="post__category"><?php
                                            $category = get_the_category();
                                            echo $category[0]->cat_name;
                                            ?></div>
                <a class="post__link" href="<?php the_permalink(); ?>"></a>
                <div class="post__thumbnail thumbnail" style="background-image: url(<?php if (has_post_thumbnail()) {
                                                                                      $image_id = get_post_thumbnail_id();
                                                                                      $image_url = wp_get_attachment_image_src($image_id, true);
                                                                                      echo $image_url[0];
                                                                                    } else {
                                                                                      echo get_bloginfo('template_directory') . '/img/unnamed.png';
                                                                                    } ?>);"></div>
                <div class="post__blog-body">
                  <h3 class="post__blog-title">
                    <?php
                    if (mb_strlen($post->post_title) > 20) {
                      $title = mb_substr($post->post_title, 0, 20);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h3>
                  <p class="post__blog-data"><?php the_time('Y年m月d日'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p class="error">記事が見つかりませんでした。</p>
          <?php endif; ?>
        </div>
        <div class="post__news">
          <h2 class="post__title">お知らせ</h2>
          <?php $args = array(
            'post_type' => 'news',
            'post_per_page' => 3,
          ) ?>
          <?php $query = new WP_Query($args); ?>
          <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class('post__news-card'); ?>>
                <a class="post__link" href="<?php the_permalink(); ?>"></a>
                <p class="post__news-data"><?php the_time('Y年m月d日'); ?></p>
                <h4 class="post__news-title">
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
            <?php endwhile;
            wp_reset_postdata(); ?>
          <?php else : ?>
            <p class="error">記事が見つかりませんでした。</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- post close -->

  <?php get_footer(); ?>