<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'BID_PAGE_FIELDS_register_meta_boxes' );

function BID_PAGE_FIELDS_register_meta_boxes( $meta_boxes )
{		
	$box_prefix = 'INVALUABLE_BID';
	$meta_boxes[] = array(
		'title'  => 'invaluable bid',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-bid-page.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
    return $meta_boxes;
}
?>