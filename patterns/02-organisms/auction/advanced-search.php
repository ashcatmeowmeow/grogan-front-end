<?php
$range = 'Estimated value range';
if($config['past_auction_page'] == true)
	$range = 'Hammer price range';
?>

<div class = 'container'>
<div class = 'row'>
<div class = 'col-xs-12'>
	<div class = 'constrained-2 centered-column'>
		<?php
		if($config['past_auction_page'] == true){
			echo render( 
				ATOMS.'/text/text-block.php',
				array(
					'title'              => 'Search Past Auction Catalogues',
				), 
				array(
					'header_level'  => 2
				)
			);	
		}
		?>
		<div class = 'tile card module rhythm-block-half'>
			<form>
			  <div class="form-group">
				<label class="gfield_label" for="input_13_1">Categories</label>
				<div>
					<div class="checkbox-inline">
					  <label>
						<input type="checkbox" value="Fine Art" checked>
						Fine Art
					  </label>
					</div>
					<div class="checkbox-inline">
					  <label>
						<input type="checkbox" value="Jewelry" checked>
						Jewelry
					  </label>
					</div>
					<div class="checkbox-inline">
					  <label>
						<input type="checkbox" value="Silver" checked>
						Silver
					  </label>
					</div>
					<div class="checkbox-inline">
					  <label>
						<input type="checkbox" value="Decorative Arts" checked>
						Decorative Arts
					  </label>
					</div>
					<div class="checkbox-inline">
					  <label>
						<input type="checkbox" value="Furniture" checked>
						Furniture
					  </label>
					</div>
					<div class="checkbox-inline">
					  <label>
						<input type="checkbox" value="Oriental Carpets" checked>
						Oriental Carpets
					  </label>
					</div>
				</div>
			  </div>
			  <div class="form-group">
				<label>Key words</label>
				<input name="input_2" id="input_13_2" type="text" value="" class="medium form-control" tabindex="2">
				<div class="radio-inline">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					All words
				  </label>
				</div>
				<div class="radio-inline">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Any words
				  </label>
				</div>
				<div class="radio-inline">
				  <label>
					<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
					Exact words
				  </label>
				</div>
			  </div>
			  <div class = 'rhythm-block-half'>
				  <div class="form-inline-all display-inline-block">
				  <label class = 'display-block' for="input_13_1">Date range</label>
					  <div class="form-group constrained-1 centered-column">
							<select name="input_1" id="input_13_1" class="medium gfield_select form-control" tabindex="1">
								<option value="Fine Art" selected="selected">month</option>
							</select>
							<select name="input_1" id="input_13_1" class="medium gfield_select form-control" tabindex="1">
								<option value="Fine Art" selected="selected">day</option>
							</select>
							<select name="input_1" id="input_13_1" class="medium gfield_select form-control" tabindex="1">
								<option value="Fine Art" selected="selected">year</option>
							</select>
					  </div>
				  </div>
				  <span class = 'display-inline-block'>through</span>
				  <div class="form-inline-all display-inline-block">
					  <div class="form-group">
							<select name="input_1" id="input_13_1" class="medium gfield_select form-control" tabindex="1">
								<option value="Fine Art" selected="selected">month</option>
							</select>
							<select name="input_1" id="input_13_1" class="medium gfield_select form-control" tabindex="1">
								<option value="Fine Art" selected="selected">day</option>
							</select>
							<select name="input_1" id="input_13_1" class="medium gfield_select form-control" tabindex="1">
								<option value="Fine Art" selected="selected">year</option>
							</select>
					  </div>
				  </div>
			  </div>
			  <div class="gform_footer top_label rhythm-block-top"> 
			  <input type="submit" class="button btn btn-primary btn-default" value="search"> 
			  </div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
