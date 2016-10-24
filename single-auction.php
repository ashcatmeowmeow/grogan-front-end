<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_navigation'   => true,
		'no_margin_bottom' => true,
	)
);
?>

<?php
$META_ID = 'AUCTION_HERO';
$text_block = rwmb_meta($META_ID.'_text_block');
echo render(
	ORGANISMS.'/heroes/hero.php',
	array(
		'title'              => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false,
		'title_link'         => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false,
		'sub_header_top'     => isset( $text_block['sub_title_top_'.$META_ID] ) ? $text_block['sub_title_top_'.$META_ID] : false,
		'sub_header_bottom'  => isset( $text_block['sub_title_bottom_'.$META_ID] ) ? $text_block['sub_title_bottom_'.$META_ID] : false,
		'hero_bg_image'      => isset( $text_block['hero_bg_image_'.$META_ID] ) ? $text_block['hero_bg_image_'.$META_ID] : false,
		'button_text'        => isset( $text_block['button_text_2_'.$META_ID] ) ? $text_block['button_text_2_'.$META_ID] : false, 
		'button_link'        => isset( $text_block['button_link_2_'.$META_ID] ) ? $text_block['button_link_2_'.$META_ID] : false,
	),
	array(
		'header_level'                   => 1,
		'split_header'                   => true,
		'border_large'                   => true,
		'text_block_alignment_classes'   => 'text-left',
		'has_buttons'                    => true,
		'button_style'                   => 'btn-primary',
		'hero_border'                    => true,
	)
); 
?>

<?php
echo render( 
	TEMPLATES.'/auction/highlights.php', 
	array(), 
	array()
);
?>