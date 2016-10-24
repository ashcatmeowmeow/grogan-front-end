<?php
/*
Template Name: content single column
*/
?>



<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => true,
		'has_navigation'   => true,
	)
);

echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'text_block_alignment_classes'   => 'text-left',
		'has_button_container'           => true,
		'button_alignment_classes'       => 'text-center',
	), 
	'CONTENT_SINGLE_COLUMN_COPY'
);
?>

<?php get_footer(); ?>