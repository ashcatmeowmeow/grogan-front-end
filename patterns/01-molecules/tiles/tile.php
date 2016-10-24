<?php 
$tile_column_width = 'col-xs-12 col-md-12';
if(isset($config['tile_col_classes']))
	$tile_column_width = $config['tile_col_classes'];
elseif($config['tiles_per_row'] == 3)
	$tile_column_width = 'col-xs-12 col-md-4';	
elseif($config['tiles_per_row'] == 2)
	$tile_column_width = 'col-xs-12 col-md-6';	
elseif($config['tiles_per_row'] == 1)
	$tile_column_width = 'col-xs-12 col-md-12';	

$flush_columns = '';
if($config['flush_columns'] == true)
	$flush_columns = 'no-margin-bottom';
	
$col_center = '';
if($config['col_center'] == true)
	$col_center = 'col-center';

$lot_card = '';
if($config['has_lots'] == true)
	$lot_card = 'lot-card';
	
$card = '';
if($config['has_cards'] == true || $config['is_card'] == true)
	$card = 'card';

$has_no_padding = '';
if($config['has_no_padding'] == true)
	$has_no_padding = 'no-padding';

$classes = '';
if(isset($config['classes']))
	$classes = $config['classes'];

if ($config['image_width'] == 'constrained') {
	$image_block_min_height = 'image__constrained--block';
}

$tile_background = '';
if(isset($fields['bg_image'])){
	$tile_background = $fields['bg_image'];
}

$has_background = '';
if($fields['bg_image']){
	$has_background = 'has-background';
}

$tag_number = '1';
if(isset($fields['tag'])){
	$tag_number = $fields['tag'];
}
?>
<div
<?php if($fields['bg_image'] != ''): ?>
style = 'background: 
		linear-gradient(
		  rgba(0, 0, 0, 0.7), 
		  rgba(0, 0, 0, 0.7)
		),
		url("<?php echo $tile_background; ?>"); 
		background-size: cover;' 
<?php endif; ?>
class = "<?php echo $has_background." ".$tile_column_width." ".$col_center." ".$lot_card." ".$flush_columns; ?>">
	<div class = "module tile icon-lockup <?php echo $card." ".$has_no_padding." ".$classes; ?>">
		<?php if ($fields['tag'] || $config['has_tile_tags'] == 1): ?>
			<div class = "tile--tag"><?php echo $tag_number; ?></div>
		<?php endif; ?>
		<div class = "constrained-1-xs constrained-1-is centered-column">
		
			<?php if ($fields['image'] || $config['has_dummy_content']): ?>
				<div class = "row">
					<div class = "col-sm-4 col-md-12">
						<div class = "<!--rhythm-block--> <?php echo $image_block_min_height; ?>">	
							<?php echo render( 
								ATOMS.'/images/image.php', 
								$fields,
								$config
							); 
							?>
						</div>
					</div>
					<div class = "col-sm-6 col-md-12">
						<?php 
						echo render( 
							ATOMS.'/text/text-block.php', 
							$fields, 
							$config
						); 
						?>
					</div>
				</div>
			<?php else: ?>
				<?php 
				echo render( 
					ATOMS.'/text/text-block.php', 
					$fields, 
					$config
				); 
				?>
			<?php endif; ?>
		</div>
	</div>
</div>