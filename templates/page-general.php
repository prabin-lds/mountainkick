<?php // Template Name: General ?>
<?php get_header(); the_post(); ?>

 <div class=top-triangle>
         <div class=container></div>
      </div>
      <section class="wrapper-with-border general-page">
         <div class=container>
            <div class=row>
               <div class="col-lg-9 offset-lg-1 m-b-3">
                  <h1 class=heading><?php the_title(); ?></h1>
                  <?php
                  	the_content();
                  	if( have_rows('flexible_contents') )
                  		while( have_rows('flexible_contents') ): the_row();
                  			if( get_row_layout() == 'content_area' )
                  				the_sub_field('general_contents');
                  		endwhile;
                  ?>

               </div>
               <div class=border-btm></div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </section>
      <!--/.trip-intro-->

<?php get_footer(); ?>