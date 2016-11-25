<?php // Template Name: Home ?>
<?php get_header(); ?>

<?php	
	get_template_part( 'template-parts/home-templates/aboutus', 'section' );
	get_template_part( 'template-parts/home-templates/wheretogo', 'section' );
	get_template_part( 'template-parts/home-templates/whattodo', 'section' );
	get_template_part( 'template-parts/home-templates/departuredate', 'section' );
	get_template_part( 'template-parts/home-templates/toptrips', 'section' );
	get_template_part( 'template-parts/contactmessage', 'section' );
	get_template_part( 'template-parts/blog-templates/recentblog', 'section' );
?>


<?php get_footer(); ?>