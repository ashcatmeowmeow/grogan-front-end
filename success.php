<?php
/*
Template Name: success
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
	array(
		'success_links' => true,
	), 
	'SUCCESS_TEXT'
);

?>

<?php get_footer(); ?>