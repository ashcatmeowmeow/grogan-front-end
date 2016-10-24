<?php
/*
Template Name: past auctions page
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

echo render(
	TEMPLATES.'/auction/auctions.php',
	array(),
	array(
		'past_auction_post' =>  true
	)
);
?>

<?php get_footer(); ?>