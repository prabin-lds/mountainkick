<?php

	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => 2,
		'orderby' => rand,
		'tax_query' => array(
			array(
				'taxonomy' => 'testimonial-category',
				'field'    => 'slug',
				'terms'    => 'trip',
			)
		)
	);
	$query = new WP_Query( $args );
?>

<?php if( $query->have_posts() ): ?>

<div class="col-lg-8 offset-lg-2">
  <div class=trip-review>

	<?php while( $query->have_posts() ): $query->the_post(); ?>
			<?php $authorImage = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'thumb' ); ?>
		     <div class="review__item clearfix">
		        <p><?php the_content(); ?></p>
		        <img src="<?php echo $authorImage[0]; ?>" alt="<?php the_title(); ?>">
		        <div class=author><span class=author__name><?php the_title(); ?></span> <span class=author__address><?php the_field('author_address'); ?></span></div>
		     </div>
		     <!--/.review__item-->

	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>
     
  </div>
  <!--/.trip-review-->
</div>

<?php endif; ?>
      
