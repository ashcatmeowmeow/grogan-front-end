<?php
/*
Template Name: neighborhood
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
		'tiles_per_row'                  => 3, 
		'text_block_alignment_classes'   => 'text-center',
	), 
	"NEIGHBORHOOD_FIELDS_HOTELS"
);

echo render( 
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'                  => 3, 
		'text_block_alignment_classes'   => 'text-center',
	), 
	"NEIGHBORHOOD_FIELDS_RESTAURANTS"
);

?>



<?php get_footer(); ?>