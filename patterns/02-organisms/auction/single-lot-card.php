<?php
$single_lot_card_presets = array(
	'col_center'                 => true,
	'tiles_per_row'              => 1, 
	'number_of_rows'             => 1, 
	'has_pages'                  => false,
	'tile_col_classes'           => 'col-xs-12 constrained-2',
	'image_width'                => 'small',
);
$preset_config_merge = array_merge($single_lot_card_presets, $config);
echo render( 
	ORGANISMS.'/auction/catalog-multi-tile.php',
	array(),
	$preset_config_merge
);
?>