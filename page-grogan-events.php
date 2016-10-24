<?php
/*
Template Name: grogan events
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
?>

<?php 
// the query
$args = array(
'post_type' => 'event'
);
$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : ?>

<div class = "container">
	<div class = "row">
		<div class = 'col-xs-12 col-md-6'>
			<?php
			$META_ID = 'EVENTS_PERMA';
			$text_block = rwmb_meta($META_ID.'_text_block');			
			echo render( ATOMS.'/text/text-block.php', 
				array(
					'title'       => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false, 
					'image'       => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,  
					'copy'        => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
					'button_text' => isset( $text_block['button_text_'.$META_ID] ) ? $text_block['button_text_'.$META_ID] : false, 
					'button_link' => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false 
				),
				array(
					'header_level' => 2,
				)
			);
			?>
		</div>

<!-- the loop -->

		<div class = 'col-xs-12 col-md-6'>
			<div class = 'rhythm-block'>
				<?php
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title' => 'Upcoming Events',
					)
				);
				?>
			</div>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
			<div class = 'rhythm-block-plus module'>
				<?php
				$META_ID = 'EVENTS';
				$text_block = rwmb_meta($META_ID.'_text_block');
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title'              => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false,
						'sub_header_top'     => isset( $text_block['sub_title_top_'.$META_ID] ) ? $text_block['sub_title_top_'.$META_ID] : false,
						'sub_header_bottom'  => isset( $text_block['sub_title_bottom_'.$META_ID] ) ? $text_block['sub_title_bottom_'.$META_ID] : false,
						'copy'               => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
						'button_text'        => 'more',
						'button_link'        => get_permalink(),
						'title_link'         => get_permalink(),
					),
					array(
						'header_level' => 3,
					)
				);
				?>
			</div>
<?php endwhile; ?>
<!-- end of the loop -->
<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<?php else : ?>
	<?php
	echo render( 
		ORGANISMS.'/stripe/stripe.php', 
		array(), 
		array(), 
		'EVENTS_PERMA'
	);
	?>
<?php endif; ?>
<?php get_footer(); ?>