<?php
$main_title = 'This is a title';
if(isset($fields['main_title']))
	$main_title = $fields['main_title'];

$hero_level = '1';
if(isset($config['hero_level']))
	$hero_level = $config['hero_level'];	
?>

<section class = "">
	<div class = "container tile--has-background rug">
		<div class = "module hero__<?php echo $hero_level; ?>">
			<div class = "hero--content__inside hero__<?php echo $hero_level; ?>--content">
				<div class = "row">
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
</section>

<?php if($config['split_header'] == true): ?>
<div class = "hero--content__below visible-xs-block visible-is-block visible-sm-block">
	<div class = "container">
		<div class = "row">
			<?php 
			$config['tile_col_classes'] = 'col-xs-10 no-padding-left push-up-1';
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