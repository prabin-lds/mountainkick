<?php $terms = get_the_terms( get_the_ID(), 'trip-category' ); ?>

<?php
if( $terms )
{

   $taxQuery = array();

   if( count($terms) > 1 )
      $taxQuery['relation'] = 'OR';

   foreach ($terms as $term) 
   {
      $taxQuery[] = array(
         'taxonomy' => 'trip-category',
         'field' => 'slug',
         'terms' => $term->slug
      );
   }

   $args = array(
      'post_type' => 'package',
      'posts_per_page' => 3,
      'post__not_in' => array( get_the_ID() ),
      'tax_query' => $taxQuery
   );

   $query = new WP_Query( $args );
}

?>

<?php if( $query->have_posts() ): ?>
   <section class=more-trip>
      <div class=container>
         <div class=col-lg-12>
            <h2 class="section-heading text-lg-center"><?php _e("More Trip Inspiration",'mountainkick'); ?></h2>
         </div>
      </div>
      <div class=packages>
      <?php while( $query->have_posts() ): $query->the_post(); ?>
         <div class=package>
         <?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'thumb' ); ?>
            <?php if( $featuredImage ) ?>
               <figure class=package__img><img src=<?php echo $featuredImage[0]; ?>></figure>
            <div class="package__desc clearfix">
               <?php //if( !empty(get_field('price')) ): ?>
                  <span class=package__desc-price>from usd <span class=price><?php the_field('price'); ?></span></span>
               <?php //endif;?>
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
   <!--/.more-trip-->
<?php endif; ?>