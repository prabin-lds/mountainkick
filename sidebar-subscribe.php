<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mountainkick
 */

if ( ! is_active_sidebar( 'subscribe' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'subscribe' ); ?>
</aside><!-- #secondary -->
