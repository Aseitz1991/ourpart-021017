<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Edin
 */

get_header(); ?>

	<div class="content-wrapper clear">

		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

								<!-- LikeBtn.com BEGIN -->
					<span class="likebtn-wrapper" data-theme="custom" data-icon_l="hrt6" data-icon_l_c_v="#2705fb" data-identifier="item_1" data-dislike_enabled="false" data-icon_dislike_show="false" data-popup_disabled="true"></span>
					
					<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
					<!-- LikeBtn.com END -->

					<?php
						if ( 'jetpack-testimonial' === get_post_type() ) {
							get_template_part( 'content', 'testimonial' );
						} else {
							get_template_part( 'content', 'single' );
						}
						?>

					<?php edin_post_nav(); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( ( comments_open() || '0' != get_comments_number() ) && 'jetpack-testimonial' != get_post_type() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php get_footer(); ?>