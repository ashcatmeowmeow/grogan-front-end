<?php
/*
Template Name: events
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

<!-- the loop -->
<div class = "container">
<?php while ( have_posts() ) : the_post(); ?>

		<div class = "row">
			<div class = 'col-xs-12'>
				<?php
				$META_ID = 'EVENTS';
				$text_block = rwmb_meta($META_ID.'_text_block');
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title'              => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false,
						'sub_header_top'     => isset( $text_block['sub_title_top_'.$META_ID] ) ? $text_block['sub_title_top_'.$META_ID] : false,
						'sub_header_bottom'  => isset( $text_block['sub_title_bottom_'.$META_ID] ) ? $text_block['sub_title_bottom_'.$META_ID] : false,
						'copy'               => get_the_content(), 
						'button_link'        => get_permalink(),
						'title_link'         => get_permalink(),
					),
					array(
						'header_alignment'             => 'center',
						'text_block_alignment_classes' => 'text-left',
					)
				);
				?>
			</div>
		</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>