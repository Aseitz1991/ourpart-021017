<?php
/**
 * Template Name: Custom Home Page
 *
 * @package Edin
 */

get_header(); ?>


		<div class="home search">

			<h1> WELCOME TO OUR PART </h1>

			<img src="http://placehold.it/1920x800">

			

		</div>

	<?php rewind_posts(); ?>
	

	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() ) {
							comments_template();
						}
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .content-wrapper -->

<?php get_footer(); ?>