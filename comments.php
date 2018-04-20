<section id="comments"> <!-- change comment area to section -->

	<?php
	// get only approved comments
	$args = array(
		'status' => 'approved'
	);

	// comment query, based on Wordpress developer handbook
	$comments_query = new WP_Comment_Query;
	$comments = $comments_query->query( $args );

	// retrieve comments
	if ( $comments ) { ?>
		<ol>
		<?php foreach ($comments as $comment ) { ?>

		<?php }
	} else { ?>

	<?php } ?>

	<?php comment_form(); ?>

</section><!-- close comment area -->
