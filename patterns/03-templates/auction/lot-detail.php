<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-xs-12 col-md-6'>
			<div class = 'constrained-600 centered-column'>
				<?php echo render(ORGANISMS.'/sliders/gallery-slider.php');?>
			</div>
		</div>
		<div class = 'col-xs-12 col-md-6'>
			<?php 
			echo render(
				ORGANISMS.'/auction/lot-bid-options-plus-info.php',
				$fields,
				$config
			); 
			?>
		</div>
	</div>
	<div class = "row">
			<?php // echo render(ORGANISMS.'/auction/lot-detail-info.php'); ?>
	</div>
</div>