<?php
/*
Template Name: home
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => true,
		'has_navigation'   => true,
	),
	'AUCTION_HERO'
);
?>

<?php
$META_ID = 'HOME_INTRO';
$text_block = rwmb_meta($META_ID.'_text_block');			
$about_intro = render( ATOMS.'/text/text-block.php', 
	array(
		'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
		'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
		'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
		'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
		'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false 
	),
	array(
		'header_level' => 2,
	)
);

$META_ID = 'HOME_MISC';
$text_block = rwmb_meta($META_ID.'_text_block');			
$home_misc_block = render( ATOMS.'/text/text-block.php', 
	array(
		'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
		'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
		'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
		'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
		'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false 
	),
	array(
		'header_level' => 2,
	)
);
?>

<?php if(isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false) : ?>
	<!-- the loop -->
	
	<div class = "container">
		<div class = "row">
			<div class = 'col-xs-12 col-md-6'>
				<?php echo $about_intro; ?>
			</div>

			<div class = 'col-xs-12 col-md-6'>
				<?php echo $home_misc_block; ?>
			</div>
		</div>
	</div>

<?php else : ?>
	<?php
	echo render( 
		ORGANISMS.'/stripe/stripe.php', 
		array(), 
		array(), 
		'HOME_INTRO'
	);
	?>
<?php endif; ?>

<?php

echo render( 
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'            => 2, 
		'number_of_rows'           => 1, 
		'flush_columns'            => true,
		'bg_color'                 => 'secondaryColor-bg',
	), 
	"HOME_SELLING"
);

if(rwmb_meta('HOME_BIDDING'.'_text_block')){
echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(),
	'HOME_BIDDING'
);
}

echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'bg_color'                 => 'secondaryColor-bg',
	),
	"HOME_SPECIALTIES"
);


?>
<?php get_footer(); ?>