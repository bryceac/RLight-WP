<section id="comments"> <!-- change comment area to section -->

	<?php // retrieve comments
 		$comments = get_comments(array(
			'post_id' => XXX,
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		if ($comments) { ?>
	<ul>
	<?php
	wp_list_comment(array (
		'max_depth' => '6',
		'style' => 'ul'
	)); 
	?>
	</ul>
<?php } else { ?>
	<p>No comments found for article.</p>
<?php } ?>

	<?php comment_form(); ?>

</section><!-- close comment area -->
