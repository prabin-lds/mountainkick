<?php 

$ids = get_field('top_trips', false, false);

$query = new WP_Query(array(
   'post_type'       => 'package',
   'posts_per_page'  => -1,
   'post__in'        => $ids,
   'post_status'     => 'publish',
   'orderby'         => 'post__in'
));

?>

<?php if ( $query->have_posts() ): ?> 

   <section class="top-trip text-center">
      <div class=container>
         <div class=row>
            <div class=col-md-12>
               <h2 class=section-heading><?php echo strtoupper( get_field('heading_top_trips') ); ?></h2>
               <span class=slogan><?php echo strtoupper( get_field('sub_heading_top_trips') ); ?></span>
            </div>
         </div>
      </div>

      <div class=packages>

      <?php while ( $query->have_posts() ): $query->the_post(); ?>

         <div class=package>
         <?php $tripFeaturedImage = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'thumb' ); ?>
            <figure class=package__img><img src="<?php echo $tripFeaturedImage[0]; ?>"></figure>
            <div class="package__desc clearfix">
               <span class=package__desc-price>from usd <span class=price><?php the_field('price'); ?></span></span>
               <div class=package__desc-title>
                  <span><?php the_field('duration'); ?> Days trekking to <?php the_field('max_altitude'); ?> Ft</span>
                  <h4><a><?php the_title(); ?></a></h4>
               </div>
            </div>
         </div>
         <!--/.package-->

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
        
      </div>
      <!--/.packages-->
   </section>
   <!--/.top-trip-->
<?php endif; ?>