<?php
require_once(CUSTOM_FIELDS.'/field-modules.php');
add_filter( 'rwmb_meta_boxes', 'TEAM_FIELDS_register_meta_boxes' );

function TEAM_FIELDS_register_meta_boxes( $meta_boxes )
{	
	
	$box_prefix = 'TEAM_INTRO';
	$meta_boxes[] = array(
		'title'  => 'team intro',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-team.php'),
		),
		
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
	$box_prefix = 'TEAM_MEMBERS';
	$meta_boxes[] = array(
		'title'  => 'team members',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-team.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, 'team intro'),
			Field_modules_w_fix::create_clone_tiles_group($box_prefix, 'team members'),
		),
	);	
	
    return $meta_boxes;
}
?>