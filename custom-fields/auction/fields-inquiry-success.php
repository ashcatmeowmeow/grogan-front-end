<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'INQUIRY_SUCCESS_register_meta_boxes' );

function INQUIRY_SUCCESS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'THANKS_INQUIRY_';
	$meta_boxes[] = array(
		'title'  => 'thanks for inquiring',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-inquiry-success.php'),
		),
		'fields' => array(
			Field_modules::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>