<?php
$form_shortcode = 'paste in shortcode';
if($fields['form_shortcode'])
	$form_shortcode = $fields['form_shortcode'];

$no_required_label = '';
if($config['no_required_label'] == true)
	$no_required_label = 'remove-required';

?>
<div class = 'container'>
	<div class = 'row'>
		<div class = 'col-xs-12'>
			<?php 
			echo render( 
				ATOMS.'/containers/container-single-column-start.php',
				$fields,
				$config
				);
			?>
				<?php 
				if($fields['title']){
					echo render( 
						ATOMS.'/text/text-block.php',
						$fields,
						$config
					);	
				}
				?>
				<div class = 'tile card module rhythm-block-half <?php echo $no_required_label; ?>'>
					<?php echo do_shortcode($form_shortcode) ?>
				</div>
				
			<?php echo render( ATOMS.'/containers/container-single-column-end.php');?>
		</div>
	</div>
</div>