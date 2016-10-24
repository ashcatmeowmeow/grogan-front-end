<?php
$multi_tile_presets = array(
	'header_level'                   => 3,
	'header_alignment'               => 'center',
	'tile_image_double_lockup'       => true,
	'image_width'                    => 'small',
	'image_alignment'                => 'center',
	'text_block_alignment_classes'   => 'text-left',
	'has_button_container'           => true,
	'button_alignment_classes'       => 'text-center',
);
$preset_config_merge = array_merge($multi_tile_presets, $config);
echo render( 
	ORGANISMS.'/lockups/multi-tile.php', 
	array(), 
	$preset_config_merge,
	$META_ID
);
?>