<?php

$image_alignment = '';
if($config['image_alignment'] == 'center')
	$image_alignment = 'image__centered';

$circle_images = '';
if($config['circle_images'] == true)
	$circle_images = 'border-circle';

$image_width = '';
if($config['image_width'] == 'small') {
	$image_width = 'image__small';
} elseif ($config['image_width'] == 'medium') {
	$image_width = 'image__medium';
} elseif ($config['image_width'] == 'large') {
	$image_width = 'image__large';
} elseif ($config['image_width'] == 'constrained') {
	$image_width = 'image__constrained';
}

$lorem_image_height = rand(100, 500);
$lorem_image_width = rand(100, 500);
$image_url = 'http://lorempixel.com/'.$lorem_image_width.'/'.$lorem_image_height;
if($fields['image'])
	$image_url = $fields['image'];

?>

<?php if (is_array($fields['image'])): ?>
	<?php if ($config['image_is_linked'] == true && $fields['button_link']): ?>
	<a href = "<?php echo $fields['button_link']; ?>">
	<?php endif; ?>
		<?php
		foreach ( $fields['image'] as $image ){
			echo "<img class = 'image__small image__centered' src='{$image['full_url']}' alt='{$image['alt']}' />";
		}
		?>
	<?php if ($config['image_is_linked'] == true): ?>
	</a>
	<?php endif; ?>
	
<?php else: ?>
	<?php if ($config['image_is_linked'] == true && $fields['button_link']): ?>
	<a href = "<?php echo $fields['button_link']; ?>">
	<?php endif; ?>
		<img class = '<?php echo $image_width." ".$image_alignment." ".$circle_images; ?>' src='<?php echo $image_url; ?>' />
	<?php if ($config['image_is_linked'] == true): ?>
	</a>
	<?php endif; ?>
<?php endif; ?>