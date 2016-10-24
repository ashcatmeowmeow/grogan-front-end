<?php 
$button_text = 'button text';
if($fields['button_text'])
	$button_text = $fields['button_text'];

$button_link = '#';
if($fields['button_link'])
	$button_link = $fields['button_link'];
?>
<div>
	<a href="<?php echo $button_link; ?>" class="">
		<?php echo $button_text; ?>
	</a>
</div>