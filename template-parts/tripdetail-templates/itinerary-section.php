<?php if( have_rows('itinerary') ): ?>
<div class=tab-itinerary id=tab-itinerary>
   <h2 class=tab-heading><?php the_field('itinerary_main_heading'); ?></h2>
   <ul class=itinerary-content>
   <?php  while ( have_rows('itinerary') ) : the_row(); ?>

      <li>
         <div class=day>day <span><?php the_sub_field('itinerary_day'); ?></span></div>
         <div class=itinerary__detail>
            <div class=small-heading><?php the_sub_field('itinerary_title'); ?></div>
            <?php the_sub_field('itinerary_information'); ?>            
         </div>
      </li>

   <?php endwhile; ?>
      
   </ul>
</div>
<!--/.tab-itinerary-->
<?php endif; ?>
                  