<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'ACCOUNTS_NO_RESULTS_register_meta_boxes' );

function ACCOUNTS_NO_RESULTS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'ACCOUNTS_NO_RESULTS_TEXT';
	$meta_boxes[] = array(
		'title'  => 'success text',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'account-page-no-results.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>