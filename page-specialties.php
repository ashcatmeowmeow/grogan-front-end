<?php
/*
Template Name: specialties
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

<div class = 'specialties-multi-tile'>
<?php
echo render( 
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'                  => 3, 
		'image_width'                    => 'medium',
		'text_block_alignment_classes'   => 'text-center',
	), 
	"SPECIALTIES_SPECIALTIES"
);
?>
</div>

<?php get_footer(); ?>