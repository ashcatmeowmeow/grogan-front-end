<?php
/*
Template Name: buying
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
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'            => 3, 
		'number_of_rows'           => 1, 
	), 
	"BUYING_BIDDING_OPTIONS"
);

echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'bg_color'                 => 'secondaryColor-bg',
	),
	"BUYING_SHIPPING"
);
?>

<?php get_footer(); ?>