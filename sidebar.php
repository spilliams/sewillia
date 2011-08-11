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
 
 <?php if ( is_user_logged_in() ) { ?>
   <div class='light'><a href="<?php echo wp_logout_url(curPageUrl()); ?>">Log Out</a></div>
 <?php } ?>
</div>

<!-- end sidebar -->