<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php echo __( 'Post comments', 'bilevel' ); ?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'type'  => 'comment',
					'callback'  => 'bilevel_comment',
				) );
			?>
		</ol>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'bilevel' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'bilevel' ) . '</span>',
		) );

	endif;

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bilevel' ); ?></p>
	<?php
	endif;

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
	  'author' =>
	    '<div class="row"><p class="comment-form-author col-sm-4"><label for="author">' . __( 'Name', 'bilevel' ) . '</label> ' .
	    ( $req ? '<span class="required">*</span>' : '' ) .
	    '<input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'email' =>
	    '<p class="comment-form-email col-sm-4"><label for="email">' . __( 'Email', 'bilevel' ) . '</label> ' .
	    ( $req ? '<span class="required">*</span>' : '' ) .
	    '<input id="email" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'url' =>
	    '<p class="comment-form-url col-sm-4"><label for="url">' . __( 'Website', 'bilevel' ) . '</label>' .
	    '<input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) .
	    '" size="30" /></p></div>',
	);

	$args = array(
	  'id_form'           => 'commentform',
	  'class_form'      => 'comment-form',
	  'id_submit'         => 'submit',
	  'class_submit'      => 'submit btn btn-default',
	  'name_submit'       => 'submit',
	  'title_reply'       => __( 'Leave a Comment' ),
	  'title_reply_to'    => __( 'Leave a Reply to %s' ),
	  'cancel_reply_link' => __( 'Cancel Comment' ),
	  'label_submit'      => __( 'Post Comment' ),
	  'format'            => 'xhtml',

	  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) .
	    '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control">' .
	    '</textarea></p>',

	  'must_log_in' => '<p class="must-log-in">' .
	    sprintf(
	      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
	      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
	    ) . '</p>',

	  'logged_in_as' => '<p class="logged-in-as">' .
	    sprintf(
	    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
	      admin_url( 'profile.php' ),
	      $user_identity,
	      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
	    ) . '</p>',

	  'comment_notes_before' => '<p class="comment-notes">' .
	    __( 'Your email address will not be published.' ) .
	    '</p>',

	  'comment_notes_after' => '<p class="form-allowed-tags">' .
	    sprintf(
	      __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
	      ' <code>' . allowed_tags() . '</code>'
	    ) . '</p>',

	  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	);

	comment_form($args);
	?>

</div><!-- #comments -->
