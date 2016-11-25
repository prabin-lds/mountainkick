<?php

   $args = array(
      'post_type' => 'package'
   );
   $query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ): ?>
   <section class="departure-dates text-center">
      <div class=container>
         <div class=row>
            <div class=col-md-12>
               <h2 class=section-heading><?php echo strtoupper( get_field('heading',$post->ID) ); ?></h2>
               <span class=slogan><?php echo strtoupper( get_field('sub_heading',$post->ID) ); ?></span>
            </div>
            <table class=rwd-table>
               <tr>
                  <th>DEPARTING</th>
                  <th>TRIP NAME</th>
                  <th>DAYS</th>
                  <th>STATUS</th>
                  <th>COST</th>
                  <th></th>
               </tr>
               <?php while ( $query->have_posts() ): $query->the_post(); ?>   
                  <tr>
                     <td data-th=DEPARTING><?php the_field('departure_date'); ?></td>
                     <td data-th="TRIP NAME" class=rwd-trip-name><?php the_title(); ?></td>
                     <td data-th=DAYS><?php the_field('duration'); ?></td>
                     <td data-th=STATUS class="<?php strtolower( get_field('status') ); ?>"><?php the_field('status'); ?></td>
                     <td data-th=COST><?php if( !empty(get_field('price')) && get_field('price') != strtolower("upon request") ) echo "$".get_field('price'); ?></td>
                     <td><a href=# class="btn btn--border-black btn--small">VIEW TRIP DETAIL</a></td>
                  </tr>
               <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
            </table>
         </div>
      </div>

      <?php if( !empty( get_field('heading_private_date') ) || !empty( get_field('content_private_date') ) ): ?>
         <div class="private-date-trip text-md-left">
            <div class=container>
               <div class=row>
                  <div class=col-md-12>
                     <h3 class=heading><?php the_field('heading_private_date'); ?></h3>
                  </div>
                  <div class="col-md-12 col-lg-8">
                    <?php the_field('content_private_date'); ?>
                  </div>
                  <div class="col-md-12 col-lg-4 text-lg-right"><a class="btn btn--bg">Request Private Date</a></div>
               </div>
            </div>
         </div>
         <!--/.private-date-trip-->
      <?php endif; ?>
   </section>
   <!--/.departure-dates-->
<?php endif; ?>