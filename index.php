<?php
/**
 * @package WordPress
 * @subpackage sewillia
 */
get_header();
?>
<?php if (have_posts()): while (have_posts()) : the_post() ?>
  <?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; else: ?>
  <div class='article light full-wide'><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
<?php endif; ?>

<?php posts_nav_link(" ", '<span class="fleft post_nav">Newer Posts &raquo;</span>', '<span class="fright post_nav">&laquo; Older Posts</span>'); ?>
<div class='clearfix'></div>

<?php get_footer(); ?>
