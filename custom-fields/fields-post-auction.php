<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'POST_AUCTION_FIELDS_register_meta_boxes' );

function POST_AUCTION_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'POST_AUCTION_SHIPPING';
	$meta_boxes[] = array(
		'title'  => 'shipping intro',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-post-auction.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'POST_AUCTION_SHIPPERS';
	$meta_boxes[] = array(
		'title'  => 'shippers copy',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-post-auction.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);

	$box_prefix = 'POST_AUCTION_SHIPPING_FORM';
	$meta_boxes[] = array(
		'title'  => 'shipping form intro',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-post-auction.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'POST_AUCTION_SHIPPING_NOTE';
	$meta_boxes[] = array(
		'title'  => 'shipping note',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-post-auction.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'POST_AUCTION_RESELLING';
	$meta_boxes[] = array(
		'title'  => 'reselling intro',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-post-auction.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);

	
    return $meta_boxes;
}
?>