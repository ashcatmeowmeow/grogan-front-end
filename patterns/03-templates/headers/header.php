<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php bloginfo(‘name’);?> | <?php wp_title(); ?></title>
<?php wp_head(); ?> 
</head>
<body>
<div id = 'wrapper'>
<div id = 'header'>
	<?php if($config['has_navigation'] != false): ?>
		<?php 
		echo render(
			ORGANISMS.'/navigation/navigation.php',
			array(),
			$config
		); 
		?>
	<?php endif; ?>
	
	<?php if($config['has_hero'] == true): ?>
		<?php
			$HEADER_META_ID = 'HEADER_';
			if(isset($META_ID))
				$HEADER_META_ID = $META_ID;
			$text_block = rwmb_meta($HEADER_META_ID.'_text_block');
		?>
		<?php 
		$header_presets = array(
			'header_level'                   => 1,
			'split_header'                   => true,
			'border_large'                   => true,
			'text_block_alignment_classes'   => 'text-left',
			'has_buttons'                    => true,
			'button_style'                   => 'btn-primary',
			'hero_border'                    => true,
		);
		
		$preset_config_merge = array_merge($header_presets, $config);
		echo render(
			ORGANISMS.'/heroes/hero.php',
			array(
				'title'              => isset( $text_block['title_'.$HEADER_META_ID] ) ? $text_block['title_'.$HEADER_META_ID] : false,
				'title_link'         => isset( $text_block['title_link_'.$HEADER_META_ID] ) ? $text_block['title_link_'.$HEADER_META_ID] : false,
				'sub_header_top'     => isset( $text_block['sub_title_top_'.$HEADER_META_ID] ) ? $text_block['sub_title_top_'.$HEADER_META_ID] : false,
				'sub_header_bottom'  => isset( $text_block['sub_title_bottom_'.$HEADER_META_ID] ) ? $text_block['sub_title_bottom_'.$HEADER_META_ID] : false,
				'image'              => isset( $text_block['image_'.$HEADER_META_ID] ) ? $text_block['image_'.$HEADER_META_ID] : false,   
				'hero_bg_image'      => isset( $text_block['hero_bg_image_'.$HEADER_META_ID] ) ? $text_block['hero_bg_image_'.$HEADER_META_ID] : false,
				'button_text'        => isset( $text_block['button_text_'.$HEADER_META_ID] ) ? $text_block['button_text_'.$HEADER_META_ID] : false, 
				'button_link'        => isset( $text_block['button_link_'.$HEADER_META_ID] ) ? $text_block['button_link_'.$HEADER_META_ID] : false,
				'button_text_2'      => isset( $text_block['button_text_2_'.$HEADER_META_ID] ) ? $text_block['button_text_2_'.$HEADER_META_ID] : false, 
				'button_link_2'      => isset( $text_block['button_link_2_'.$HEADER_META_ID] ) ? $text_block['button_link_2_'.$HEADER_META_ID] : false,
			),
			$preset_config_merge
		); 
		?>
	<?php endif; ?>
	<?php if($config['has_hero'] == false && (isset( $text_block['title_'.$HEADER_META_ID] ) ? $text_block['title_'.$HEADER_META_ID] : false)): ?>
	<div class = 'rhythm-block module'>
		<div class = 'container'>
			<div class = 'row'>
				<div class = 'col-xs-12'>
					<?php 
					echo render( 
						ATOMS.'/text/text-block.php',
						array(
							'title'              => isset( $text_block['title_'.$HEADER_META_ID] ) ? $text_block['title_'.$HEADER_META_ID] : false,
							'title_link'         => isset( $text_block['title_link_'.$HEADER_META_ID] ) ? $text_block['title_link_'.$HEADER_META_ID] : false,
							'sub_header_top'     => isset( $text_block['sub_title_top_'.$HEADER_META_ID] ) ? $text_block['sub_title_top_'.$HEADER_META_ID] : false,
							'sub_header_bottom'  => isset( $text_block['sub_title_bottom_'.$HEADER_META_ID] ) ? $text_block['sub_title_bottom_'.$HEADER_META_ID] : false,
						),
						array(
							'header_level'          => 1,
							'text_block_alignment_classes'   => 'text-center-xs-min'
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
<div id="content">