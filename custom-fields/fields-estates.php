<?php
add_filter( 'rwmb_meta_boxes', 'ESTATES_FIELDS_register_meta_boxes' );

function ESTATES_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'ESTATES_SERVICES_';
	$meta_boxes[] = array(
		'title'      => 'estates services',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-estates.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'intro'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'broom clean', '1'),
			Field_modules_w_fix::create_tiles_group($box_prefix, 'other services', '2'),
		),
	);
	
    return $meta_boxes;
}
?>