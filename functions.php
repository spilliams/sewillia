<?php
/**
 * @package WordPress
 * @subpackage sewillia
 */

automatic_feed_links();

if ( function_exists('register_sidebar') ){
  register_sidebar(array(
    'id' => 'nav-menu',
    'name' => __( 'Nav Menu', $text_domain ),
    'description' => __( 'This goes in the nav menu on the right side.', $text_domain ),
    'before_widget' => '',
    'after_widget' => ''
  ));
  register_sidebar(array(
    'id' => 'left-footer',
    'name' => __( 'Left Footer', $text_domain ),
    'description' => __( 'This goes in the footer, on the left side.', $text_domain ),
    'before_widget' => '',
    'after_widget' => ''
  ));
  register_sidebar(array(
    'id' => 'mid-footer',
    'name' => __( 'Middle Footer', $text_domain ),
    'description' => __( 'This goes in the footer, in the middle.', $text_domain ),
    'before_widget' => '',
    'after_widget' => ''
  ));
  register_sidebar(array(
    'id' => 'right-footer',
    'name' => __( 'Right Footer', $text_domain ),
    'description' => __( 'This goes in the footer, on the right side.', $text_domain ),
    'before_widget' => '',
    'after_widget' => ''
  ));
  // register_sidebar(array(
  //     'id' => 'right-menu',
  //     'name' => __( 'Right Menu', $text_domain ),
  //     'description' => __( 'This sidebar is located in the right column of the page.', $text_domain ),
  //     'before_widget' => '<div class="light one-wide">',
  //     'after_widget' => '</div>',
  //     'before_title' => '',
  //     'after_title' => '',
  //   ));
}

function curPageURL() {
  $pageURL = 'http';
  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
  $pageURL .= "://".$_SERVER["SERVER_NAME"];
  if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= ":".$_SERVER["SERVER_PORT"];
  }
  $pageURL .= $_SERVER["REQUEST_URI"];
  return $pageURL;
}


// remove the original wpautop function
//remove_filter('the_excerpt', 'wpautop');
//remove_filter('the_content', 'wpautop');
?>
