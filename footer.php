<?php
/**
 * @package WordPress
 * @subpackage sewillia
 */
?>
    <!-- begin footer -->
    </div>
    <div id='push'></div>
  </div>
  <div id='footer'>
    <div id='footer-menu' class='dark'>
      <div class='full-wide'>
        <div class='footer-menu one-wide'>
          <?php if ( function_exists('dynamic_sidebar')) :
            dynamic_sidebar('left-footer');
          endif; ?>
        </div>
        <div class='footer-menu one-wide'>
          <?php if ( function_exists('dynamic_sidebar')) :
            dynamic_sidebar('mid-footer');
          endif; ?>
          <?php if ( is_user_logged_in() ) { ?>
            <a href="<?php echo wp_logout_url(curPageUrl()); ?>">Log Out</a>
          <?php } ?>
        </div>
        <div class='footer-menu one-wide'>
          <?php if ( function_exists('dynamic_sidebar')) :
            dynamic_sidebar('right-footer');
          endif; ?>
        </div>
        <div class='clearfix'></div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </div>
</body>
</html>