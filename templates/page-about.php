<?php // Template Name: About Us ?>

<?php get_header(); the_post(); ?>

<div class=top-triangle>
	<div class=container></div>
</div>

<section class="wrapper-with-border about-us">
 <div class=container>
    <div class=row>
       <div class="col-lg-9 offset-lg-1 m-b-3">
          <h1 class=heading><?php the_title(); ?></h1>
          <?php the_content(); ?>
       </div>
       <div class=border-btm></div>
    </div>
    <!--/.row-->
 </div>
 <!--/.container-->
</section>
<!--/.trip-intro-->

<?php get_footer(); ?>