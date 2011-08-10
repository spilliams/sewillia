<?php
/**
 * @package WordPress
 * @subpackage spencerenglish
 */

automatic_feed_links();

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '',
    'after_title' => '',
  ));

function curPageURL() {
  $pageURL = 'http';
  if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
  $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  }
  return $pageURL;
}

// remove the original wpautop function
//remove_filter('the_excerpt', 'wpautop');
//remove_filter('the_content', 'wpautop');
?>
