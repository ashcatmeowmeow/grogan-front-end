<?php
/*
Template Name: auction info template
*/
?>



<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_hero'         => true,
		'has_navigation'   => true,
	),
	'AUCTION_HERO'
);

echo render( 
	ORGANISMS.'/lockups/content-page-multi-tile.php', 
	array(), 
	array(
		'tiles_per_row'            => 2, 
		'number_of_rows'           => 1, 
		'text_block_alignment_classes'   => 'text-left',
	), 
	"AUCTION_INFO_INTRO"
);
?>

<section>
<div class = 'rhythm-block'>
	<?php 
	echo render( 
		ATOMS.'/text/text-block.php',
		array(
			'title' => 'Highlights',
		),
		array(
			'header_level' => 2,
		)
	); 
	?>
</div>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-xs-12'>
	<?php 
	echo render( 
		ORGANISMS.'/auction/highlight-multi-tile.php',
		array(),
		array(),
		'HIGHLIGHTS_LOTS'
	);?>
</div>
</div>
</div>
</section>

<?php echo $a_new_variable; ?>

<?php get_footer(); ?>