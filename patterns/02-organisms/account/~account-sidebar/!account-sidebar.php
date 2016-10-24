<div class = 'col-lg-3 visible-lg-block'>
	<?php
		echo render( 
			ORGANISMS.'/account/~account-sidebar/account-links.php',
			array(),
			array(
				'prefix' => 'sidebar_'
			)
		);
	?>
</div>
<?php	
echo render( 
	ORGANISMS.'/account/~account-sidebar/account-links.php',
	array(),
	array(
		'prefix' => 'drawer_',
		'name'   => 'sidr'
	)
);
?>