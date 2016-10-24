<?php
$stripe_padding = '';
if($config['bg_color'])
	$stripe_padding = 'rhythm-block-double-padding-both';
?>


<section class = "module stripe <?php echo $config['bg_color'];?> <?php echo $stripe_padding;?>">
	<div class = "container">
		<div class = "row">
			<div class = 'col-xs-12'>
				<?php
				$text_block = rwmb_meta($META_ID.'_text_block');			
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
						'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
						'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
						'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
						'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false 
					),
					$config
				);
				?>
			</div>
		</div>
	</div>
</section>