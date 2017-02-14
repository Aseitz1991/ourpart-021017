<?php
/**
 * @package Edin
 */
?>


<div class="fullpost">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="sharebar">
				<!-- <h4> Share Button & Like Bar </h4> -->
				<!-- I got these buttons from simplesharebuttons.com -->
				<div id="share-buttons">
				    <!-- Facebook -->
				    <a href="http://www.facebook.com/sharer.php?u=https://simplesharebuttons.com" target="_blank">
				        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
				    </a>
				   
				    <!-- Pinterest -->
				    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
				        <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
				    </a>

				    <!-- Twitter -->
				    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
				        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
				    </a>
				</div>

				<!-- LikeBtn.com BEGIN -->
					<span class="likebtn-wrapper" data-theme="custom" data-icon_l="hrt6" data-icon_l_c_v="#2705fb" data-identifier="item_1" data-dislike_enabled="false" data-icon_dislike_show="false" data-popup_disabled="true"></span>
					
					<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
					<!-- LikeBtn.com END -->
		</div>

		<header class="entry-header">
				<div class="event-box">
					<div class="event-box-meta">

				<h1><?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( edin_get_link_url() ) ), '</a></h2>' ); ?> </h1>
				</div>

			<!-- The Fixed Image -->
			<div class="eventd-image">

			<div class="fixedimage">
				<?php
					if ( 'post' == get_post_type() ) {
						edin_post_thumbnail();
					}
				?>
			</div>
		</div>


				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php edin_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>

		



		</header><!-- .entry-header -->



		<!-- HIDING THE FOLLOWING CONTENT: MAP, AGE, DESCRIPTION

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

		<!-- This is where the Descriptions under the titles go -->

		<div class="description">

		<?php echo get_post_meta( $post->ID, 'date', true ); ?> <br>

		</div>

		<footer class="entry-footer">
			<?php edin_entry_meta(); ?>
		</footer><!-- .entry-footer -->
	
	</article><!-- #post-## -->

		</div>




