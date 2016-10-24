<?php
/*
Template Name: cancel bid success
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_navigation' => true,
		'has_hero'       => false
	)
);

echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(), 
	'THANKS_CANCEL_BID'
);

?>

<?php get_footer(); ?>