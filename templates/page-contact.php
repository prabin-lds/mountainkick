<?php // Template Name: Contact Us ?>

<?php get_header(); ?>

    <section class=inner-banner>
        <picture>
            <!--[if IE 9]>
            <video style="display: none;">
            <![endif]-->
            <source srcset=images/uploads/slider-mobile.png media="(max-width: 480px)">
            <source srcset=images/uploads/ipad-home.png media="(max-width: 768px)">
            <!--[if IE 9]>
            </video>
            <![endif]--><img src=images/uploads/map-contact.png>
        </picture>
    </section>
    <!--/.inner-banner-->
    <div class=top-triangle>
        <div class=container></div>
    </div>


    <section class="wrapper-with-border general-form">
        <div class=container>
            <div class=row>
                <div class="col-lg-12 offset-lg-1">
                    <h1 class=heading>contact us</h1>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="contact-form clearfix">
                        <?php echo gravity_form(1,false,false,false,'',false,true); //( $id or $name, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex, $echo = true ) ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <address>
                        <h4><?php the_field('company','option'); ?></h4>
                        P.O.Box: <?php the_field('po_box','option'); ?><br>
                        <?php the_field('address','option'); ?><br>
                        Phone: <a href="tel:<?php echo preg_replace( '/[^+0-9]/', '', get_field('phone','option') ); ?>" > <?php the_field('phone','option'); ?></a><br>
                        Cell Phone: <a href="tel:<?php echo preg_replace( '/[^+0-9]/', '', get_field('cell_phone','option') ); ?>" > <?php the_field('cell_phone','option'); ?></a> <br>
                        Email: <a href=mailto:"<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
                    </address>
                    <div class="social-media clearfix">
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
                </div>
                <div class=border-btm></div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/.trip-intro-->

<?php get_footer(); ?>