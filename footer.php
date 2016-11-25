<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mountainkick
 */

?>

<footer id=footer class=footer>
 <div class=container>
    <div class=row>
       <div class=col-md-12>
          <address class="address col-lg-3 col-md-6 col-sm-6">
             <h5><?php the_field('company','option'); ?></h5>
             P.O.Box: <?php the_field('po_box','option'); ?><br>
             <?php the_field('address','option'); ?><br>
             Phone: <a href="tel:<?php echo preg_replace( '/[^+0-9]/', '', get_field('phone','option') ); ?>" > <?php the_field('phone','option'); ?></a><br>
             Cell Phone: <a href="tel:<?php echo preg_replace( '/[^+0-9]/', '', get_field('cell_phone','option') ); ?>" > <?php the_field('cell_phone','option'); ?></a> <br>
             Email: <a href=mailto:"<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
          </address>

          <div class="subscribe-form col-lg-4 col-md-6 col-sm-6">
             <form method=post enctype=multipart/form-data id=gform_3>
                <div class=gform_heading>
                   <h3 class=gform_title>MAILING LIST</h3>
                   <span class=gform_description>Subscribe to our newsletter for access to new trips, travel tips and exclusive deals for your next vacation</span>
                </div>
                <div class=gform_body>
                   <ul class=gform_fields>
                      <li class=gfield>
                         <label class=gfield_label for=input_3_1>Email</label>
                         <div class="ginput_container ginput_container_email"><input name=input_1 id=input_3_1 type=text class=medium tabindex=1 placeholder="Your email address"></div>
                      </li>
                   </ul>
                </div>
                <div class="gform_footer top_label"><input type=submit id=gform_submit_button_3 class="gform_button button" value=subscribe tabindex=2></div>
             </form>
          </div>
          <!--/.subscribe-form-->
          <div class="social-media clearfix col-lg-2 col-md-4 col-sm-6">
             <h5>connect with mk</h5>
             <ul class=social>
                <li class=facebook>
                   <a href="<?php echo get_field('facebook', 'option'); ?>">
                      <span>
                         <svg>
                            <use xlink:href=#icon-facebook></use>
                         </svg>
                      </span>
                   </a>
                </li>
                <li class=twitter>
                   <a href="<?php echo get_field('twitter', 'option'); ?>">
                      <span>
                         <svg>
                            <use xlink:href=#icon-twitter></use>
                         </svg>
                      </span>
                   </a>
                </li>
                <li class=instagram>
                   <a href="<?php echo get_field('instagram', 'option'); ?>">
                      <span>
                         <svg>
                            <use xlink:href=#icon-insta></use>
                         </svg>
                      </span>
                   </a>
                </li>
             </ul>
          </div>
          <!--/.social-media-->

          <?php if( have_rows('associates','option') ): ?>
	          <div class="associates col-lg-3 col-md-6 col-xs-12">
	             <h5>Member Of</h5>
	             <ul>
	             	<?php while( have_rows('associates','option') ): the_row(); ?>
	             			<?php $associatesIcon = get_sub_field('icon'); ?>
			                <li><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $associatesIcon['url']; ?>" alt="<?php $associatesIcon['alt']; ?>"></a></li>			               
		            <?php endwhile; ?>
	             </ul>
	          </div>
	          <!--/.associates-->
	      <?php endif; ?>
       </div>
    </div>
 </div>
 <!--/.container-->
 <div class=copyright-designer>
    <div class=container>
       <div class=designby>Crafted by <a>Last Door Solutions</a></div>
       <p>© 2016 <a>MountainKick</a>. All Rights Reserved</p>
    </div>
 </div>
 <!--/.copyright-->
</footer>
<!--/#footer-->



<?php wp_footer(); ?>

</body>
</html>
