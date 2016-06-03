<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wpfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_post_thumbnail('thumbnail'); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			} ?>
	</header><!-- .entry-header -->

	<footer class="entry-footer">
		<?php wpfolio_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
