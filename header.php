<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mountainkick
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Social Share -->
<meta property="og:url" content="Your Leadpages URL"/>
<meta property="og:title" content="The title of your page"/>
<meta property="og:image" content="URL of the image you'd like to use"/>
<meta property="og:description" content="Your description" />
<meta property="og:type" content="website"/>
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<?php get_template_part( 'inc/svg', 'generator' ); // including svg-generator.php file for connecting social media icons ?>

<header id=main-head class=main-head>
	<div class=container>
		<div class=row>
			<?php $siteLogo = get_field('site_logo', 'option'); ?>
			<a id=logo href="<?php echo site_url(); ?>"><img src="<?php echo $siteLogo['url']; ?>" alt="<?php echo $siteLogo['alt']; ?>"></a><!--<div class="sn">-->

			<div class="social-info clearfix">
				<ul class=social>
					<li class=hidden-md-up>
						<a href="">
							<span>
								<svg>
									<use xlink:href=#icon-mobile></use>
								</svg>
							</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('facebook', 'option'); ?>">
							<span>
								<svg>
									<use xlink:href=#icon-facebook></use>
								</svg>
							</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('twitter', 'option'); ?>">
							<span>
								<svg>
									<use xlink:href=#icon-twitter></use>
								</svg>
							</span>
						</a>
					</li>
					<li>
						<a href="<?php echo get_field('instagram', 'option'); ?>">
							<span>
								<svg>
									<use xlink:href=#icon-insta></use>
								</svg>
							</span>
						</a>
					</li>
					<li class="hidden-md-up icon-nav">
						<a href="">
							<span>
								<svg>
									<use xlink:href=#icon-nav></use>
								</svg>
							</span>
						</a>
					</li>
				</ul>
				<a href="tel:<?php echo preg_replace( '/[^+0-9]/', '', get_field('cell_phone','option') ); ?>" class="phone hidden-md-down"><?php echo get_field('cell_phone', 'option'); ?></a>
			</div>
			<!--/ .social-info-->

			<div class=main-nav-wrap>
			  <nav class=main-nav>
				<?php
					$args = array(
						'theme_location' => 'primary',
						'menu_class' => 'menu-primary',
						'container' => 'div',
						'container_class' => 'primary-menu'
					);
					wp_nav_menu( $args );
				?>                     
			  </nav>
			  <!--/.main-nav-->
			</div>
			<!--/.main-nav-wrap--><!--</div>--><!--/ .sn-->

		</div>
		<!--/.row-->
	</div>
	<!--/.container-->
</header>

<?php
	if( is_page_template('templates/page-home.php') )
		get_template_part( 'template-parts/home-templates/banner', 'section' );
	else
		get_template_part( 'template-parts/banner', 'template' );

?>