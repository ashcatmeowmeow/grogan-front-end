<section class = "stripe">
	<div class = 'container'>
		<div class = 'row'>
			<div class = "col-xs-12 no-label">
				<?php echo render(ATOMS.'/containers/container-single-column-start.php'); ?>
				<h2>Leave an absentee bid</h2>
					<?php // echo render(ATOMS.'/auction/lot-ranges.php');?>

				<?php echo do_shortcode('[gravityform id="3" title="false" description="false"]') ?>
				
				<?php echo render(ATOMS.'/containers/container-single-column-end.php'); ?>
			</div>
		</div>
	</div>
</section>

