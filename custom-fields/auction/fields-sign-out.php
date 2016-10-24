<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'SIGN_OUT_register_meta_boxes' );

function SIGN_OUT_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'SIGN_OUT';
	$meta_boxes[] = array(
		'title'  => 'sign out',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-sign-out.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>