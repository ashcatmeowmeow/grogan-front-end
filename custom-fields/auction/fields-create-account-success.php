<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'CREATE_ACCOUNT_SUCCESS_register_meta_boxes' );

function CREATE_ACCOUNT_SUCCESS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'THANKS_CATALOG_';
	$meta_boxes[] = array(
		'title'  => 'thanks for signing up - would you like to browse?',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-create-account-success.php'),
		),
		'fields' => array(
			Field_modules::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>