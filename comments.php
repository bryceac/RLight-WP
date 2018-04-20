<section id="comments"> <!-- change comment area to section -->

	<?php // retrieve comments ?>
	<ul>
	<?php
	wp_list_comment(array (
		'max_depth' => '6',
		'style' => 'ul'
	)); 
	?>
	</ul>

	<?php comment_form(); ?>

</section><!-- close comment area -->
