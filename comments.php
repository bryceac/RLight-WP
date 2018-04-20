<section id="comments"> <!-- change comment area to section -->

	<?php
	// get only approved comments
	$args = array(
		'post_id' => XXX,
		'status' => 'approved'
	);

	// comment query, based on Wordpress developer handbook
	$comments_query = new WP_Comment_Query;
	$comments = $comments_query->query( $args );

	// retrieve comments, if available
	if ( $comments ) { ?>
		<ul>
		<?php foreach ($comments as $comment ) { ?>
			<li><?php echo $comment->content; ?></li>
		<?php } ?>
		</ul>
	<?php } else { ?>
			<p>No comments can be found for this article.</p>
	<?php } ?>

	<?php comment_form(); ?>

</section><!-- close comment area -->
