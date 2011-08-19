<?php
/**
 * @package WordPress
 * @subpackage sewillia
 */

automatic_feed_links();

// Add support for a variety of post formats
add_theme_support( 'post-formats', array( 'gallery' ) );

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
