<?php
$highlights_multi_tile_presets = array(
	'has_dummy_content' => false,
	'has_tile_tags'     => false,
	'has_lots_button'   => false,
	'has_pages'         => false,
	'is_past_auction'   => true,
	'highlights'        => true,
);
$preset_config_merge = array_merge($highlights_multi_tile_presets, $config);
echo render( 
	ORGANISMS.'/auction/catalog-multi-tile.php', 
	array(), 
	$preset_config_merge,
	$META_ID
);
?>