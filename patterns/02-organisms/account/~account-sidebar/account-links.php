<?php

$prefix = '';
if($config['prefix'])
	$prefix = $config['prefix'];

$name = '';
if($config['name'])
	$name = $config['name'];

//echo $prefix.'sidebar-drawer-content';

?>

<div id = '<?php echo $name; ?>'>

	<div class="panel-group" id="<?php echo $prefix;?>accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-body">
			<?php 
			echo render( 
				ATOMS.'/buttons/button.php',
				array(
					'button_text' => 'Settings',
					'button_link' => 'http://grogan/wordpress/account/settings',
				),
				$config
			); 
			?>
		  </div>
		</div>	
		<div class="panel panel-default">
		  <div class="panel-body">
			<?php 
			echo render( 
				ATOMS.'/buttons/button.php',
				array(
					'button_text' => 'Current bids',
					'button_link' => 'http://grogan/wordpress/account/current-bids',
				),
				$config
			); 
			?>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			<?php 
			echo render( 
				ATOMS.'/buttons/button.php',
				array(
					'button_text' => 'Tracked lots',
					'button_link' => 'http://grogan/wordpress/account/tracked-lots',
				),
				$config
			); 
			?>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			<?php 
			echo render( 
				ATOMS.'/buttons/button.php',
				array(
					'button_text' => 'Purchases',
					'button_link' => 'http://grogan/wordpress/account/purchases',
				),
				$config
			); 
			?>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			<?php 
			echo render( 
				ATOMS.'/buttons/button.php',
				array(
					'button_text' => 'Consignments',
					'button_link' => 'http://grogan/wordpress/account/consignments',
				),
				$config
			); 
			?>
		  </div>
		</div>		
		<div class="panel panel-default">
		  <div class="panel-body">
			<?php 
			echo render( 
				ATOMS.'/buttons/button.php',
				array(
					'button_text' => 'Lot alerts',
					'button_link' => 'http://grogan/wordpress/account/lot-alerts',
				),
				$config
			); 
			?>
		  </div>
		</div>				
	</div>
	
</div>