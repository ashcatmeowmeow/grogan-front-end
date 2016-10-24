<?php
add_filter( 'rwmb_meta_boxes', 'CONSIGNMENT_FIELDS_register_meta_boxes' );

function CONSIGNMENT_FIELDS_register_meta_boxes( $meta_boxes )
{

	$box_prefix = 'CONSIGNMENT_OPTIONS_';
	$meta_boxes[] = array(
		'title'      => 'consignment options',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-consignment.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'intro'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'consignment option 1', '1'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'consignment option 2', '2'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'consignment option 3', '3'),
		),
	);

	$box_prefix = 'CONSIGNMENT_PROCESS_';
	$meta_boxes[] = array(
		'title'  => 'process',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-consignment.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);

    return $meta_boxes;
}
?>