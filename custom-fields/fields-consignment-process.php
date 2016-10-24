<?php
add_filter( 'rwmb_meta_boxes', 'CONSIGNMENT_PROCESS_FIELDS_register_meta_boxes' );

function CONSIGNMENT_PROCESS_FIELDS_register_meta_boxes( $meta_boxes )
{
	$box_prefix = 'CONSIGNMENT_PROCESS_TEXT';
	$meta_boxes[] = array(
		'title'  => 'process',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-consignment-process.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);

    return $meta_boxes;
}
?>