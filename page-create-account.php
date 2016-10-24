<?php
/*
Template Name: create account
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
?>

<?php
echo render( 
	MOLECULES.'/forms/form.php', 
	array(
		'title'              => 'Create Account',
		'form_shortcode'     => '[gravityform id="1" title="false" description="false"]',
	),
	array(
		'constrained_width'  => 2
	)
);
?>

<?php get_footer(); ?>