<?php
//page用のCSS
function page_styles() {
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
  if (is_page(array('inquiry'))) return; 
    wp_deregister_script('google-recaptcha');
  }, 100);  

// 投稿更新日順表示
function post_modified($query) {
  if ($query -> is_main_query()) {
    $query -> set('orderby', 'modified');
  }
}

add_action('pre_get_posts', 'post_modified');

// お問合せバリデーション
add_filter('wpcf7_validate', 'wpcf7_validate_spam_message', 10, 2 );
function wpcf7_validate_spam_message( $result, $tag ) {
$value = str_replace(array(PHP_EOL,''), "", esc_attr($_POST['your-message']));
if (!empty($value)) {
if (preg_match('/[$ !-. :-? $ $]/', $value)) {
$result['valid'] = false;
$result['reason'] = array('your-message' => '記号は入力できません');
}
}
return $result;
}