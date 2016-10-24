<?php
/*
Template Name: press
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
'post_type' => 'press-entry',
'posts_per_page' => 9,
'paged' => $paged,
);
$the_query = new WP_Query($args);
?>


<div class = "container">

<div class = "row">
<div class = 'col-xs-12 no-margin-bottom'>
<?php 
if (function_exists("wp_bs_pagination")){
	wp_bs_pagination($the_query->max_num_pages, 5);
}
?> 
</div>
</div>

<div class = "row">
<div class = 'col-xs-12'>

<?php if ( $the_query->have_posts() ) : ?>
	
	<!-- the loop -->
	<?php $x = 1;?>		
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		<?php $x++;?>
		<?php if ( $x % 3 == 1 ): ?>	
			<div class = "row">
		<?php endif; ?>
		
		<?php
		$META_ID = 'PRESS';
		$text_block = rwmb_meta($META_ID.'_text_block');	
		echo render( MOLECULES.'/tiles/tile.php', 
			array(
				'title'              => isset( $text_block['title_'.$META_ID] ) ? $text_block['title_'.$META_ID] : false,
				'sub_header_top'     => isset( $text_block['sub_title_top_'.$META_ID] ) ? $text_block['sub_title_top_'.$META_ID] : false,
				'sub_header_bottom'  => isset( $text_block['sub_title_bottom_'.$META_ID] ) ? $text_block['sub_title_bottom_'.$META_ID] : false,
				'copy'               => isset( $text_block['copy_'.$META_ID] ) ? $text_block['copy_'.$META_ID] : false, 
				'image'              => isset( $text_block['image_'.$META_ID] ) ? $text_block['image_'.$META_ID] : false,
				'button_text'        => 'read more',
				'button_link'        => isset( $text_block['button_link_'.$META_ID] ) ? $text_block['button_link_'.$META_ID] : false,
			),
			array(
				'header_level'     => 3,
				'tiles_per_row'    => 3, 
				'open_new_tab'     => true,
				'image_width'      => 'medium',
				'image_alignment'  => 'center',
			)
		);
		?>
			
		<?php if ( $x % 3 == 1 ): ?>	
			</div>
		<?php endif; ?>
		
	<?php endwhile; ?>
	<!-- end of the loop -->

	<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
</div>

<div class = "row">
<div class = 'col-xs-12'>
<?php 
if (function_exists("wp_bs_pagination")){
	wp_bs_pagination($the_query->max_num_pages, 5);
}
?> 
</div>
</div>
</div>
<?php get_footer(); ?>