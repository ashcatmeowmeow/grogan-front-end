<?php
/*
Template Name: highlights
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => true,
		'has_navigation'   => true,
	)
);

echo render( 
	TEMPLATES.'/auction/highlights.php', 
	array(), 
	array()
);
?>