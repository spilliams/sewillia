<?php
/**
 * @package Wordpress
 * @subpackage sewillia
 */
get_header();
get_template_part( 'content-single', get_post_format() );
get_footer();
?>