<?php
/*
Template Name: buying
*/
?>

<?php

//'main_title' => rwmb_meta( 'HEADER-main-title' ),
echo render( 
	TEMPLATES.'/headers/header-no-bleed.php', 
	array(), 
	array(
		'has_navigation'   => true,
		'classes'          => ''
	)
);
?>


<?php get_footer(); ?>