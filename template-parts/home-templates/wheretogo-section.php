<?php
   $terms = get_terms( array(
       'taxonomy' => 'trip-category',
       'parent' => 0,
       'hide_empty' => false
   ) );
?>

<?php if( !empty($terms) ): ?>
   <section class="destination text-center">
      <div class=container>
         <div class=row>
            <div class=col-md-12>
               <h2 class=section-heading><?php _e("WHERE TO GO?",'mountainkick'); ?></h2>
               <span class="slogan decor">CHOOSE YOUR DESTINATION</span>
            </div>
            <div class="col-md-12 hidden-xs-down">
               <div class="style-boxes clearfix">
               
                  <?php $count = 1; // To add class counter ?>
                  <?php foreach ($terms as $term): ?>
                     <div class=box__<?php echo $count; ?> >
                        <a href=#>
                           <div class=sb>
                              <?php $termImage = get_field('featured_image',$term->taxonomy.'_'.$term->term_id); // get_field('field_name', 'category_3') = get value from a taxonomy (taxonomy = "category", id = 3)  ?>
                              <span class=gradient-overlay></span> <img src="<?php echo $termImage['url']; ?>">
                              <h3 class=overlay-heading><?php echo $term->name; ?></h3>
                           </div>
                        </a>
                     </div>
                  <?php $count++; ?>
                  <?php endforeach; ?>

               </div>
               <!--/.style-boxes-->
            </div>

            <div class="col-xs-12 visible-xs">
                  <div class=style-boxes-mobile>

                     <?php $count = 1; // To add class counter ?>
                     <?php foreach ($terms as $term): ?>
                         <div class=box__<?php echo $count; ?> >
                         <?php $termImage = get_field('featured_image',$term->taxonomy.'_'.$term->term_id); ?>
                           <img src="<?php echo $termImage['url']; ?>">
                           <h3 class=overlay-heading><?php echo $term->name; ?></h3>
                        </div>
                     <?php $count++; ?>
                     <?php endforeach; ?>
                  </div>
               </div>

         </div>
         <!--/.row-->
      </div>
      <!--/.container-->
   </section>
   <!--/.destination-->
<?php endif; ?>