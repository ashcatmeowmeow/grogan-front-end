<?php
/*
Template Name: consignment
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
		'tiles_per_row'  => 3, 
		'number_of_rows'   => 1, 
		'text_block_alignment_classes'   => 'text-center',
	), 
	"CONSIGNMENT_OPTIONS_"
);
?>

<div class = 'module'>
<?php
echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'bg_color'  => 'secondaryColor-bg', 
	), 
	'CONSIGNMENT_PROCESS_'
);
?>
</div>
<?php get_footer('submit-images'); ?>