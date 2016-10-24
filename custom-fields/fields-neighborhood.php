<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'NEIGHBORHOOD_FIELDS_register_meta_boxes' );

function NEIGHBORHOOD_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'NEIGHBORHOOD_FIELDS_INTRO';
	$meta_boxes[] = array(
		'title'  => 'the neighborhood intro',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-neighborhood.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'neighborhood intro'),
		),
	);	
	
	$box_prefix = 'NEIGHBORHOOD_FIELDS_HOTELS';
	$meta_boxes[] = array(
		'title'  => 'vendors',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-neighborhood.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'vendors intro'),
			Field_modules_w_fix::create_business_group($box_prefix, 'vendors'),
		),
	);	

    return $meta_boxes;
}
?>