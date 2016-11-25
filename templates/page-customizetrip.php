<?php //Template Name: Trip Customizer ?>

<?php get_header(); the_post(); ?>

<section class=customize-trip>
 <div class=container>
    <div class=row>
       <div class="col-lg-12 text-lg-center m-b-3">
          <h1 class=heading><?php the_title(); ?></h1>
          <?php if( !empty(get_field('sub_heading')) ): ?>
          	<span class="slogan decor"><?php echo strtoupper( get_field('sub_heading') ); ?></span>
          <?php endif; ?>
       </div>

       <div class=col-lg-12>
          <?php the_content(); ?>
          <div class=detail-box>

          <?php if( !empty(get_field('detail_heading')) ): ?>
          		<?php
          			$detailBkgImg = get_field('detail_background_image');
          			if( empty($detailBkgImg['url']) )
          				$detailBkgImg['url'] = get_template_directory_uri().'/images/uploads/custom-trip.png';
          		?>
	             <div class=box style="background: url(<?php echo $detailBkgImg['url']; ?>); background-size: cover; background-position: center">
	                <h2><?php echo strtoupper( get_field('detail_heading') ); ?></h2>
	                <?php the_field('detail_content'); ?>                
	             </div>
         <?php endif; ?>

         <?php if( !empty(get_field('own_experience_title')) ): ?>
         		<?php
          			$experienceBkgImg = get_field('experience_background_image');
          			if( empty($experienceBkgImg['url']) )
          				$experienceBkgImg['url'] = get_template_directory_uri().'/images/uploads/custom-trip.png';
          		?>

	             <div class=box style="background: url(<?php echo $experienceBkgImg['url']; ?>); background-size: cover; background-position: center">
	                <h2><?php echo strtoupper( get_field('own_experience_title') ); ?></h2>
	                <?php the_field('own_experience_content'); ?>                
	             </div>
         <?php endif; ?>

         <?php if( !empty(get_field('family_friends_title')) ): ?>
         		<?php
          			$familyFriendsBkgImg = get_field('family_friends_background_image');
          			if( empty($familyFriendsBkgImg['url']) )
          				$familyFriendsBkgImg['url'] = get_template_directory_uri().'/images/uploads/custom-trip.png';
          		?>
             <div class=box style="background: url(<?php echo $familyFriendsBkgImg['url']; ?>); background-size: cover; background-position: center">
                <h2><?php echo strtoupper( get_field('family_friends_title') ); ?></h2>
                <?php the_field('family_friends_content'); ?>                
             </div>
         <?php endif; ?>

          </div>
       </div>
    </div>
    <!--/.row-->
 </div>
 <!--/.container-->
 <section class="contact-methods clearfix">
    <div class=container>
       <div class=row>
          <div class="col-lg-10 offset-lg-1">
             <h3 class="section-heading text-lg-center"><?php the_field('talk_to_us_title'); ?></h3>
             <?php the_field('talk_to_us_content'); ?>
             
             <a href=mailto:<?php echo get_field('email','option'); ?> class=box>
                <div class=content>
                   <span>
                      <svg>
                         <use xlink:href=#icon-mail></use>
                      </svg>
                   </span>
                   <br><?php _e("SEND US AN EMAIL",'mountainkick'); ?>
                </div>
             </a>
             <a href=tel:<?php echo preg_replace( '/[^+0-9]/', '', get_field('phone','option') ); ?> class=box>
                <div class=content>
                   <span>
                      <svg>
                         <use xlink:href=#icon-call></use>
                      </svg>
                   </span>
                   <br><?php _e("talk us by phone",'mountainkick'); ?>
                </div>
             </a>
             <a href=# class=box>
                <div class=content>
                   <span>
                      <svg>
                         <use xlink:href=#icon-form></use>
                      </svg>
                   </span>
                   <br><?php _e("fill out a form",'mountainkick'); ?>
                </div>
             </a>
          </div>
       </div>
    </div>
 </section>
 <!--/ .contact-methods-->
</section>
<!--/.trip-intro-->
<?php get_footer(); ?>