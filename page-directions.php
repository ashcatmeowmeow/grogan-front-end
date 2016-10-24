<?php
/*
Template Name: directions
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => true,
		'has_navigation'   => true,
	)
);
?>

<section class = "module">
<div class = "container">
	<div class = "row">
		<div class = 'col-xs-12'>
			<?php
			$META_ID = 'DIRECTIONS_MAP';
			$text_block = rwmb_meta($META_ID.'_text_block');			
			echo render( ATOMS.'/text/text-block.php', 
				array(
					'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
					'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
					'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
					'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
					'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false 
				),
				array(
					'header_level' => 2,
					'text_block_alignment_classes'   => 'text-left',
				)
			);
			?>
		</div>
		<div class = 'col-xs-12'>
			<div class = 'constrained-700-all centered-column'>
				<img src = '<?php echo IMAGES.'/grogan-map.jpg'?>'/>
			</div>
		</div>
	</div>
</div>
</section>

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
	"DIRECTIONS_DIRECTIONS"
);

?>
<?php get_footer(); ?>