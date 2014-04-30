<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area gen-div-inner">

	<?php if ( have_comments() ) : ?>

	<h4 class="comments-title">
		<?php
			printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'MAAR2014' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h4>

	<ul class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'reverse_top_level' => true
			) );
			
		?>
	</ul><!-- .comment-list -->

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'MAAR2014' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
