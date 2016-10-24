<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'ABOUT_register_meta_boxes' );

function ABOUT_register_meta_boxes( $meta_boxes )
{	
	
	$box_prefix = 'ABOUT_INTRO';
	$meta_boxes[] = array(
		'title'  => 'about intro',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-about.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>