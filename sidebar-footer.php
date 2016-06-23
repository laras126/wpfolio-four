<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpfolio
 */

if ( ! is_active_sidebar( 'footer' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area row center-xs" role="complementary">
	<?php dynamic_sidebar( 'footer' ); ?>
</aside><!-- #secondary -->
