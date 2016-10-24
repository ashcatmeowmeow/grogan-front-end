<?php
$META_ID = 'HIGHLIGHTS_INTRO';
$text_block = rwmb_meta($META_ID.'_text_block');			
$highlights_intro = render( ATOMS.'/text/text-block.php', 
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

$META_ID = 'EXHIBITION_HOURS';
$text_block = rwmb_meta($META_ID.'_text_block');			
$exhibition_hours = render( ATOMS.'/text/text-block.php', 
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
				<?php echo $highlights_intro; ?>
			</div>

			<div class = 'col-xs-12 col-md-6'>
				<?php echo $exhibition_hours; ?>
			</div>
		</div>
	</div>

<?php else : ?>
	<?php
	echo render( 
		ORGANISMS.'/stripe/stripe.php', 
		array(), 
		array(), 
		'HIGHLIGHTS_INTRO'
	);
	?>
<?php endif; ?>
		
<?php 
$group_values = rwmb_meta('HIGHLIGHTS_LOTS_tile');
if ( $group_values[0]["title_HIGHLIGHTS_LOTS"] != "" ): ?>	
<section>
<div class = 'rhythm-block'>
	<?php 
	echo render( 
		ATOMS.'/text/text-block.php',
		array(
			'title' => 'Highlights',
		),
		array(
			'header_level' => 2,
		)
	); 
	?>
</div>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-xs-12'>
	<?php 
	echo render( 
		ORGANISMS.'/auction/highlight-multi-tile.php',
		array(),
		array(),
		'HIGHLIGHTS_LOTS'
	);?>
</div>
</div>
</div>
</section>

<?php endif; ?>

<?php get_footer(); ?>