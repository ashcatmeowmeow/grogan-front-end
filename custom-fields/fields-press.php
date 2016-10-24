<?php
add_filter( 'rwmb_meta_boxes', 'PRESS_register_meta_boxes' );

function PRESS_register_meta_boxes( $meta_boxes )
{
	
    $box_prefix = 'PRESS';
	$meta_boxes[] = array(
		'title'  => 'press entry',
		'post_types' => array( 'press-entry' ), //it wants the singular form of the post NOT plural
		'fields' => array(
			Field_modules_w_fix::create_press_block_group($box_prefix, '#'),
		),
	);	

    return $meta_boxes;
}
?>