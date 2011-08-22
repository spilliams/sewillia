<?php /* this displays normal format posts */ ?>
<!-- begin content-single -->
<div class='article light full-wide'>
  <div class='header'><?php the_title(); ?></div>
  <div class='meta'>
    Posted on <?php the_time('j F Y') ?> by <?php the_author(); ?>. <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?><?php edit_post_link('Edit', ' | ', ''); ?>
  </div>

  <?php the_content(); ?>

</div>
<!-- end content-single -->
