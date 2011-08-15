<?php /*
  Template Name: Full-Width Page
*/ ?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class='article light full-wide'>
  <div class='header'>
    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
  </div>
  <div class='meta'>
    Posted on <?php the_time('j F Y') ?> by <?php the_author(); ?>. <?php edit_post_link('Edit', '', ''); ?>
  </div>
  <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>