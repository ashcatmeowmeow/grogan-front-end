<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
<title><?php bloginfo(‘name’);?> | <?php wp_title(); ?></title>
<?php wp_head(); ?> 
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="http://grogan/wordpress/home/">
			<img src = "<?php echo IMAGES."/grogan-logo-large.gif" ?>" />
		  </a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php /* Primary navigation */
				wp_nav_menu( array(
				'menu' => 'primary',
				'depth' => 2,
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right',
				//Process nav menu using our custom nav walker
				'walker' => new wp_bootstrap_navwalker()
				));
			?>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
		
	<?php
	$mainTitle = rwmb_meta( 'HEADER-main-title' );
	require ORGANISMS.'/02-hero/00-hero-main.php';
	?>