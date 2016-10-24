<?php
/*
Template Name: login
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

<?php

echo render( 
	TEMPLATES.'/auction/lot-confirmation.php', 
	array(), 
	array(
		'absentee_bid' => true,
	)
);

?>

<?php get_footer(); ?>