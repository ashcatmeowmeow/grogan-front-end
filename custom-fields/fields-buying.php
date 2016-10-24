<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'BUYING_FIELDS_register_meta_boxes' );

function BUYING_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'BUYING_BIDDING_OPTIONS';
	$meta_boxes[] = array(
		'title'  => 'bidding options',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'bidding options intro'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'bidding option 1', 1),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'bidding option 2', 2),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'bidding option 3', 3),
		),
	);	

	$box_prefix = 'BUYING_SHIPPING';
	$meta_boxes[] = array(
		'title'  => 'shipping',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'BUYING_SHIPPING_NOTE';
	$meta_boxes[] = array(
		'title'  => 'shipping note',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'BUYING_CTA';
	$meta_boxes[] = array(
		'title'  => 'buying cta',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>