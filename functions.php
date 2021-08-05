<?php

add_theme_support('title-tag');

add_action('init', function () {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function ($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = true;
  return $init;
});


function my_scripts()
{
  wp_enqueue_script('main-js', get_theme_file_uri('/js/script.js'));
}
add_action('wp_enqueue_scripts', 'my_scripts');

function my_style()
{
  wp_enqueue_style('main-css', get_theme_file_uri('/css/style.css'));
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css');
}
add_action('wp_enqueue_scripts', 'my_style');
