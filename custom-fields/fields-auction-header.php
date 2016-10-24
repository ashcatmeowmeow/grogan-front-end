<?php
add_filter( 'rwmb_meta_boxes', 'AUCTION_HEADER_FIELDS_register_meta_boxes' );

function AUCTION_HEADER_FIELDS_register_meta_boxes( $meta_boxes )
{
    $box_prefix = 'AUCTION_HERO';
	$meta_boxes[] = array(
		'title'  => 'hero',
		'priority'   => 'high',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-home.php', 'page-auction-info.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_auction_header_block_group($box_prefix, '#'),
		),
	);	
	
	$box_prefix = 'AUCTION_HERO';
	$meta_boxes[] = array(
		'title'  => 'hero',
		'priority'   => 'high',
		'post_types' => array( 'auction' ),
		'fields' => array(
			Field_modules_w_fix::create_auction_post_header_block_group($box_prefix, '#'),
		),
	);	

    return $meta_boxes;
}
?>