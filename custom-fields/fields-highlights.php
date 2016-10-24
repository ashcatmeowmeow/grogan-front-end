<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'HIGHLIGHTS_FIELDS_register_meta_boxes' );

function HIGHLIGHTS_FIELDS_register_meta_boxes( $meta_boxes )
{	
	
	$box_prefix = 'HIGHLIGHTS_INTRO';
	$meta_boxes[] = array(
		'title'  => 'highlights intro',
		'priority'   => 'low',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'highlights.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'EXHIBITION_HOURS';
	$meta_boxes[] = array(
		'title'  => 'exhibition hours',
		'priority'   => 'low',
		'post_types' => array( 'auction' ),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'HIGHLIGHTS_INTRO';
	$meta_boxes[] = array(
		'title'  => 'highlights intro',
		'priority'   => 'low',
		'post_types' => array( 'auction' ),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);

	$box_prefix = 'AUCTION_END_DATE';
	$meta_boxes[] = array(
		'title'  => 'auction end date',
		'priority'   => 'low',
		'post_types' => array( 'auction' ),
		'context'    => 'side',
		'fields' => array(
			array(
				'name'  => 'auction end date',
				'id'    => 'end_date_'.$box_prefix,
				'type'  => 'text',
				'desc'  => 'MUST enter the date in YYYY-MM-DD format',
				'clone' => false,
			),
		),
	);
	
	$box_prefix = 'HIGHLIGHTS_LOTS';
	$meta_boxes[] = array(
		'title'  => 'highlight lots',
		'priority'   => 'low',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'highlights.php', 'page-auction-info.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_highlights_group($box_prefix),
		),
	);

	$box_prefix = 'HIGHLIGHTS_LOTS';
	$meta_boxes[] = array(
		'title'  => 'highlight lots',
		'priority'   => 'low',
		'post_types' => array( 'auction' ),
		'fields' => array(
			Field_modules_w_fix::create_highlights_group($box_prefix),
		),
	);	
	
    return $meta_boxes;
}
?>