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
          Contact!<br>
          <a href='http://feeds.feedburner.com/spilliams' class='networklink' target='_blank'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_32.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_32.png' style='display:none' class='hi'> subscribe</a><br>
          <a href='http://upload.spencerenglish.com/Spencer Williams.vcf' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_35.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_35.png' style='display:none' class='hi'> vcard</a><br>
          <span class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_20.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_20.png' style='display:none' class='hi'> (602) glowtar</span><br>
          <a href='mailto:s@spencerenglish.com' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_06.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_06.png' style='display:none' class='hi'> email</a><br>
          <a href='/colophon' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_03.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_03.png' style='display:none' class='hi'> colophon</a><br>
          <?php if ( is_user_logged_in() ) { ?>
            <a href="<?php echo wp_logout_url(curPageUrl()); ?>">Log Out</a>
          <?php } ?>
        </div>
        <div class='footer-menu one-wide'>
          Network!<br>
          <a href='http://twitter.com/#!/spilliams' target='_blank' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_37.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_37.png' style='display:none' class='hi'> 29 followers</a><br>
          <a href='http://github.com/spilliams' target='_blank' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_17.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_17.png' style='display:none' class='hi'> 5 public repos</a><br>
          <a href='http://www.linkedin.com/in/spencerenglish' target='_blank' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_27.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_27.png' style='display:none' class='hi'> 28 connections</a><br>
          <a href='http://www.last.fm/user/pastavibes' target='_blank' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_25.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_25.png' style='display:none' class='hi'> 29532 plays</a><br>
          <a href='http://www.facebook.com/spilliams' target='_blank' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_09.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_09.png' style='display:none' class='hi'> 119 friends</a><br>
          <a href='https://foursquare.com/spilliams' target='_blank' class='networklink'><img src='/wp-content/themes/spencerenglish 3.0/images/grey_12.png' class='lo'><img src='/wp-content/themes/spencerenglish 3.0/images/three_12.png' style='display:none' class='hi'> 68 checkins</a><br>
        </div>
        <div class='clearfix'></div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </div>
</body>
</html>