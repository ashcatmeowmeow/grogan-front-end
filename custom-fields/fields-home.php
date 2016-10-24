<?php
add_filter( 'rwmb_meta_boxes', 'HOME_FIELDS_register_meta_boxes' );

function HOME_FIELDS_register_meta_boxes( $meta_boxes )
{	

	$box_prefix = 'HOME_INTRO';
	$meta_boxes[] = array(
		'title'  => 'introduction',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-home.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'HOME_MISC';
	$meta_boxes[] = array(
		'title'  => 'home misc',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-home.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'HOME_SELLING';
	$meta_boxes[] = array(
		'title'  => 'selling',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-home.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'selling intro'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'selling option 1', 1),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'selling option 2', 2),
		),
	);
	
	$box_prefix = 'HOME_SPECIALTIES';
	$meta_boxes[] = array(
		'title'  => 'specialties',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-home.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'intro')
		),
	);
	
	$box_prefix = 'HOME_BIDDING';
	$meta_boxes[] = array(
		'title'  => 'bidding',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-home.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>