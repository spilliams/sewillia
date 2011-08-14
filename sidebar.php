<?php
/**
 * @package WordPress
 * @subpackage sewillia
 */
?>
<!-- begin sidebar -->

<div id='sidebar'>
 
  <?php if ( function_exists('dynamic_sidebar')) :
    dynamic_sidebar('right-menu');
  endif; ?>
 
  <div class='light one-wide'>
    <div style='float:left'>twitter<br>last.fm<br>facebook</div>
    <div style='float:left'>8tracks<br>linkedin<br>github</div>
    <div class='clearfix'></div>
  </div>
</div>

<!-- end sidebar -->