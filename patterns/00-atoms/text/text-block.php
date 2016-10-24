<?php
$text_block_alignment_classes = 'text-center-xs-min';
if(isset($config['text_block_alignment_classes']))
	$text_block_alignment_classes = $config['text_block_alignment_classes'];
?>

<div class = 'constrained-2 centered-column <?php echo $text_block_alignment_classes; ?>'>
	<?php if (isset($config['has_lots']) == false): ?>
		<?php 
		echo render( 
			ATOMS.'/text/title.php',
			$fields,
			$config
		); 
		?>
	<?php endif; ?>	
	
	<?php if ($fields['copy']): ?>
		<?php echo wpautop($fields['copy']); ?>
	<?php endif; ?>
	
	<?php if ($fields['address']): ?>
		<?php	
			echo render( 
			ATOMS.'/text/business-meta.php',
			$fields,
			$config
		);
		?>
	<?php endif; ?>
	
	<?php if ($config['has_lots'] == true): ?>
		<?php 
		echo render( 
			ATOMS.'/auction/lot-truncated-meta.php',
			$fields,
			$config
		); 
		?>
	<?php endif; ?>
	
	<?php
		if (($fields['button_text'] && !$fields['button_text_2']) || $config['has_lots_button']) {
			$button_text = $fields['button_text'];
			$button_link = $fields['button_link'];
			require ATOMS.'/buttons/button.php';
		}
	?>
	
	<?php if($fields['button_text_2']): ?>
	<div class="btn-group btn-group-justified" role="group" aria-label="...">
		<?php
		echo render( 
			ATOMS.'/buttons/button.php',
			array(
				'button_text' => $fields['button_text'],
				'button_link' => $fields['button_link'],
			),
			$config
		); 
		$second_button_config = array (
			'button_style' => 'btn-default',
		);
		$second_button_config_merge = array_merge($config, $second_button_config);
		echo render( 
			ATOMS.'/buttons/button.php',
			array(
				'button_text' => $fields['button_text_2'],
				'button_link' => $fields['button_link_2'],
			),
			$second_button_config_merge
		); 
		?>
	</div>
	<?php endif; ?>
	
	<?php if($config['success_links']): ?>
		<ul class = 'text-center-is-min horizontal-list-sm-min horizontal-list__pipes-sm-min no-bullets rhythm-block-quarter'>
			<li>
				<?php
				echo render( 
					ATOMS.'/buttons/button.php',
					array(
						'button_text' => 'back to catalogue',
						'button_link' => 'http://grogan/wordpress/auctions/catalog/',
					),
					$config
				); 
				?>
			</li>
			<li>
				<?php
				echo render( 
					ATOMS.'/buttons/button.php',
					array(
						'button_text' => 'My account',
						'button_link' => 'http://grogan/wordpress/account/my-account/',
					),
					$config
				); 
				?>
			</li>
		</ul>
	<?php endif; ?>
	
	<?php if($config['reseller_links']): ?>
		<ul class = 'no-bullets rhythm-block-quarter'>
			<li>
				<?php
				echo render( 
					ATOMS.'/buttons/button.php',
					array(
						'button_text' => 'Download Mass Sales Tax Resale Certificate',
						'button_link' => 'http://grogan/wordpress/auctions/catalog/',
					),
					$config
				); 
				?>
			</li>
			<li>
				<?php
				echo render( 
					ATOMS.'/buttons/button.php',
					array(
						'button_text' => 'Download Out of State/Country Sales Tax Resale Affidavit',
						'button_link' => 'http://grogan/wordpress/account/my-account/',
					),
					$config
				); 
				?>
			</li>
		</ul>
	<?php endif; ?>
</div>