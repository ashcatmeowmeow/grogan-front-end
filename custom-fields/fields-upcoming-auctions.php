<?php
add_filter( 'rwmb_meta_boxes', 'UPCOMING_AUCTIONS_FIELDS_register_meta_boxes' );

function UPCOMING_AUCTIONS_FIELDS_register_meta_boxes( $meta_boxes )
{
    $box_prefix = 'NO_AUCTION';
	$meta_boxes[] = array(
		'title'  => 'no auctions',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-upcoming-auctions.php'),
		),
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);	

    return $meta_boxes;
}
?>