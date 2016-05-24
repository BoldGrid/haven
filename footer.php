<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BoldGrid
 */
?>
	</div><!-- #content -->
	<?php do_action( 'boldgrid_content_after' ); ?>
	<?php do_action( 'boldgrid_footer_before' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo" <?php BoldGrid_Framework_Schema::footer( true );?>>
		<div class="container">
		<?php do_action( 'boldgrid_footer_top' ); ?>
			<div class="row">
				<div class="col-md-12">
					<div class="site-info">
						<?php dynamic_sidebar( 'boldgrid-widget-3' ); ?>
					</div><!-- .site-info -->
				</div><!-- .col -->
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<?php do_action( 'boldgrid_menu_footer_center' ); ?>
				</div><!-- .col -->
			</div><!-- .row -->
			<div id='attribution' class="row">
				<div class="col-md-12">
					<div class="attribution">
						<?php do_action( 'boldgrid_display_attribution_links' ); ?>
					</div><!-- .attribution -->
				</div><!-- .col -->
			</div><!-- .row -->
			<?php do_action( 'boldgrid_footer_bottom' ); ?>
		</div><!-- .container -->
	</footer><!-- #colophon -->
	<?php do_action( 'boldgrid_footer_after' );	?>
</div><!-- #page -->
<?php wp_footer(); ?>
<?php do_action( 'boldgrid_body_bottom' ); ?>
</body>
</html>
