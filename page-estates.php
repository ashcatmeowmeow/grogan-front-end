<?php
/*
Template Name: estates
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
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'  => 2, 
		'number_of_rows'   => 1, 
	), 
	"ESTATES_SERVICES_"
);
?>

<?php get_footer('contact'); ?>