<?php
get_header(); ?>

	<!-- this is just for the header of Category (ex: Activities, Events & Meetups) -->



	<div class="hero <?php echo edin_additional_class(); ?>">
		<?php if ( have_posts() ) : ?>

			<div class="hero-wrapper">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();
					endif;
					?>
				</h1>
			</div>

		<?php else : ?>
			<div class="title-wrapper">
				<h1 class="page-title"><?php _e( 'Nothing Found', 'edin' ); ?></h1>
			</div>
		<?php endif; ?>
	</div><!-- .hero -->



	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">



				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<!--content-events.php file test - 021017 -->

						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content-events', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php edin_paging_nav(); ?>

				<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>