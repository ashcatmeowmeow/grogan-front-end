<?php
/*
Template Name: post auction
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
		<div class = 'col-xs-12'>
			<?php
			$META_ID = 'POST_AUCTION_SHIPPING';
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
	</div>
	
	<div class = "row">
		<div class = 'col-xs-12 col-md-6'>	
			<?php
			$META_ID = 'POST_AUCTION_SHIPPERS';
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
					'header_level' => 3,
				)
			);
			?>
			<div class = 'table-responsive rhythm-block-plus-top rhythm-block'>
				<table class="table">
				   <tbody>
					  <tr>
						 <td>Global Pack Ship</td>
						 <td><a href="tel://617.742.6245">617.742.6245</a></td>
						 <td><a href="mailto:globalpackship@aol.com" target="_blank">globalpackship@aol.com</a></td>
					  </tr>
					  <tr>
						 <td>The UPS Store Needham</td>
						 <td><a href="tel:781-492-0333" value="+17814920333" target="_blank">781.492.0333</a></td>
						 <td><a href="mailto:store2897@theupsstore.com" target="_blank">store2897@theupsstore.com</a></td>
					  </tr>
					  <tr>
						 <td>The UPS Store Boston</td>
						 <td><a href="tel:617-573-0005" value="+16175730005" target="_blank">617.573.0005</a></td>
						 <td><a href="mailto:store5768@theupsstore.com" target="_blank">store5768@theupsstore.com</a></td>
					  </tr>
					  <tr>
						 <td>PakMail</td>
						 <td><a href="tel:978-353-1800" value="+19783531800" target="_blank">978.353.1800</a></td>
						 <td><a href="mailto:info@pakmailboston.com" target="_blank">info@pakmailboston.com</a></td>
					  </tr>
							  <tr>
						 <td>New England Pack &amp; Ship</td>
						 <td><a href="tel:781-449-1231" value="+17814491231" target="_blank">781.449.1231</a></td>
						 <td><a href="mailto:packstore@verizon.net" target="_blank">packstore@verizon.net</a></td>
					  </tr>
				   </tbody>
				</table>
			</div>
			<div id = 'reseller'>
				<?php
				$META_ID = 'POST_AUCTION_RESELLING';
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
						'header_level'   				 => 2,
					)
				);
				?>
				<div class = 'tile card module rhythm-block constrained-2 centered-column <?php echo $no_required_label; ?>'>
					<?php echo do_shortcode('[gravityform id="20" title="false" description="false"]') ?>
				</div>
			</div>
		</div>
		<div class = 'col-xs-12 col-md-6'>
			<div class = 'tile secondaryColor-bg'>
				<div class = 'rhythm-block module'>
					<?php
					$META_ID = 'POST_AUCTION_SHIPPING_FORM';
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
							'header_level' => 3,
							'download'     => true,
						)
					);
					?>
				</div>
				<div class = 'tile card module rhythm-block <?php echo $no_required_label; ?>'>
					<?php echo do_shortcode('[gravityform id="21" title="false" description="false"]') ?>
				</div>
				<div class = 'text-mini'>
						<?php
						$META_ID = 'POST_AUCTION_SHIPPING_NOTE';
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
								'header_level' => 4,
							)
						);
						?>
				</div>
			</div>
		</div>
	</div>
</div>
</section>	
<?php get_footer(); ?>