<?php
/*
Template Name: RFC - lot alerts
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => false,
		'has_navigation'   => true,
	)
);
?>

<?php
echo render( 
	ATOMS.'/text/title.php',
	array(
		'title' => 'Lot Alerts',
	),
	array(
		'header_level'          => 1,
		'header_alignment'  => 'center',
	)
);
?>

<?php echo render( ORGANISMS.'/navigation/account-navigation.php');?>

<?php echo render( TEMPLATES.'/auction/lot-alerts.php');?>
<?php get_footer(); ?>