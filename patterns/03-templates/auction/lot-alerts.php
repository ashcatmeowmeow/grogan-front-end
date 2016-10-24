<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-xs-12'>
			<p class = 'constrained-2 centered-column text-center'>As each catalogue is published online, Lot Alert will search for your keywords and email you a link to the matching lots. Your keywords will remain on file until you remove them.</p>
		</div>
	</div>
	<div class = 'row'>
		<?php if($config['saved_alerts']):?>
		<div class = 'col-xs-12 col-md-6'>
			<?php echo render( ORGANISMS.'/auction/saved-alerts.php');?>
		</div>
		<div class = 'col-xs-12 col-md-6'>
			<?php echo render( ORGANISMS.'/auction/add-new-alert.php');?>
		</div>
		<?php else:?>
		<div class = 'col-xs-12'>
			<?php echo render( ORGANISMS.'/auction/add-new-alert.php');?>
		</div>
		<?php endif; ?>
	</div>
</div>