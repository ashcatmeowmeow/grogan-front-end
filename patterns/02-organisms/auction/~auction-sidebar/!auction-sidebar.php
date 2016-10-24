<div class = 'col-lg-3 visible-lg-block'>
	<?php
		echo render( 
			MOLECULES.'/auction/filters/auction-filters.php',
			array(),
			array(
				'prefix' => 'sidebar_'
			)
		);
	?>
</div>
<?php	
echo render( 
	MOLECULES.'/auction/filters/auction-filters.php',
	array(),
	array(
		'prefix' => 'drawer_',
		'name'   => 'sidr'
	)
);
?>