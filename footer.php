<?php
/**
 * @package WordPress
 * @subpackage spencerenglish
 */
?>
    <!-- begin footer -->
    </div>
    <div id='push'></div>
  </div>
  <div id='footer'>
    <div>
    &copy; 2011 <a href='mailto:s@spencerenglish.com'>Spencer English Williams</a>. Last updated 10 June 2011.<br>
    <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.<br>
    <cite><?php echo sprintf(__("Powered by <a href='http://wordpress.org/' title='%s'><strong>WordPress</strong></a>"), __("Powered by WordPress, state-of-the-art semantic personal publishing platform.")); ?>.</cite>
    <?php wp_footer(); ?>
    </div>
  </div>
</body>
</html>