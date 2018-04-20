<section id="comments"> <!-- change comment area to section -->

	<?php // retrieve comments
 		$comments = get_approved_comments($post>ID);

		if ($comments) { ?>
	<ul>
	<?php foreach($comments as $comment) { ?>
			<li><?php echo $comment->content; ?></li>
		<?php } ?>
	</ul>
<?php } else { ?>
	<p>No comments found for article.</p>
<?php } ?>

	<?php comment_form(); ?>

</section><!-- close comment area -->
