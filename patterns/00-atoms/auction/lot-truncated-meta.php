<div class = 'constrained-1 centered-column'>
	<?php if ($fields['title'] == true): ?>
		<p><?php echo $fields['title']; ?></p>
	<?php elseif ($config['is_fine_art'] == true): ?>
		<p>Francesco Raibolini, called Francia, (Italian, 1447-1517), Madonna and Child, oil on canvas</p>
	<?php elseif ($config['is_other_art'] == true): ?>
		<p>14k yellow and white gold, black opal, and diamond bird brooch</p>
	<?php endif; ?>
	<?php
		echo render( 
			ATOMS.'/auction/price.php',
			$fields,
			$config
		);
	?>
</div>