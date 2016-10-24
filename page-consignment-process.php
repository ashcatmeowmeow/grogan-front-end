<?php
/*
Template Name: consignment process
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
?>

<?php
echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'text_block_alignment_classes'   => 'text-left',
	), 
	'CONSIGNMENT_PROCESS_TEXT'
);
?>
<?php get_footer('submit-images'); ?>