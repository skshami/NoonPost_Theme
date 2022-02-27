<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package noonpost
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
	
<div class="widget mb-50">
	<div class="title">
		<h5><?php printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'noonpost' ), number_format_i18n( get_comments_number() ) );?></h5>
	</div>
	
	<?php wp_list_comments( 'type=comment&callback=noonpost_commnets' ); ?>
	<!--Leave-comments-->

	<div class="comment-form">

		<?php 

			//Declare Vars
			$comment_send = 'Post Comment';
			$comment_reply = 'Leave a Reply';
			$comment_reply_to = 'Reply';

			$comment_author = 'Name';
			$comment_email = 'EMail';
			$comment_body = 'Write Comment';
			$comment_url = 'Website';
			$comment_cookies_1 = 'save my name, email and website in this browser for the next time I comment.';
			$comment_cookies_2 = ' ';

			$comment_before = 'Your email adress will not be published, Requied fileds are marked*.';

			$comment_cancel = 'Cancel Reply';


			//Array
			$comments_args = array(
			//Define Fields
			'fields'               => array(
			//Author field
			'author'  => '<div class="col-md-6"><div class="form-group"><input id="author" class="form-control" name="author" aria-required="true" placeholder="' . $comment_author . '"></input></div></div>',
			//Email Field
			'email'   => '<div class="col-md-6"><div class="form-group"><input id="email" class="form-control" name="email" placeholder="' . $comment_email . '"></input></div></div>',
			//URL Field
			'url'     => '<div class="col-12 mb-20"> <div class="form-group"><input id="url" class="form-control" name="url" placeholder="' . $comment_url . '"></input></div></div></div>',
			//Cookies
			'cookies' => '<input type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',		
			),
			// Change the title of send button
			'label_submit'         => __( $comment_send ),
			// Change the title of the reply section
			'title_reply'          => __( $comment_reply ),
			// Change the title of the reply section
			'title_reply_to'       => __( $comment_reply_to ),
			//Cancel Reply Text
			'cancel_reply_link'    => __( $comment_cancel ),
			// Redefine your own textarea (the comment body).
			'comment_field'        => '<p class="comment-form-comment"><br /><div class="row"><div class="col-md-12"><div class="form-group"><textarea id="comment" class="form-control w-100" name="comment" cols="30" rows="5" aria-required="true" placeholder="' . $comment_body . '"></textarea></div></div></p>',
			//Message Before Comment
			'comment_notes_before' => __( $comment_before ),
			// Remove "Text or HTML to be displayed after the set of comment fields".
			'comment_notes_after'  => '',
			//Submit Button ID
			'id_submit'            => __( 'comment-submit' ),
			//Submit Butto Class
			'class_submit'         => __( 'btn-custom' ),
			);
			comment_form( $comments_args );


		?>
		
	</div>
</div>