<?php if( have_rows('trip_types') ): ?>
<div class="section-activities text-center">
   <div class=container>
      <div class=row>
         <div class="col-md-12 col-sm-12">
            <h2 class=section-heading>what to do?</h2>
            <span class="slogan decor">AENEAN SUSCIPIT PLACERAT ARCU VEL DIGNISSIM ERAT BIBENDUM EU</span>
            <div class="secondary-sb clearfix">
                  <?php $count = 2; ?>
                  <?php while( have_rows('trip_types') ): the_row(); ?>
                    
                     <a class="box__<?php echo $count; ?><?php if($count == 2) echo ' box-two-third'; ?>">
                     <?php $termImage = get_sub_field('featured_image'); ?>
                        <picture>
                           <!--[if IE 9]>
                           <video style="display: none;">
                              <![endif]-->
                              <source srcset="<?php echo $termImage['url']; ?>" media="(max-width: 480px)">
                              <!--[if IE 9]>
                           </video>
                           <![endif]--><img src="<?php echo $termImage['url']; ?>">
                        </picture>
                        <h3 class=overlay-heading><?php the_sub_field('type'); ?></h3>
                     </a>
                     <!--/.box__<?php //echo $count; ?>-->
                     <?php
                        if($count == 2) $count = 0;
                        if ($count == 1) $count = 2;
                        $count++;
                        endwhile;
                     ?>                   
            </div>
            <!--/.secondary-sb-->
         </div>
      </div>
   </div>
</div>
<!--/.activities-->

<?php endif; ?>