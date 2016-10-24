<?php
/*
Template Name: telephone success
*/
?>

<?php
echo render( 
	TEMPLATES.'/headers/header.php', 
	array(), 
	array(
		'has_navigation' => true,
		'has_hero'       => false
	)
);
?>
<section class = "module stripe <?php echo $config['bg_color'];?> <?php echo $stripe_padding;?>">
	<div class = "container">
		<div class = "row">
			<div class = 'col-xs-12'>
				<?php
				$text_block = rwmb_meta($META_ID.'_text_block');			
				echo render( ATOMS.'/text/text-block.php', 
					array(
						'title'       => 'Error 404', 
						'copy'        => 'The page you are looking for does not exist.',
					),
					array()
				);
				?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>