<?php if( have_rows('hotels') ): ?>
	<div class=tab-hotels id=tab-hotels>
		 <h2 class=tab-heading><?php the_Field('hotels_heading'); ?></h2>
		 <p><?php the_Field('hotels_note'); ?></p>
		 <div class=hotels>
		    <div class=row>
		    <?php while( have_rows('hotels') ): the_row(); ?>

		       <div class="col-lg-4 hotel col-md-4 col-sm-6 col-xs-6">
		       <?php $hotelImage = get_sub_field('hotel_featured_image'); ?>
		          <img src="<?php echo $hotelImage['url']; ?>" alt="<?php $hotelImage['alt']; ?>"> <span class=hotel__name><?php the_sub_field('hotel_name'); ?></span>
		          <p><?php the_sub_field('hotel_description'); ?></p>
		       </div>
		   <?php endwhile; ?>
		       
		    </div>
		</div>
	</div>
	<!--/.tab-hotels-->
<?php endif; ?>