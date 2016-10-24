<?php 
$text_block = rwmb_meta($META_ID.'_text_block');
$cta_fields_presets = array(
	'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
	'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
	'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
	'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
	'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false, 
	'hero_bg_image'    => isset( $text_block['bg_image_'.$META_ID] ) ? $text_block['bg_image_'.$META_ID] : false
);
$fields_presets_merge = array_merge($cta_fields_presets, $fields);

echo render(
	ORGANISMS.'/heroes/hero.php',
	$fields_presets_merge,
	array(
		'header_level'           => 2,
		'content_position_class' => 'vert-centered-trans--content__full-center-sm-min',
	)
); 
?>