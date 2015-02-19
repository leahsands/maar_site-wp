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

<div id="comments">

	<?php if ( have_comments() ) : ?>

	<h3 class="comments-title" style="margin-bottom: 12px;">
		<?php
			printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'MAAR2014' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h3>

	<div class="comment-list">
		<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
				'reverse_top_level' => true
			) );
			
		?>
	</div><!-- .comment-list -->

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'MAAR2014' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<ul class="row">

		<?php $comment_args = array( 'title_reply'=>'Add a comment',

			'fields' => apply_filters( 'comment_form_default_fields', array(

			'author' => '<li class="comment-form-author field">' .

		        '<input id="author" class="input text narrow" name="author" placeholder="Your Name *" type="text" value="' . esc_attr( $commenter['comment_author'] ) . $aria_req . '" /></li>',   

		    'email'  => '<li class="comment-form-email field">' .

		                '<input class="input text narrow email" id="email" name="email" type="text" placeholder="Your Email *" value="' . esc_attr(  $commenter['comment_author_email'] ) . $aria_req . '" />'.'</li>',

		    'url'    => '' ) ),

		    'comment_field' => '<li class="field">' .

		                '<textarea id="comment" class="textarea input wide" name="comment" aria-required="true" placeholder="Comment away!"></textarea>' .

		                '</li>',

		    'comment_notes_after' => '',

		);

		comment_form($comment_args); ?>
	</ul>

</div><!-- #comments -->
