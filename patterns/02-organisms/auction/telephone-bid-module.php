<div class = "col-xs-12">
	<?php echo render(ATOMS.'/containers/container-single-column-start.php'); ?>
		<?php
		echo render( 
			ATOMS.'/auction/lot-ranges.php', 
			array(), 
			array()
		);
		?>

		<form id="myForm" action="#" method="post">
		  <div>
			<label for="bid">Your bid</label>
			<input type="text" name="bid" id="name" value="" tabindex="1">
		   </div>
		  <div>
			<?php echo render(ATOMS.'/buttons/submit.php'); ?>
		  </div>
		</form>
	<?php echo render(ATOMS.'/containers/container-single-column-end.php'); ?>
</div>
