<?php
$catalog_multi_tile_presets = 	array(
	'tiles_per_row'                  => 3, 
	'number_of_rows'                 => 3, 
	'tile_image_double_lockup'       => true,
	'image_width'                    => 'constrained',
	'image_alignment'                => 'center',
	'image_is_linked'                => true,
	'has_lots'                       => true,
	'has_lots_button'                => true,
	'has_cards'                      => true,
	'has_anchors'                    => true,
	'anchor_weight'                  => 'bold',
	'text_block_alignment_classes'   => 'text-left',
	'has_button_container'           => true,
	'button_alignment_classes'       => 'text-center-xs text-center-is text-left-sm text-center-md text-center-lg text-center-xl',
	'is_other_art'                   => true,
	'has_tile_tags'                  => true,
	'has_dummy_content'              => true,
	'no_container'                   => true,
	'has_pages'                      => true,
);
$preset_config_merge = array_merge($catalog_multi_tile_presets, $config);
echo render( 
	ORGANISMS.'/lockups/multi-tile.php', 
	array(), 
	$preset_config_merge,
	$META_ID
);
?>