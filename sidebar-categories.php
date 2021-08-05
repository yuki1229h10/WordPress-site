<div class="sing-post__side">
  <div class="sing-post__side-title">カテゴリー</div>
  <ul class="sing-post__side-list">
    <?php
    $args = array(
      'title_li' => '',
    );
    wp_list_categories($args);
    ?>    
  </ul>
</div>