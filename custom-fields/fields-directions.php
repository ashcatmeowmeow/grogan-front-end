<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'DIRECTIONS_FIELDS_register_meta_boxes' );

function DIRECTIONS_FIELDS_register_meta_boxes( $meta_boxes )
{	

	$box_prefix = 'DIRECTIONS_MAP';
	$meta_boxes[] = array(
		'title'  => 'map text',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-directions.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);

	$box_prefix = 'DIRECTIONS_DIRECTIONS';
	$meta_boxes[] = array(
		'title'  => 'directions',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-directions.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'directions intro'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'directions', 1),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'transit', 2),
		),
	);	
	
    return $meta_boxes;
}
?>