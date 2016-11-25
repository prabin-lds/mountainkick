<?php get_header(); the_post(); ?>

<section class=inner-banner>
 <picture>
    <!--[if IE 9]>
    <video style="display: none;">
       <![endif]-->
       <source srcset=<?php echo get_template_directory_uri().'/images/uploads/slider-mobile.png'; ?> media="(max-width: 480px)">
       <source srcset=<?php echo get_template_directory_uri().'/images/uploads/ipad-home.png'; ?> media="(max-width: 768px)">
       <!--[if IE 9]>
    </video>
    <![endif]-->
    <?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' ); ?>
    <img src=<?php echo $featuredImage[0]; ?> >
 </picture>
</section>
<!--/.inner-banner-->

<div class=top-triangle>
	<div class=container></div>
</div>
<section class=trip-intro>
 <div class=container>
    <div class=row>
       <div class="col-lg-11 offset-lg-1">
          <h1 class=heading><?php the_title(); ?></h1>
          <div class=trip__technical-details>
             <ul class=clearfix>
            <?php
             	if( have_rows('quick_information') ):
             			while ( have_rows('quick_information') ) : the_row(); ?>

                <li class=detail__item>
                   <span class=detail__item-icon>
                      <svg>
                      	<?php $icon = get_sub_field('icon'); ?>
                         <use xlink:href=#icon-<?php echo $icon['name']; ?> ></use>
                      </svg>
                   </span>
                   <div class=detail__item-desc><span class=title><?php the_sub_field('title'); ?></span> <?php the_sub_field('information'); ?></div>
                </li>
            <?php
                		endwhile;
                endif;
            ?>
                
             </ul>
          </div>
       </div>
    </div>
    <!--/.row-->
 </div>
 <!--/.container-->
</section>
<!--/.trip-intro-->

<?php if( have_rows('flexible_tabs') ): ?>	
<nav class=tab-menu>
	<div class=tab-mobile-nav>
		<svg>
		   <use xlink:href=#icon-nav-black></use>
		</svg>
	</div>
	<ul>
	<?php while( have_rows('flexible_tabs') ): the_row(); ?>
				<?php if( get_row_layout() == 'title_content' ): ?>
						<li><a href="#<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('title') ) ) ); ?>"><?php the_sub_field('title'); ?></a></li>
				<?php endif; ?>

				<?php if( get_row_layout() == 'itinerary' ): ?>
						<li><a href="#<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('main_title') ) ) ); ?>"><?php the_sub_field('main_title'); ?></a></li>
				<?php endif; ?>

				<?php if( get_row_layout() == 'equipments' ): ?>
						<li><a href="#<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('heading') ) ) ); ?>"><?php the_sub_field('heading'); ?></a></li>
				<?php endif; ?>
				<?php if( get_row_layout() == 'gallery' ): ?>
					<li><a href="#tab-gallery">Gallery</a></li>
				<?php endif; ?>

				<?php if( get_row_layout() == 'trip_information' ): ?>
					<li><a href="#tab-departure-dates">Departure Dates</a></li>
				<?php endif; ?>

				
					
	<?php endwhile; ?>
	</ul>
</nav>
<!--/.tab-menu-->
<?php endif; ?>

<?php if( have_rows('flexible_tabs') ): ?>
	<?php while( have_rows('flexible_tabs') ): the_row(); ?>


      <section class=tab-content>
         <div class=container>
            <div class=row>
               <div class="col-lg-10 offset-lg-1">
               	<?php if( get_row_layout() == 'title_content' ): ?>
                  <div class=tab-overview id=<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('title') ) ) ); ?> >
                     <h2 class=tab-heading><?php the_sub_field('title'); ?></h2>
                     <?php the_sub_field('content'); ?>                    
                  </div>
                <?php endif; ?>
                  <!--/.tab-overview-->

                  <?php if( get_row_layout() == 'itinerary' ): ?>
	                  <div class=tab-itinerary id=<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('main_title') ) ) ); ?>>
	                     <h2 class=tab-heading><?php the_sub_field('main_title'); ?></h2>
	                     <ul class=itinerary-content>

	                    <?php if( have_rows('itinerary_information') ): ?>
	                    	<?php while ( have_rows('itinerary_information') ) : the_row(); ?>
			                        <li>
			                           <div class=day>day <span><?php the_sub_field('day'); ?></span></div>
			                           <div class=itinerary__detail>
			                              <div class=small-heading><?php the_sub_field('title'); ?></div>
			                              <p><?php the_sub_field('content'); ?></p>			                              
			                           </div>
			                        </li>
			                    <?php endwhile; ?>
	                        <?php endif; ?>                    
	                       
	                     </ul>
	                  </div>
	                  <!--/.tab-itinerary-->
	                <?php endif; ?>


					<?php if( get_row_layout() == 'relations' ): ?>
						<div class=tab-hotels id=<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('heading') ) ) ); ?> >
							<h2 class=tab-heading><?php the_sub_field('heading'); ?></h2>
							<p><?php the_sub_field('content'); ?></p>
							<div class=hotels>
		                        <div class=row>
		                        <?php $hotels = get_sub_field('hotels'); ?>
		                        	<?php if ($hotels): ?>
		                        		<?php foreach( $hotels as $post): // variable must be called $post (IMPORTANT) ?>
        									<?php setup_postdata($post); ?>
					                           <div class="col-lg-4 hotel col-md-4 col-sm-6 col-xs-6">
					                            <?php $hotelImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' ); ?>
					                              <img src="<?php echo $hotelImage[0]; ?>"> <span class=hotel__name><?php the_title(); ?></span>
					                              <p><?php the_content(); ?></p>
					                           </div>
							            <?php endforeach; ?>
							            <?php wp_reset_postdata(); // Important to reset $post ?>
				                    <?php endif; ?>

		                        </div>
	                     	</div>
						</div>
						<!--/.tab-hotels-->
					<?php endif; ?>


					<?php if( get_row_layout() == 'tabs' ): ?>

					<div class=tab-faq id=tab-faq>
                     <h2 class=tab-heading><?php the_sub_field('heading'); ?></h2>
                     <div class=lds-accordion>                        
                        <?php if( have_rows('tabs') ): $tabCount = 1; ?>
                        	<ul>
             				<?php while ( have_rows('tabs') ) : the_row(); ?>
		                           <li>
		                              <div><?php the_sub_field('title'); ?></div>
		                              <div <?php if($tabCount == 1) echo "class=accordion-content"; ?> ><?php the_sub_field('content'); ?></div>
		                           </li>
		                        <?php $tabCount++; endwhile; ?>                           
                        	</ul>
                        <?php endif; ?>
                     </div>
                  </div>
                  <!--/.tab-faq-->
              <?php endif; ?>

              <?php if( get_row_layout() == 'equipments' ): ?>
					<div class=tab-equipments id=<?php echo preg_replace( '/[ ,]+/', '-', trim( strtolower( get_sub_field('heading') ) ) ); ?>>
						<h2 class=tab-heading><?php the_sub_field('heading'); ?></h2>
						<?php the_sub_field('content'); ?>
						<p class="note m-t-3 m-b-3">Note: <?php the_sub_field('note'); ?></p>
						<a href=# class="btn btn--arrow btn--bg-border--black m-r-3">view all equipment list</a>
						<a href=# class="btn btn--arrow btn--bg-border--black hidden-xs-down">download equipment list</a>
					</div>
                  <!--/.tab-equipments-->
              <?php endif; ?>


              <?php if( get_row_layout() == 'trip_information' ): ?>

				<div class=tab-departure-dates id=tab-departure-dates>
				     <ul class=clearfix>
				        <li><a href=#fixed-dates>DEPATURE DATES</a></li>
				        <li><a href=#private-dates>private dates</a></li>
				        <li><a href=#tailor-made>customize your trip</a></li>
				     </ul>
				     <div id=fixed-dates>
				        <table class=rwd-table>
				           <tr>
				              <th>DEPARTING</th>
				              <th>DAYS</th>
				              <th>STATUS</th>
				              <th>COST</th>
				              <th></th>
				           </tr>

				           <?php if( have_rows('trip_details') ): ?>
                        	<ul>
             				<?php while ( have_rows('trip_details') ) : the_row(); ?>
		                           <tr>
						              <td data-th=DEPARTING><?php the_sub_field('departure_date'); ?></td>
						              <td data-th=DAYS><?php the_sub_field('days'); ?></td>
						              <td data-th=STATUS class="<?php echo strtolower( get_sub_field('status') ); ?>"><?php the_sub_field('status'); ?></td>
						              <td data-th=COST><?php the_sub_field('cost'); ?></td>
						              <td><a href=# class="btn btn--border-black btn--small">VIEW TRIP DETAIL</a></td>
						           </tr>
		                        <?php endwhile; ?>                           
                        	</ul>
                        <?php endif; ?>

				           
				           
				        </table>
				     </div>
				     <!--/#fixed-dates-->
				     <div id=private-dates></div>
				     <!--/#private-dates-->
				     <div id=tailor-made></div>
				     <!--/#tailor-made-->
				</div>		

			<!--/.tab-departure-dates-->
                  <h2 class="tab-heading text-lg-center" id=tab-trip-map>TRIP MAP</h2>
               </div>
            </div>
         </div>
         <!--/ .container-->
         <div class=tab-trip-map>
            <div class=map><img src=<?php echo get_template_directory_uri().'/images/uploads/map.png'; ?>></div>
         </div>
         <!--/.tab-trip-map-->
         <?php endif; ?>


        <?php if( get_row_layout() == 'gallery' ): ?>
        		<?php $images = get_sub_field('gallery_images'); ?>

        		<?php if( $images ): ?>

					<div class="col-lg-10 offset-lg-1">
						<div class=tab-gallery id=tab-gallery>
							<h2 class=tab-heading>gallery</h2>
							<div class=social-share><img src=<?php get_template_directory_uri().'/images/uploads/social.png'; ?>></div>
							<ul class=clearfix>

								<?php foreach( $images as $image ): ?>
						            <li>					                
						            	<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
						            </li>
						        <?php endforeach; ?>

							</ul>
						</div>
						<!--/.tab-gallery-->
					</div>
					<!--/.col-lg-9-->
				<?php endif; ?>
		<?php endif; ?>

			</div>
		</div>
	</div>
</section>
                  

	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>