<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'FORGOT_PASSWORD_register_meta_boxes' );

function FORGOT_PASSWORD_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'FORGOT_PASSWORD';
	$meta_boxes[] = array(
		'title'  => 'forgot password',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-forgot-password.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>