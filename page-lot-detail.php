<?php
/*
Template Name: lot detail
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
	TEMPLATES.'/auction/lot-detail.php',
	array(),
	array(
		'is_logged_in' => false,
		'is_fine_art'  => true,
	)
); 
?>

<?php get_footer(); ?>