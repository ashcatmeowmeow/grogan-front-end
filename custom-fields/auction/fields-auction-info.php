<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'AUCTION_INFO_FIELDS_register_meta_boxes' );

function AUCTION_INFO_FIELDS_register_meta_boxes( $meta_boxes )
{	
	
	$box_prefix = 'AUCTION_INFO_INTRO';
	$meta_boxes[] = array(
		'title'  => 'info',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-auction-info.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_tiles_group($box_prefix, 'auction summary', 1),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'exhibition hours', 2),
		),
	);
	
    return $meta_boxes;
}
?>