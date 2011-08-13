<?php /*
  Template Name: Page
*/ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class='article light two-wide'><?php the_content(); ?></div>
<?php endwhile; endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>