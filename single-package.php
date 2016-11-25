<?php get_header(); the_post(); ?>

<?php get_template_part( 'template-parts/tripdetail-templates/banner', 'section' ); ?>

<div class=top-triangle>
	<div class=container></div>
</div>


<?php get_template_part( 'template-parts/tripdetail-templates/quickinfo', 'section' ); ?>
<?php get_template_part( 'template-parts/tripdetail-templates/rightnav', 'section' ); ?>

<section class=tab-content>
	<div class=container>
		<div class=row>
           <div class="col-lg-10 offset-lg-1">
				<?php get_template_part( 'template-parts/tripdetail-templates/overview', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/itinerary', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/includes', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/accomodation', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/hotels', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/faqs', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/tripnotes', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/equipments', 'section' ); ?>
				<?php get_template_part( 'template-parts/tripdetail-templates/departuredates', 'section' ); ?>

				<?php $tripMap = get_field('trip_map'); ?>

				<?php if( $tripMap ) ?>
					<h2 class="tab-heading text-lg-center" id=tab-trip-map><?php the_field('trip_map_title'); ?></h2>

			</div>
		</div>
	</div>
	<!--/ .container-->

	<?php if( $tripMap ): ?>
		<div class=tab-trip-map>
			<div class=map><img src="<?php echo $tripMap['url']; ?>" alt="<?php echo $tripMap['alt']; ?>"></div>
		</div>
		<!--/.tab-trip-map-->
	<?php endif; ?>

	<div class=container>
    	<div class=row>
			<?php get_template_part( 'template-parts/tripdetail-templates/testimonial', 'section' ); ?>
			<?php get_template_part( 'template-parts/tripdetail-templates/gallery', 'section' ); ?>

			<div class="tab-csr clearfix" id=tab-csr>
			  <div class="col-lg-9 offset-lg-2">
			     <h2 class=tab-heading>csr</h2>
			     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a neque interdum diam dapibus tincidunt. In euismod risus nec pellentesque egestas. Morbi eget sollicitudin tortor, ac volutpat purus. Sed vestibulum elementum pharetra. Aenean suscipit placerat arcu, vel dignissim erat bibendum eu.</p>
			     <a href=# class="btn btn--arrow btn--bg-border--black m-t-3">READ MORE ABOUT CSR</a>
			  </div>
			  <!--/.col-lg-9-->
			</div>
			<!--/.tab-csr-->


	    </div>
    	<!--/.row-->
	 </div>
	 <!--/.container-->
</section>
<!--/.tab-content-->

<?php get_template_part( 'template-parts/tripdetail-templates/suggestedtrip', 'section' ); ?>
<?php get_template_part( 'template-parts/contactmessage', 'section' ); ?>
<?php get_template_part( 'template-parts/blog-templates/recentblog', 'section' ); ?>



<?php get_footer(); ?>