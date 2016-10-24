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
			Showing 35 of 186 lots
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
				<label for="bid">Jump to Lot</label>
				<input type="text" name="jump" id="name" value="" tabindex="1" size = "5">
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
				<label for="bid">Sort by:</label>
				<select name="sortby">
					<option>Lot number</option>
					<option>High to low</option>
					<option>Low to High</option>
				</select>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
				<label for="bid">Search</label>
				<input type="search" name="googlesearch">
		  </div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" role="tab" id="heading1">
			  <h4 class="panel-title">
				  Categories
			  </h4>
			</div>
			<div class="panel panel-default">
			  <div class="panel-body">
					<div><input type="checkbox" name="categories" value="jewelry">Jewelry</div>
					<div><input type="checkbox" name="categories" value="fine-art">Fine art</div>
					<div><input type="checkbox" name="categories" value="rugs">Rugs</div>
					<div><input type="checkbox" name="categories" value="decorative arts">Decorative arts</div>
			  </div>
			</div>
		</div>
	</div>
	
</div>