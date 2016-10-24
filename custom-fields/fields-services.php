<?php
add_filter( 'rwmb_meta_boxes', 'SERVICES_FIELDS_register_meta_boxes' );

function SERVICES_FIELDS_register_meta_boxes( $meta_boxes )
{
    
	$box_prefix = 'SERVICES_OPTIONS_';
	$meta_boxes[] = array(
		'title'  => 'options',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-services.php'),
		),
		'fields' => array(
			Field_modules::create_tiles_group($box_prefix, 'consignment', '1'),
			Field_modules::create_tiles_group($box_prefix, 'estate services', '2'),
		),
	);
	
	$box_prefix = 'SERVICES_APPRAISALS';
	$meta_boxes[] = array(
		'title'  => 'appraisals',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-services.php'),
		),
		'fields' => array(
			Field_modules::create_text_block_group($box_prefix, '#'),
		),
	);

    return $meta_boxes;
}
?>