 <?php $images = get_field('gallery'); ?>
 <?php if( $images ): ?>
    <div class="col-lg-10 offset-lg-1">
      <div class=tab-gallery id=tab-gallery>
         <h2 class=tab-heading>gallery</h2>
         <div class=social-share><!-- <img src=images/uploads/social.png> -->
            <span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
            <span class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
            <span class='st_linkedin_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
            <span class='st_pinterest_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
            <span class='st_plusone_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
         </div>
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


<script>
   stWidget.addEntry({   
           "url":"<?php the_permalink(); ?>",
           "title":"<?php the_title(); ?>",
           "type":"large",
           "text":"ShareThis",
           "image":"<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb' ); ?>",
           "summary":"<?php the_content(); ?>"
   });
</script>