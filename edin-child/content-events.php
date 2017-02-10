<?php
/**
 * @package Edin
 */
?>


<div class="fullpost">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">

			<div class="sharebar">
				<h4> Share Button & Like Bar </h4>
			</div>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( edin_get_link_url() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php edin_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

			<div class="fixedimage">

				<?php
					if ( 'post' == get_post_type() ) {
						edin_post_thumbnail();
					}
				?>

			</div>
		</header><!-- .entry-header -->



		<!-- HIDING THE FOLLOWING CONTENT: MAP,

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post. Visible to screen readers only. */
				the_content( sprintf(
					__( 'Continue reading %s', 'edin' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links">' . __( 'Pages:', 'edin' ),
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php edin_entry_meta(); ?>
		</footer><!-- .entry-footer -->
	
	</article><!-- #post-## -->

		</div>


