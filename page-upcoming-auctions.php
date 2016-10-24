<?php
/*
Template Name: upcoming auctions page
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_navigation'   => true,
		'no_margin_bottom' => true,
	)
);

echo render(TEMPLATES.'/auction/auctions.php');
?>

<?php get_footer(); ?>