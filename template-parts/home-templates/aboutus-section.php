<section class=home-about>
   <div class="left-box hidden-sm-down"></div>
   <div class="right-box hidden-sm-down"></div>
      <div class=container>
         <div class=row>
            <div class="section-heading col-md-6">we are <span>mountain kick</span><?php //the_field('title'); ?></div>
            <div class="content col-md-6">
               <p><?php the_field('content'); ?></p>
               <a class="btn btn--border btn--arrow" href="<?php echo esc_url( get_permalink( get_page_by_path( 'about-us' ) ) ); ?>"><?php _e("more about us",'mountainkick'); ?></a>
            </div>
         </div>
         <!--/.row-->
      </div>
      <!--/.container-->
</section>
<!--/.home-about-->