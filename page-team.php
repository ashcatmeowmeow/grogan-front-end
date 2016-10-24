<?php
/*
Template Name: team
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
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'            => 3,
		'image_width'              => 'medium',
	), 
	"TEAM_MEMBERS"
);
?>

<?php get_footer(); ?>