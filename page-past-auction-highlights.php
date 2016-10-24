<?php
/*
Template Name: past auction highlights
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_navigation'   => true,
		'no_margin_bottom' => true
	)
);
?>

<?php
echo render( 
	TEMPLATES.'/auction/auctions.php', 
	array(), 
	array()
);
?>

<?php get_footer(); ?>