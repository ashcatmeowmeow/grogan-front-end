<?php
/*
Template Name: content single column no hero
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
<div class = 'no-title-border'>
<?php
echo render( 
	ORGANISMS.'/stripe/stripe.php', 
	array(), 
	array(
		'text_block_alignment_classes'   => 'text-left',
		'has_button_container'           => true,
		'button_alignment_classes'       => 'text-center',
	), 
	'CONTENT_SINGLE_COLUMN_COPY'
);
?>
</div>

<?php get_footer(); ?>