<?php $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
<section class=inner-banner>
	<picture>
		<!--[if IE 9]>
		<video style="display: none;">
		<![endif]-->
		<source srcset=images/uploads/slider-mobile.png media="(max-width: 480px)">
		<source srcset=images/uploads/ipad-home.png media="(max-width: 768px)">
		<!--[if IE 9]>
		</video>
		<![endif]-->
		<?php
			if( empty($bannerImage[0]) )
				$bannerImage[0] = get_template_directory_uri().'/images/uploads/trip-banner.png';

		?>
		<img src="<?php echo $bannerImage[0]; ?>">		
	</picture>
	<?php if( is_page_template('templates/page-home.php') ): ?>
		<div class=banner-text><?php the_title(); ?></div>
	<?php endif; ?>
</section>
<!--/.inner-banner-->