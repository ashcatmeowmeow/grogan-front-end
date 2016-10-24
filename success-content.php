<?php
/*
Template Name: success content
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
	'SUCCESS_TEXT'
);

?>

<?php get_footer(); ?>