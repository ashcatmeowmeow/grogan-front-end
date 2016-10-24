<?php
/*
Template Name: catalog page
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_navigation' => true,
		'has_hero'       => false
	)
);
?>

<?php echo render(ORGANISMS.'/filters/catalog-filter.php')?>

<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-xs-12'>
			<?php echo render( ORGANISMS.'/auction/catalog-multi-tile.php');?>
		</div>
	</div>
</div>

<?php echo render(ATOMS.'/buttons/back-to-top.php')?>

<?php get_footer(); ?>