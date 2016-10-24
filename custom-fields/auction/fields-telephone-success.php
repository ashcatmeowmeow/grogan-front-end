<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'TELEPHONE_SUCCESS_register_meta_boxes' );

function TELEPHONE_SUCCESS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'THANKS_TELEPHONE_';
	$meta_boxes[] = array(
		'title'  => 'thanks for telephone bidding',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-telephone-success.php'),
		),
		'fields' => array(
			Field_modules::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>