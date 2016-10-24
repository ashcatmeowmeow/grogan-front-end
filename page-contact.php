<?php
/*
Template Name: contact
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
<section class = "module stripe">
<div class = "container">	
	<div class = "row">
		<div class = 'col-xs-12 col-md-6'>	
			<?php
			$META_ID = 'CONTACT_INFO';
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
				)
			);
			?>
		</div>
		<div class = 'col-xs-12 col-md-6'>
			<div class = 'rhythm-block module'>
				<?php			
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title'       => 'Send us a Message', 
					),
					array(
						'header_level' => 2,
						'download'     => true,
					)
				);
				?>
			</div>
			<div class = 'tile card module rhythm-block <?php echo $no_required_label; ?>'>
				<?php echo do_shortcode('[gravityform id="17" title="false" description="false"]') ?>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>