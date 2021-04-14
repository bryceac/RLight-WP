<section id="comments"> <!-- change comment area to section -->

	<?php // retrieve comments
 		$comments = get_approved_comments($post->ID);

		if ($comments) { ?>
	<ul>
	<?php foreach($comments as $comment) { ?>
			<li>
			<article class="comment">
			<header>
			<?php if ($comment->comment_author_url) { ?>
			<h3><a href="<?php echo $comment->comment_author_url; ?>" rel="nofollow"><?php echo $comment->comment_author; ?></a></h3>
			<?php } else { ?>}
			<h3><?php echo $comment->get_comment_author; ?></h3>
			<?php } ?>
			<p><time datetime="<?php echo $comment->comment_date; ?>"><?php echo $comment->comment_date; ?></time></p>
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
