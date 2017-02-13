<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Edin
 */
?>

	<li><?php printf( __( 'Hello %s', 'wpuf' ), $user->user_name ); ?></li>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
	<?php endif; ?>

</div><!-- .content-wrapper -->
