<?php
$stripe_padding = '';
if($config['bg_color'])
	$stripe_padding = 'rhythm-block-double-padding-both';

$no_bottom_margin = '';
if($config['no_bottom_margin'])
	$no_bottom_margin = 'no-margin-bottom';
?>

<div class = 'multi-tile module <?php echo $config['bg_color'];?> <?php echo $stripe_padding." ".$no_bottom_margin;?>'>
	<?php if (!array_key_exists('no_container', $config)): ?>
		<div class="container-fluid">
		<div class = 'row'>
		<div class = 'col-xs-12'>
	<?php endif; ?>
		
			<?php 
			if ($config['has_pages'] == true){
				echo render( ATOMS.'/buttons/pagination.php');
			}	
			?>
		
			<?php if (rwmb_meta($META_ID.'_text_block')) { ?>
				<?php
				$text_block = rwmb_meta($META_ID.'_text_block');			
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
						'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
						'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
						'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
						'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false, 
						'bg_image'    => isset( $text_block['bg_image_'.$META_ID] ) ? $text_block['bg_image_'.$META_ID] : false

					)
				);
				?>
			<?php } ?>
			
			<?php
			$group_values = rwmb_meta($META_ID.'_tile');
			$x = 1;
			?>		
			<?php if ( ! empty( $group_values ) ): ?>		
				<?php foreach ( $group_values as $group_value ): ?>
				<?php $x++;?>
				<?php if ( $x % 3 == 1 ): ?>	
					<div class = "row">
				<?php endif; ?>
					<?php
					echo render( MOLECULES.'/tiles/tile.php', 
						array(
							'tag'               => isset( $group_value['tag_'.$META_ID] ) ? $group_value['tag_'.$META_ID] : '',
							'title'             => isset( $group_value['title_'.$META_ID] ) ? $group_value['title_'.$META_ID] : '', 
							'title_link'        => isset( $group_value['title_link_'.$META_ID] ) ? $group_value['title_link_'.$META_ID] : '',
						    'sub_header_top'    => isset( $group_value['sub_title_top_'.$META_ID] ) ? $group_value['sub_title_top_'.$META_ID] : '', 
							'sub_header_bottom' => isset( $group_value['sub_title_bottom_'.$META_ID] ) ? $group_value['sub_title_bottom_'.$META_ID] : '', 
							'copy'              => isset( $group_value['copy_'.$META_ID] ) ? $group_value['copy_'.$META_ID] : '',
							'address'           => isset( $group_value['address_'.$META_ID] ) ? $group_value['address_'.$META_ID] : '',
							'phone_number'      => isset( $group_value['phone_number_'.$META_ID] ) ? $group_value['phone_number_'.$META_ID] : '',
							'estimate'          => isset( $group_value['estimate_'.$META_ID] ) ? $group_value['estimate_'.$META_ID] : '', 
							'hammer'            => isset( $group_value['hammer_'.$META_ID] ) ? $group_value['hammer_'.$META_ID] : '',
							'image'             => isset( $group_value['image_'.$META_ID] ) ? $group_value['image_'.$META_ID] : '',   
							'button_text'       => isset( $group_value['button_text_'.$META_ID] ) ? $group_value['button_text_'.$META_ID] : '', 
							'button_link'       => isset( $group_value['button_link_'.$META_ID] ) ? $group_value['button_link_'.$META_ID] : '',
							'bg_image'          => isset( $group_value['bg_image_'.$META_ID] ) ? $group_value['bg_image_'.$META_ID] : '',							
						),
						$config
					);
					?>
				<?php if ( $x % 3 == 1 ): ?>	
					</div>
				<?php endif; ?>
				<?php endforeach;?>
			<?php endif; ?>
			
			<?php 
			$a = 1; 
			?>
			<?php if (rwmb_meta($META_ID.'_tile_'.$a) || $config['has_dummy_content'] == true): ?>
				<?php for($i = 1; $i <= $config['number_of_rows']; $i++){ ?>	
					<div class = "row">
						<?php 
						for($a; $a <= $config['tiles_per_row'] * $i; $a++){
							$tiles = rwmb_meta($META_ID.'_tile_'.$a);
							echo render( MOLECULES.'/tiles/tile.php', 
								array(
									'title'       => isset( $tiles['title_'.$META_ID.'_'.$a] ) ? $tiles['title_'.$META_ID.'_'.$a] : false, 
									'image'       => isset( $tiles['image_'.$META_ID.'_'.$a] ) ? $tiles['image_'.$META_ID.'_'.$a] : false,  
									'copy'        => isset( $tiles['copy_'.$META_ID.'_'.$a] ) ? $tiles['copy_'.$META_ID.'_'.$a] : false, 
									'button_text' => isset( $tiles['button_text_'.$META_ID.'_'.$a] ) ? $tiles['button_text_'.$META_ID.'_'.$a] : false, 
									'button_link' => isset( $tiles['button_link_'.$META_ID.'_'.$a] ) ? $tiles['button_link_'.$META_ID.'_'.$a] : false,
									'bg_image'    => isset( $tiles['bg_image_'.$META_ID.'_'.$a] ) ? $tiles['bg_image_'.$META_ID.'_'.$a] : false									
								),
								$config
							);
						}
						?>
					</div>
					<?php $a = ($config['tiles_per_row'] * $i) + 1; ?>
				<?php }?>
			<?php endif; ?>
			
			<?php 
			if ($config['has_pages'] == true){
				echo render( ATOMS.'/buttons/pagination.php');
			}	
			?>
			
	<?php if (!array_key_exists('no_container', $config)): ?>		
		</div>
		</div>
		</div>
	<?php endif; ?>
</div>

