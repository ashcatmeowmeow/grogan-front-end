<?php 

if($config['bid_page'] == true)
	$title = 'Bid';
elseif($config['inquiry'] == true)
	$title = 'Enquire';
elseif($config['telephone_edit'] == true || $config['absentee_edit'] == true) 
	$title = 'Edit Bid';
?>
<div class = "lot-confirmation">
<section class = "stripe">
	<div class = "container">
	<?php
	echo render( 
		ATOMS.'/text/title.php',
		array(
			'title' => $title,
		),
		array(
			'header_level'          => 1,
			'header_alignment'  => 'center',
		)
	);
	?>
		<div class = "row">
			<?php 
			echo render( MOLECULES.'/tiles/tile.php', 
				array(),
				array(
					'tile_col_classes'           => 'col-xs-12 constrained-2',
					'tile_image_double_lockup'   => true,
					'col_center'                 => true,
					'image_width'                => 'small',
					'image_alignment'            => 'center',
					'image_is_linked'            => true,
					'has_lots'                   => true,
					'has_button_container'       => true,
					'has_anchors'                => true,
					'anchor_weight'              => 'bold',
					'text_block_alignment_classes'   => 'text-center-xs text-center-is text-left-sm text-center-md text-center-lg text-center-xl',
					'button_alignment_classes'   => 'text-center-xs text-center-is text-left-sm text-center-md text-center-lg text-center-xl',
					'is_fine_art'                => true,
					'has_tile_tags'              => true,
					'has_dummy_content'          => true,
					'has_cards'                  => true,
					'no_container'               => true,
				)
			);
			?>
		</div>	
	</div>
</section>

<?php
echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'header_level'                   => 2,
		'has_buttons'                    => true,
		'button_size'                    => 'btn-lg',
		'button_style'                   => 'btn-primary',
		'has_button_container'           => true,
		'text_block_alignment_classes'   => 'text-center-xs-min',
	),
	'BID_TELEPHONE_EDIT'
);
?>
</div>