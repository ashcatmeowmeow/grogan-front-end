<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'SPECIALTIES_FIELDS_register_meta_boxes' );

function SPECIALTIES_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'SPECIALTIES_SPECIALTIES';
	$meta_boxes[] = array(
		'title'      => 'specialties',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-specialties.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'intro'),
			Field_modules_w_fix::create_clone_tiles_group($box_prefix, 'specialties'),
		),
	);
	
    return $meta_boxes;
}
?>