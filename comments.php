<section id="comments"> <!-- change comment area to section -->

	<?php // retrieve comments
 		$comments = get_approved_comments($post>ID);

		if ($comments) { ?>
	<ul>
	<?php foreach($comments as $comment) { ?>
			<li>
			<article>
			<header>
			<?php if ($comment->comment_author_url) { ?>
			<a href="<?php echo $comment->comment_author_url; ?>" rel="nofollow"><h3><?php echo $comment->comment_author; ?></h3></a>
			<?php } else { ?>}
			<h3><?php echo $comment->get_comment_author; ?></h3>
			<?php } ?>
			<time datetime="<?php echo $comment->comment_date; ?>"><?php echo $comment->get_comment_date; ?></time>
			</header>
			<?php echo $comment->comment_content; ?>
			</article>
			</li>
		<?php } ?>
	</ul>
<?php } else { ?>
	<p>No comments found for article.</p>
<?php } ?>

	<?php comment_form(); ?>

</section><!-- close comment area -->
