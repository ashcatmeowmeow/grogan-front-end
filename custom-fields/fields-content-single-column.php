<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'CONTENT_SINGLE_COLUMN_register_meta_boxes' );

function CONTENT_SINGLE_COLUMN_register_meta_boxes( $meta_boxes )
{	
	
	$box_prefix = 'CONTENT_SINGLE_COLUMN_COPY';
	$meta_boxes[] = array(
		'title'  => 'content',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'content-single-column.php', 'content-single-column-no-hero.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    return $meta_boxes;
}
?>