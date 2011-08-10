<?php
/**
 * @package WordPress
 * @subpackage spencerenglish
 */
get_header();
?>
<?php if (have_posts()): while (have_posts()) : the_post() ?>
<div class='article'>
  <div class='header'>
    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
  </div>
  <div class='meta'>
    Posted on <?php the_time('j F Y') ?> by <?php the_author(); ?>. <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
  </div>

  <?php the_content(__('(more...)')); ?>

  <p>
    <?php wp_link_pages(); ?>
    <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
  </p>

   <?php comments_template(); // Get wp-comments.php template ?>
</div>

<?php endwhile; else: ?>
  <div class='note'><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
<?php endif; ?>

<?php posts_nav_link(" ", '<span class="fright post_nav">Newer Posts &raquo;</span>', '<span class="fleft post_nav">&laquo; Older Posts</span>'); ?>
<div class='clearfix'></div>

<?php get_footer(); ?>
