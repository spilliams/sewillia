<?php
/**
 * @package WordPress
 * @subpackage spencerenglish
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
  <head>
    <title>spencerenglish.com</title>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script> 
    
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ribbon.css">
    
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
    
    <?php if ( !is_user_logged_in() ) { ?>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-13233925-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <?php } ?>
  </head>
  <body <?php body_class(); ?>>
    <div id='wrapper'>
      <div id='header'></div>
      <div id='container'>
        <div id='banner'>
          <a href='/'><img src='<?php bloginfo('stylesheet_directory'); ?>/banner.png'></a>
        </div>
        <div id='nav'>
          <div id='ribbon'>
            <div id='rb-left-tri-dk' class='rb-tri rb-dk rb-left'></div>
            <div id='rb-right-tri-dk' class='rb-tri rb-dk rb-right'></div>
            <div id='rb-left-rect-dk' class='rb-rect rb-dk rb-left'></div>
            <div id='rb-right-rect-dk' class='rb-rect rb-dk rb-right'></div>

            <div id='rb-left-tri-hi' class='rb-tri rb-hi rb-left'></div>
            <div id='rb-right-tri-hi' class='rb-tri rb-hi rb-right'></div>
            <div id='rb-left-top-tri' class='rb-tri rb-fr'></div>
            <div id='rb-left-bot-tri' class='rb-tri rb-fr'></div>
            <div id='rb-right-top-tri' class='rb-tri rb-fr'></div>
            <div id='rb-right-bot-tri' class='rb-tri rb-fr'></div>
            <div id='rb-left-rect' class='rb-rect rb-fr rb-left'></div>
            <div id='rb-right-rect' class='rb-rect rb-fr rb-right'></div>
            <div id='rb-left-inner-dk' class='rb-inner rb-dk'></div>
            <div id='rb-right-inner-dk' class='rb-inner rb-dk'></div>
            <div id='rb-left-inner' class='rb-inner rb-bk'></div>
            <div id='rb-right-inner' class='rb-inner rb-bk'></div>
            <div id='rb-ribbon-dk' class='rb-rect rb-dk'></div>

            <div id='rb-ribbon' class='rb-rect'>
              <a href='/'>blog</a><span class='nav-spacer'></span>
              <a href='/work'>work</a><span class='nav-spacer'></span>
              <a href='/about'>about</a><!--<span class='nav-spacer'></span>
              <a href='/photos'>photos</a><span class='nav-spacer'></span>
              <a href='/travel'>travel</a>-->
            </div>

          </div>
        </div>
        <!--[if IE]>
          <noscript>
            <div class='note'>
              Hi there! It appears as though you're viewing this site with Internet Explorer and you have javascript turned off.<br />
              Unfortunately, this site will look dumb under such conditions.<br />
              We recommend either turning javascript on, you install the <a href="http://code.google.com/chrome/chromeframe/">Internet Explorer Google Chrome Frame plugin</a> which fixes IE, or install a better browser like <a href="http://www.apple.com/safari/">Safari</a>, <a href="http://www.google.com/chrome">Chrome</a> or <a href="http://www.mozilla.com/en-US/firefox/personal.html">Firefox</a>. Don't say we didn't warn you.
            </div>
          </noscript>
        <![endif]-->

        <!--TODO put in a note article for "Viewing posts tagged 'Foo'" and one for "Viewing archive for 'Bar'"-->

      
      <!-- end header -->
