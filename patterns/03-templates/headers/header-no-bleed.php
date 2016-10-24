<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
<title><?php bloginfo(‘name’);?> | <?php wp_title(); ?></title>
<?php wp_head(); ?> 
</head>
<body>
<div>
	<?php if($config['has_navigation'] != false): ?>
		<?php 
		echo render(
			ORGANISMS.'/navigation/navigation.php',
			array(),
			$config
		); 
		?>
	<?php endif; ?>
	
	<?php if($config['has_hero'] == true): ?>
		<?php 
		echo render(
			ORGANISMS.'/heroes/hero-no-bleed.php',
			$fields,
			$config
		); 
		?>
	<?php endif; ?>
</div>