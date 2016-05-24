<?php
/**
 * Main sidebar containing widget areas.
 *
 * @package BoldGrid
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php do_action( 'boldgrid_sidebar_before' ); ?>
<div id="secondary" class="widget-area" role="complementary">
<?php do_action( 'boldgrid_sidebar_top' ); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
<?php do_action( 'boldgrid_sidebar_bottom' ); ?>
</div><!-- #secondary -->
<?php do_action( 'boldgrid_sidebar_after' ); ?>
