<?php
/**
 * @package WordPress
 * @subpackage spencerenglish
 */
?>
<!-- begin sidebar -->

<div id='sidebar'>
 
  <?php if ( function_exists('dynamic_sidebar')) :
    dynamic_sidebar('right-menu');
  endif; ?>
 
  <div class='light'>
    <div style='float:left'>twitter<br>last.fm<br>facebook</div>
    <div style='float:left'>8tracks<br>linkedin<br>github</div>
    <div class='clearfix'></div>
  </div>
 
  <?php if ( is_user_logged_in() ) { ?>
    <div class='light'><a href="<?php echo wp_logout_url(curPageUrl()); ?>">Log Out</a></div>
  <?php } ?>
</div>

<!-- end sidebar -->