<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package BoldGrid
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title alt-font">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			the_post_thumbnail();
		} 
		?>
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'boldgrid' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="container">
			<?php edit_post_link( __( 'Edit', 'boldgrid' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
