<?php
add_filter( 'rwmb_meta_boxes', 'PAGEFIELDS_register_meta_boxes' );

function PAGEFIELDS_register_meta_boxes( $meta_boxes )
{
    $box_prefix = 'HEADER_';
	$meta_boxes[] = array(
		'title'  => 'header',
		'post_types' => array( 'page' ),
		'exclude' => array( 
			'template' => array('page-home.php', 'page-auctions.php', 'page-upcoming-auctions.php', 'page-auction-info.php'),
		),
		'priority'   => 'high',
		'fields' => array(
			Field_modules_w_fix::create_header_block_group($box_prefix, '#'),
		),
	);	

    return $meta_boxes;
}
?>