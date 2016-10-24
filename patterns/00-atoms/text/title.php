<?php
$title = 'Francesco Raibolini, called Francia';
if(isset($fields['title']))
	$title = $fields['title'];
elseif($config['is_fine_art'] == true)
	$title = 'Francesco Raibolini, called Francia';
elseif($config['is_other_art'] == true)
	$title = '14k yellow and white gold, black opal, and diamond bird brooch';

$title_link = '#';
if($fields['title_link'])
	$title_link = $fields['title_link'];

$header_alignment = '';
$centered_column = '';
if($config['header_alignment'] == 'center' || $config['text_block_alignment'] == 'center'){
	$header_alignment = 'text-center';
	$centered_column = 'centered-column';
}

$header_class = '';
if(isset($config['header_class']))
	$header_class = $config['header_class'];

$header_level = 2;
if(isset($config['header_level']))
	$header_level = $config['header_level'];

$header_margin = '';
if(isset($fields['sub_header_bottom']) && isset($fields['sub_header_top']))
	$header_margin = 'rhythm-block-quarter rhythm-block-quarter-top';
elseif(isset($fields['sub_header_top']))
	$header_margin = 'rhythm-block-quarter-top';
elseif(isset($fields['sub_header_bottom']))
	$header_margin = 'rhythm-block-quarter';

$sub_header_level = 'subheader1';
if($config['header_level'] == 2)
	$sub_header_level = 'subheader2';
if($config['header_level'] == 3)
	$sub_header_level = 'subheader3';

$sub_header_top = 'This is a title';
if(isset($fields['sub_header_top']))
	$sub_header_top = $fields['sub_header_top'];

$sub_header_bottom = 'This is a title';
if(isset($fields['sub_header_bottom']))
	$sub_header_bottom = $fields['sub_header_bottom'];
?>

<div class = 'title-block constrained-2 <?php echo $centered_column; ?>'>
	<?php if(isset($fields['sub_header_top'])): ?>
		<p class = "<?php echo $sub_header_level." ".$header_alignment; ?>"><?php echo $sub_header_top; ?></p>
	<?php endif; ?>
	
	<h<?php echo $header_level; ?> class = '<?php echo $header_class." ".$header_margin." ".$header_alignment; ?>'>
		<?php if ($fields['title_link']): ?>
			<a href = "<?php echo $title_link; ?>">
		<?php endif; ?>
			<?php echo $title; ?>			
		<?php if ($fields['title_link']): ?>
			</a>
		<?php endif; ?>	
	</h<?php echo $header_level; ?>>
	
	<?php if(isset($fields['sub_header_bottom'])): ?>
		<p class = "<?php echo $sub_header_level." ".$header_alignment; ?>"><?php echo $sub_header_bottom; ?></p>
	<?php endif; ?>
</div>
<?php if(!empty($fields['title']) || !isset($config['no_border'])): ?>
<div class = '
	border-spacer 
	border-primary
	<?php if(!isset($config['border_large'])): ?>
		border-spacer__small 
	<?php endif; ?>
	'>
</div>
<?php endif; ?>