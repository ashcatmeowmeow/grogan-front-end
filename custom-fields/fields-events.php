<?php
add_filter( 'rwmb_meta_boxes', 'EVENTS_register_meta_boxes' );

function EVENTS_register_meta_boxes( $meta_boxes )
{
	
	$box_prefix = 'EVENTS_PERMA';
	$meta_boxes[] = array(
		'title'  => 'permanent events',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-grogan-events.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);
	
    $box_prefix = 'EVENTS';
	$meta_boxes[] = array(
		'title'  => 'event',
		'post_types' => array( 'event' ), //it wants the singular form of the post NOT plural
		'fields' => array(
			Field_modules_w_fix::create_event_block_group($box_prefix, '#'),
		),
	);	

    return $meta_boxes;
}
?>