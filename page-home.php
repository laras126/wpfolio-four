<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page-home' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.

			$query = new WP_Query( array( 'tag' => 'featured' ) );
			while ( $query->have_posts() ) : $query->the_post();

				echo '<h1>' . the_title() . '</h1>';

			endwhile; // End of the loop.

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
