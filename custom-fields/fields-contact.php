<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'CONTACT_FIELDS_register_meta_boxes' );

function CONTACT_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'CONTACT_INFO';
	$meta_boxes[] = array(
		'title'  => 'contact info',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-contact.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>