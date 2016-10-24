<?php 
echo render( 
	ATOMS.'/containers/container-single-column-start.php'
	);
?>
	<?php 
	echo render( 
		ATOMS.'/text/text-block.php',
		array(
			'title' => 'Your Alerts'
		),
		array(
			'header_level' => 2,
		)
	);	
	?>
	<div class = 'tile card module rhythm-block-half'>
		<form>
			<div class="form-group">
				<input type="text" class="form-control" placeholder = 'My Alert one' id="keyword">
			</div>
			<div class="form-group">
				<div class="radio-inline">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
						Edit
					</label>
				</div>
				<div class="radio-inline">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
						Delete
					</label>
				</div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder = 'My Alert two' id="keyword">
			</div>
			<div class="form-group">
				<div class="radio-inline">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
						Edit
					</label>
				</div>
				<div class="radio-inline">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
						Delete
					</label>
				</div>
			</div>
			<div class="gform_footer top_label rhythm-block-top"> 
				<input type="submit" class="button btn btn-primary btn-default" value="update alerts"> 
			</div>
		</form>
	</div>
<?php echo render( ATOMS.'/containers/container-single-column-end.php');?>