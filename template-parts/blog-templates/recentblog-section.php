<?php

   $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'order' => 'DESC'
   );
   $query = new WP_Query( $args );
?>
<?php if ( $query->have_posts() ): ?>
   <section class="footer-blog text-center">
      <div class=container>
         <div class=row>
            <div class="col-md-12 m-b-4">
               <h2 class=section-heading>RECENT FROM OUR BLOG</h2>
               <span class=slogan>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT. DONEC A NEQUE INTERDUM DIAM DAPIBUS TINCIDUNT.</span>
            </div>

            <?php while ( $query->have_posts() ): $query->the_post(); ?>
            
               <div class="general-box col-md-4">
               <?php $postFeaturedImage = wp_get_attachment_image_src( get_post_thumbnail_id( $query->ID ), 'thumb' ); ?>
                  <figure class=general-box__img><img src="<?php echo $postFeaturedImage[0]; ?>"></figure>
                  <div class=general-box__desc>
                     <h6><a>TRAVEL</a></h6>
                     <h4><a><?php the_title(); ?></a></h4>
                     <p><?php the_content(); ?></p>
                  </div>
               </div>
               <!--/.general-box-->

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
         </div>

      </div>
   </section>
   <!--/.home-blog-->
<?php endif; ?>