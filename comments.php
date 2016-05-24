<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package BoldGrid
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required(  ) ) {
	return;
}
?>

<?php do_action( 'boldgrid_comments_before' ) ?>
<?php do_action( 'boldgrid_comments' ) ?>
<?php do_action( 'boldgrid_comments_after' ) ?>
