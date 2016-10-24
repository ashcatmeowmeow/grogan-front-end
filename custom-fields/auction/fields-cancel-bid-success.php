<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'EDIT_BID_register_meta_boxes' );

function EDIT_BID_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'THANKS_CANCEL_BID';
	$meta_boxes[] = array(
		'title'  => 'cancel bid',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-cancel-bid-success.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>