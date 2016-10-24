<?php 

if($config['bid_page'] == true)
	$title = 'Bid';
elseif($config['inquiry'] == true)
	$title = 'Enquire';
?>
<div class = "lot-confirmation">
<section class = "stripe">
	<div class = "container">
	<?php
	echo render( 
		ATOMS.'/text/title.php',
		array(
			'title' => 'Cancel or Edit bid',
		),
		array(
			'header_level'          => 1,
			'header_alignment'  => 'center',
		)
	);
	?>
		<div class = "row">
			<div class = 'col-xs-12'>
				<?php echo render( 
					ORGANISMS.'/auction/single-lot-card.php',
					array(),
					array()
				);
				?>
			</div>
		</div>	
	</div>
</section>

<?php if($config['absentee_bid'] == true): ?>
<section class = 'stripe'>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-xs-12'>
	<?php
	echo render( 
		ATOMS.'/text/text-block.php',
		array(
			'title'       => 'Absentee Bid', 
		),
		array(
			'header_level'          => 2,
			'header_alignment'  => 'center',
			'text_block_alignment_classes'   => 'text-center-xs-min',
		)
	);
	?>

	<div class = 'centered-column text-center grogan-edit-abs-bid'>
		<form class="form-inline pos-rel text-center text-left-sm-min" method="post" enctype="multipart/form-data" id="gform_10" action="/wordpress/test-place-bid-page/">
			<div class="form-group no-margin-bottom">
				<label for="exampleInputAmount">Current Bid: </label>
				<span class = 'bold'>$13,400</span>
			</div>
			<li id="field_10_1" class="gfield gform_validation_container field_sublabel_below field_description_below form-group">
				<label class="gfield_label" for="input_10_1">Phone</label>
				<div class="ginput_container"><input name="input_1" id="input_10_1" type="text" value="" autocomplete="off" class="form-control"><span class="help-block"></span></div>
				<div class="gfield_description">This field is for validation purposes and should be left unchanged.</div>
			</li>
			<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_10" class="btn btn-default pos-abs-right-flush__sm-min" value="cancel bid" tabindex="1" onclick="if(window[&quot;gf_submitting_10&quot;]){return false;}  if( !jQuery(&quot;#gform_10&quot;)[0].checkValidity || jQuery(&quot;#gform_10&quot;)[0].checkValidity()){window[&quot;gf_submitting_10&quot;]=true;}  "> 
				<input type="hidden" class="gform_hidden" name="is_submit_10" value="1">
				<input type="hidden" class="gform_hidden" name="gform_submit" value="10">
				<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
				<input type="hidden" class="gform_hidden" name="state_10" value="WyJbXSIsIjEwZTIwZTVjOGY3YjJlMGNiODFhOWI4ZTU5NWVmOTMyIl0=">
				<input type="hidden" class="gform_hidden" name="gform_target_page_number_10" id="gform_target_page_number_10" value="0">
				<input type="hidden" class="gform_hidden" name="gform_source_page_number_10" id="gform_source_page_number_10" value="1">
				<input type="hidden" name="gform_field_values" value="">
			</div>
		</form>
		<script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [10, 1]) } ); </script>				
		<form class="form-inline rhythm-block-half-top text-left-sm-min pos-rel" method="post" enctype="multipart/form-data" id="gform_9" action="/wordpress/test-place-bid-page/">
			<div class="form-group text-left">
				<label for="input_9_1">Edit Bid:</label>
				<div class="input-group input-group__grogan-edit-bid">
				  <div class="input-group-addon">$</div>
				  <input name="input_1" id="input_9_1" type="text" value="" class="form-control" tabindex="1" required="required" placeholder="Amount">
				  <div class="input-group-addon">.00</div>
				</div>
			</div>
			<li id="field_9_2" class="gfield gform_validation_container field_sublabel_below field_description_below form-group">
				<label class="gfield_label" for="input_9_2">Email</label>
				<div class="ginput_container"><input name="input_2" id="input_9_2" type="text" value="" autocomplete="off" class="form-control"><span class="help-block"></span><span class="help-block"></span></div>
				<div class="gfield_description">This field is for validation purposes and should be left unchanged.</div>
			</li>
			<div class="gform_footer top_label"> <input class="btn btn-default btn-primary grogan-edit-abs-bid--submit" type="submit" id="gform_submit_button_9" class="gform_button button btn btn-primary btn-default" value="edit bid" tabindex="2" onclick="if(window[&quot;gf_submitting_9&quot;]){return false;}  if( !jQuery(&quot;#gform_9&quot;)[0].checkValidity || jQuery(&quot;#gform_9&quot;)[0].checkValidity()){window[&quot;gf_submitting_9&quot;]=true;}  "> 
				<input type="hidden" class="gform_hidden" name="is_submit_9" value="1">
				<input type="hidden" class="gform_hidden" name="gform_submit" value="9">
				<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
				<input type="hidden" class="gform_hidden" name="state_9" value="WyJbXSIsIjEwZTIwZTVjOGY3YjJlMGNiODFhOWI4ZTU5NWVmOTMyIl0=">
				<input type="hidden" class="gform_hidden" name="gform_target_page_number_9" id="gform_target_page_number_9" value="0">
				<input type="hidden" class="gform_hidden" name="gform_source_page_number_9" id="gform_source_page_number_9" value="1">
				<input type="hidden" name="gform_field_values" value="">
			</div>
		</form>
	</div>
</div>
</div>
</div>
</section>
<?php endif; ?>

<?php if($config['telephone_bid'] == true): ?>
<section class = 'stripe'>
<div class = 'container'>
<div class = 'row'>
<div class = 'col-xs-12'>
	<div class = 'centered-column text-center grogan-edit-abs-bid'>
	<?php
	echo render( 
		ATOMS.'/text/text-block.php',
		array(
			'title'       => 'Telephone bid', 
		),
		array(
			'header_level'          => 2,
			'header_alignment'  => 'center',
			'text_block_alignment_classes'   => 'text-center-xs-min',
		)
	);
	?>
	<p>If you need to change your telephone&nbsp;number for the day of sale, please give us a call at <a href="tel://617.720.2020">617.720.2020.</a></p>
	<div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_11">
		<form method="post" enctype="multipart/form-data" id="gform_11" action="/wordpress/test-place-bid-page/">
			<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_11" class="gform_button button btn btn-primary btn-default" value="cancel bid" tabindex="1" onclick="if(window[&quot;gf_submitting_11&quot;]){return false;}  if( !jQuery(&quot;#gform_11&quot;)[0].checkValidity || jQuery(&quot;#gform_11&quot;)[0].checkValidity()){window[&quot;gf_submitting_11&quot;]=true;}  "> 
				<input type="hidden" class="gform_hidden" name="is_submit_11" value="1">
				<input type="hidden" class="gform_hidden" name="gform_submit" value="11">
				<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
				<input type="hidden" class="gform_hidden" name="state_11" value="WyJbXSIsIjEwZTIwZTVjOGY3YjJlMGNiODFhOWI4ZTU5NWVmOTMyIl0=">
				<input type="hidden" class="gform_hidden" name="gform_target_page_number_11" id="gform_target_page_number_11" value="0">
				<input type="hidden" class="gform_hidden" name="gform_source_page_number_11" id="gform_source_page_number_11" value="1">
				<input type="hidden" name="gform_field_values" value="">
			</div>
		</form>
	</div>
	<script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [11, 1]) } ); </script>				
	</div>
</div>
</div>
</div>
</section>
<?php endif; ?>