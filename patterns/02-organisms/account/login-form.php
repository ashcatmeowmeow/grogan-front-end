<div class = 'module rhythm-block-quarter'>
<?php
echo render( 
	MOLECULES.'/forms/form.php', 
	$fields,
	$config
);

?>
</div>
<?php echo render( ATOMS.'/containers/container-single-column-start.php');?>
	<p class = 'text-center'>Don't have an account? <a href = "#">Create one.</a></p>
<?php echo render( ATOMS.'/containers/container-single-column-end.php');?>