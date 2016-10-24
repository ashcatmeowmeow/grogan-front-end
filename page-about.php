<?php
/*
Template Name: about
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
	'ABOUT_INTRO'
);
?>

<?php get_footer(); ?>