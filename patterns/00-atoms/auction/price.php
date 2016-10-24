<?php
$estimate = '300-500';
if($fields['estimate'])
	$estimate = $fields['estimate'];

$hammer = '800';
if($fields['hammer'])
	$hammer = $fields['hammer'];
?>

<ul>
	<?php if($config['has_dummy_content'] == true || $fields['estimate']):?>
	
		<?php if($config['past_auction'] == true):?>
			<li><?php echo 'Estimate: $'.$estimate; ?></li>
		<?php elseif($config['highlights'] == true):?>
			<li><?php echo 'Estimate: $'.$estimate; ?></li>
		<?php else:?>
			<li class = 'bold'><?php echo 'Estimate: $'.$estimate; ?></li>
		<?php endif; ?>
		
	<?php endif; ?>
	<?php if(isset($config['past_auction'])):?>
		<li class = 'bold'><?php echo 'Hammer price: $'.$hammer; ?></li>
	<?php endif; ?>
		<?php if($fields['hammer']):?>
		<li class = 'bold'><?php echo 'Sale price: $'.$hammer; ?></li>
	<?php endif; ?>
</ul>