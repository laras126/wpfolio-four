<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php get_sidebar('footer'); ?>
    <nav class="site-footer-menu">
      <?php wp_nav_menu(
          array(
            'theme_location' => 'footer',
            'menu_id' => 'footer-menu'
          )
        ); ?>
    </nav>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpfolio' ), 'wpfolio', '<a href="http://notlaura.com" rel="designer">Lara Schenck</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
