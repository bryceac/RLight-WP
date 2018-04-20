<section id="comments"> <!-- change comment area to section -->

	<?php // retrieve comments
 		$comments = get_comments(array(
			'post_id' => $post->ID,
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		if ($comments) { ?>
	<ul>
	<?php foreach($comments as $comment) { ?>
			<li><?php $comment->content; ?></li>
		<?php } ?>
	</ul>
<?php } else { ?>
	<p>No comments found for article.</p>
<?php } ?>

	<?php comment_form(); ?>

</section><!-- close comment area -->
