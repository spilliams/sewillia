<?php /* this displays normal format posts */ ?>
content-single
<div class='article light full-wide'>
  <div class='header'>
    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
  </div>
  <div class='meta'>
    Posted on <?php the_time('j F Y') ?> by <?php the_author(); ?>. <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
  </div>

  <?php the_content(); ?>

  <p>
    <?php wp_link_pages(); ?>
    <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
  </p>

   <?php comments_template(); // Get wp-comments.php template ?>
</div>
