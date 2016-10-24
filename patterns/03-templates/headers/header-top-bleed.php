<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
<title><?php bloginfo(‘name’);?> | <?php wp_title(); ?></title>
<?php wp_head(); ?> 
<style>
.tile--has-background {
	width: 1170px;
    margin: 0 auto;
}

.navbar {
position: absolute;
left: 90px;
}

.navbar-default .navbar-nav > li > a {
    color: white;
	font-weight: bold;
}
</style>
</head>
<body>
<div>
	<?php if($config['has_navigation'] != false): ?>
		<?php 
		echo render(
			ORGANISMS.'/navigation/navigation-top-bleed.php',
			array(),
			$config
		); 
		?>
	<?php endif; ?>
	
	<?php if($config['has_hero'] == true): ?>
		<?php 
		echo render(
			ORGANISMS.'/heroes/hero-top-bleed.php',
			$fields,
			$config
		); 
		?>
	<?php endif; ?>
</div>