<?php

	$args = array(
		'post_type' => 'package',
		'posts_per_page' => 1,
		'orderby' => 'rand'

	);
	$query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ): ?>	
	<?php while ( $query->have_posts() ): $query->the_post(); ?>
		
		<section class=hero-slider>
			<div class=hero-slider__slide>
				<picture>
					<!--[if IE 9]>
					<video style="display: none;">
					<![endif]-->
						<source srcset=images/uploads/slider-mobile.png media="(max-width: 480px)">
						<source srcset=images/uploads/ipad-home.png media="(max-width: 768px)">
					<!--[if IE 9]>
					</video>
					<![endif]-->
					<?php $packageFeaturedImage = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'large' ); ?>
					<img src="<?php echo $packageFeaturedImage[0]; ?>">
				</picture>
				<div class=slider-text-wrap>
					<div class=container>
						<div class=row>
							<div class=slide__text>
								<div class=col-md-4>
									<h1 class=heading><?php the_title(); ?></h1>
									<p class="short-desc hidden-xs-down hidden-md-down"><?php echo substrwords( get_field('overview_content'),100 ); ?></p>
								</div>
								
								<div class="col-md-4 align-end">
									<ul class=trip__technical-desc>
										<li class=trip-days>days <span><?php the_field('duration'); ?></span></li>
										<li class=trip-price>usd <span><?php the_field('price'); ?></span></li>
										<li class=trip-altitude>max altitude <span><?php the_field('max_altitude'); ?><i>ft</i></span></li>									 	
									</ul>
								</div>
								
								<div class="col-md-4 align-end"><a class="btn btn--bg btn--arrow" href="<?php the_permalink(); ?>" target="_blank"><?php _e("view details",'mountainkick'); ?></a></div>
							</div>
						</div>
					</div>
				</div>
				<!--slider-text-wrap-->
			</div>
		</section>
		<!--/.hero-slider-->
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>