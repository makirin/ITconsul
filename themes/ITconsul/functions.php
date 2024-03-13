<?php
function page_styles() {
  //page用のCSS
  if (is_page(array('inquiry', 'company-info', 'news', 'privacy'))) {
    wp_enqueue_style('page-style', get_template_directory_uri() . '/styles/page-style.css',array(), '1.0.0');
  }
}

function my_script() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js');
  wp_enqueue_script('main_script.js', get_template_directory_uri() .'/js/main_script.js', array('jquery'), '1.0.0'. true);  
  wp_enqueue_style('main-style', get_template_directory_uri() . '/styles/main_style.css',array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'page_styles');
add_action('wp_enqueue_scripts', 'my_script');

// recaptcha
add_action('wp_enqueue_scripts', function() {
$page_list = [
  'inquiry', //お問合せフォーム
];
if (is_page($page_list)) return;
wp_deregister_script('google-recaptcha');}, 100);