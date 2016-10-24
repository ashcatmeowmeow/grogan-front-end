<?php
add_filter( 'rwmb_meta_boxes', 'CTA_MAIN_register_meta_boxes' );

function CTA_MAIN_register_meta_boxes( $meta_boxes )
{
    $box_prefix = 'CTA_MAIN';
	$meta_boxes[] = array(
		'title'  => 'main cta',
		'post_types' => array( 'cta' ), //it wants the slug of the post NOT plural
		'fields' => array(
			Field_modules_w_fix::create_text_block_group($box_prefix, '#'),
		),
	);	

    return $meta_boxes;
}
?>