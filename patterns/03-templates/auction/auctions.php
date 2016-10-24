<?php 

$today = date("Y-m-d");

$args = array(
'post_type' => 'auction',
'meta_key'  => 'end_date_AUCTION_END_DATE',
'order'     => 'ASC',
'orderby'   => 'meta_value',
'meta_compare' => '>=',
'meta_value' => $today,
);

if($config['past_auction_post']){
	$args['meta_compare'] = '<';
	$args['order'] = 'DESC';
}

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- the loop -->

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
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
				'button_text'        => 'more info', 
				'button_link'        => get_permalink(),
				'button_text_2'      => isset( $text_block['button_text_2_'.$META_ID] ) ? $text_block['button_text_2_'.$META_ID] : false, 
				'button_link_2'      => isset( $text_block['button_link_2_'.$META_ID] ) ? $text_block['button_link_2_'.$META_ID] : false,
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

	<?php endwhile; ?>
	<!-- end of the loop -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
<?php
echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(),
	'NO_AUCTION'
);
?>
<?php endif; ?>