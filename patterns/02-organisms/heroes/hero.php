<?php
$main_title = 'This is a title';
if(isset($fields['main_title']))
	$main_title = $fields['main_title'];

$hero_level = '1';
if(isset($config['hero_level']))
	$hero_level = $config['hero_level'];	

$hidden_classes = '';
if($config['split_header'] == true)
	$hidden_classes = 'hidden-xs hidden-is';	

$hero_border = '';
if($config['hero_border'] == true)
	$hero_border = 'hero--border';	

$background_image = 'http://grogan/wordpress/wp-content/uploads/2015/10/yellow.jpg';
if(isset($fields['hero_bg_image']))
	$background_image = $fields['hero_bg_image'];

$section_background_display = '';
if($config['split_header'] == true)
	$section_background_display = 'no-background__lg-min';

$div_background = 'no-background';
if($config['split_header'] == true)
	$div_background = 'no-background__xs-lg';

$content_position_class = 'hero--content-position__default';
if(isset($config['content_position_class']))
	$content_position_class = $config['content_position_class'];
?>

<div class = 'hero'>
<section style = 'background-image: url("<?php echo $background_image; ?>"); background-size: cover;' class = "tile--has-background <?php echo $section_background_display; ?>">
<div class = "container module">
	<div class = 'row'>
		<div class = 'col-xs-12'>
			<div 
			<?php if($config['split_header'] == true): ?>
			style = 'background-image: url("<?php echo $background_image; ?>"); background-size: cover;' 
			<?php endif; ?>
			class = 'hero--large-background <?php echo $div_background." ".$hero_border ?>'>
				<div class = "module hero hero__<?php echo $hero_level; ?>">
					<div class = "constrained-1 hero__1--content hero--content__inside <?php echo $content_position_class; ?> <?php echo $hidden_classes; ?> has-background">
						<div class = "row">
							<div class = 'tile-fix'>
								<?php 
								echo render( 
									MOLECULES.'/tiles/tile.php', 
									$fields,
									$config
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php if($config['split_header'] == true): ?>
<div class = "hero--content__below visible-xs-block visible-is rhythm-block">
	<div class = "container-fluid module">
		<div class = "row">
			<?php 
			$config['tile_col_classes'] = 'col-xs-11 col-is-8 col-sm-6 no-padding-left push-up-1';
			$config['is_card'] = true;
			
			echo render( 
				MOLECULES.'/tiles/tile.php', 
				$fields,
				$config
			);
			?>
		</div>
	</div>
</div>
<?php endif; ?>

</div>