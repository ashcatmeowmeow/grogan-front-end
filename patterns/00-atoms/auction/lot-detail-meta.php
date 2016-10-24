<?php 
$title_array = array(
	'title'             => 'Francesco Raibolini, called Francia',
	'sub_header_top'    => 'Lot 1',
	'sub_header_bottom' => '(Italian, 1447-1517)'
);
if ($config['is_other_art'] == true){
	$title_array = array(
		'title'             => '14k yellow and white gold, black opal, and diamond bird brooch',
		'sub_header_top'    => 'Lot 1',
		'sub_header_bottom' => 'inlaid with mother of pearl, coral, malachite, onyx, lapis, and others; signed; 8.13 dwts.; 3/4 x 3/4 in.; with posts for pierced ears'
	);
}
?>
<div class = 'module rhythm-block'>
<?php
	echo render( 
		ATOMS.'/text/text-block.php', 
		$title_array ,
		array(
			'header_level'     => 1,
			'classes'          => '',
			'text_block_alignment_classes'   => 'text-left',
			'no_border'        => true,
			'header_class'     => 'text-large body-font',
		)
	);
?>
</div>

<?php if ($config['is_fine_art'] == true):?>
<div class = 'module rhythm-block-half'>
	<h2 class = 'body-font text-large text-left rhythm-block-quarter'>Madonna and Child</h2>
	<ul class = 'no-margin-bottom'>
		<li>Oil on panel </li>
		<li>Likely mid 19th century </li>
		<li>22 x 16 in. (50 x 45 in.)</li>
	</ul>
</div>
<?php endif; ?>

<div class = 'module rhythm-block-half'>
<?php
	echo render( 
		ATOMS.'/auction/price.php',
		$fields,
		$config
	);
?>
</div>