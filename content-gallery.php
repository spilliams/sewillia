<?php /* This displays one gallery post with the assumption that it's not the only post on the page. */ ?>
<!-- begin content-gallery -->
<div class='article light full-wide'>
  <div class='header'>
    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
  </div>
  <div class='meta'>
    Posted on <?php the_time('j F Y') ?> by <?php the_author(); ?>. <?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>
  </div>

  <?php
		$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 4 ) );
		while ( $images ) :
			$total_images = count( $images );
			$image = array_shift( $images );
			$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
	?>
			<div class="gallery-thumb">
				<a class="size-thumbnail" href="<?php the_permalink(); ?>#<?php echo $image->ID; ?>"><?php echo $image_img_tag; ?></a>
			</div><!-- .gallery-thumb -->
			
	<?php endwhile; ?>

</div>
<!-- end content-gallery -->
