<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => true,
		'has_navigation'   => true,
	),
	'PAST_AUCTION_HERO'
);

echo render( 
	TEMPLATES.'/auction/highlights.php', 
	array(), 
	array()
);
?>