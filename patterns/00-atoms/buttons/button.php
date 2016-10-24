<?php 
$button_text = 'view lot';
if($fields['button_text'])
	$button_text = $fields['button_text'];

$download = '';
if($config['download'] == true)
	$download = 'download';

$button_link = '#';
if($fields['button_link'])
	$button_link = $fields['button_link'];

$button_size = 'btn-md';
if($config['button_size'])
	$button_size = $config['button_size'];

$button_style = 'btn-default';
if($config['button_style'])
	$button_style = $config['button_style'];

$button_alignment_classes = '';
if(isset($config['button_alignment_classes']))
	$button_alignment_classes = $config['button_alignment_classes'];
?>

<?php if ($config['has_button_container'] == true): ?>
<div class = "<?php echo $button_alignment_classes; ?>">
<?php endif; ?>
	<a  
		<?php if ($config['open_new_tab'] == true): ?>
		target="_blank"
		<?php endif; ?>
		href="<?php echo $button_link; ?>" 
	   <?php if (!isset($config['has_buttons'])): ?>
	     class="bold text-uppercase"
	   <?php endif; ?>
	   <?php if ($config['has_buttons'] == true): ?>
	     class="<?php echo 'btn '.$button_size.' '.$button_style; ?>"
	   <?php endif; ?>
	<?php echo $download;?>>
		<?php echo $button_text; ?>
		<?php if (!isset($config['has_buttons'])): ?>
			<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
		<?php endif; ?>
	</a>
<?php if ($config['has_button_container'] == true): ?>
</div>
<?php endif; ?>