<?php 
echo render( 
	ATOMS.'/containers/container-single-column-start.php'
	);
?>
	<?php 
	echo render( 
		ATOMS.'/text/text-block.php',
		array(
			'title' => 'Add New Alert'
		),
		array(
			'header_level' => 2,
		)
	);	
	?>
	<div class = 'tile card module rhythm-block-half'>
		<form>
			<div class="form-group">
				<label for="keyword">Keyword or Phrase</label>
				<input type="text" class="form-control" id="keyword" required="required">
			</div>
			<div class="form-group">
				<div class="radio-inline">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						Any of these words
					</label>
				</div>
				<div class="radio-inline">
					<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						Exact match
					</label>
				</div>
			</div>
			<div class="gform_footer top_label rhythm-block-top"> 
				<input type="submit" class="button btn btn-primary btn-default" value="add alert"> 
			</div>
		</form>
	</div>
<?php echo render( ATOMS.'/containers/container-single-column-end.php');?>