<?php 

if($config['bid_page'] == true)
	$title = 'Leave a Bid';
elseif($config['inquiry'] == true)
	$title = 'Inquire';
?>
<div class = "lot-confirmation">
<section class = "stripe">
	<div class = "container">
	<?php
	echo render( 
		ATOMS.'/text/title.php',
		array(
			'title' => $title,
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

<?php if($config['bid_page'] == true): ?>
<section class = "module stripe secondaryColor-bg">
<div class = "container">
<div class = "row">
	<div class = 'col-xs-12 col-md-6'>
		<div class = 'constrained-1 centered-column text-center'>
		<?php
		echo render( 
			ATOMS.'/text/text-block.php',
			array(
				'title'       => 'Absentee Bid', 
			),
			array(
				'header_level'          => 2,
			)
		);
		?>
		<form method="post" enctype="multipart/form-data" id="gform_7" action="/wordpress/test-place-bid-page/">
			<div class="form-group text-left">
				<label class="sr-only" for="input_7_1">your bid</label>
				<div class="input-group">
					<div class="input-group-addon">$</div>
						<input name="input_1" id="input_7_1" type="text" value="" class="form-control" tabindex="1" required="required" placeholder="Amount">
					<div class="input-group-addon">.00</div>
				</div>
			</div>
			<li id="field_7_2" class="gfield gform_validation_container field_sublabel_below field_description_below form-group">
				<label class="gfield_label" for="input_7_2">Phone</label>
				<div class="ginput_container"><input name="input_2" id="input_7_2" type="text" value="" autocomplete="off" class="form-control"><span class="help-block"></span></div>
				<div class="gfield_description">This field is for validation purposes and should be left unchanged.</div>
			</li>
			<div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_7" class="gform_button button btn btn-primary btn-default" value="place bid" tabindex="2" onclick="if(window[&quot;gf_submitting_7&quot;]){return false;}  if( !jQuery(&quot;#gform_7&quot;)[0].checkValidity || jQuery(&quot;#gform_7&quot;)[0].checkValidity()){window[&quot;gf_submitting_7&quot;]=true;}  "> 
				<input type="hidden" class="gform_hidden" name="is_submit_7" value="1">
				<input type="hidden" class="gform_hidden" name="gform_submit" value="7">
				<input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
				<input type="hidden" class="gform_hidden" name="state_7" value="WyJbXSIsIjEwZTIwZTVjOGY3YjJlMGNiODFhOWI4ZTU5NWVmOTMyIl0=">
				<input type="hidden" class="gform_hidden" name="gform_target_page_number_7" id="gform_target_page_number_7" value="0">
				<input type="hidden" class="gform_hidden" name="gform_source_page_number_7" id="gform_source_page_number_7" value="1">
				<input type="hidden" name="gform_field_values" value="">
			</div>
		</form>
		<script type="text/javascript"> jQuery(document).bind('gform_post_render', function(event, formId, currentPage){if(formId == 7) {} } );jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit){} );</script>
		<script type="text/javascript"> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [7, 1]) } ); </script>	
		</div>
	</div>
	<div class = 'col-xs-12 col-md-6'>
	<div class = 'constrained-2 centered-column text-center'>
		<?php
		echo render( 
			ATOMS.'/text/text-block.php',
			array(
				'title'       => 'Telephone bid', 
			),
			array(
				'header_level'          => 2,
			)
		);
		?>
		<p class = 'rhythm-block-half'>Your number on file is xxx.xxx.xxxx. After placing your bid, you may change your telephone number for the day of sale by contacting us at <a href="tel://617.720.2020">617.720.2020</a>.</p>
		<?php echo do_shortcode('[gravityform id="8" title="false" description="false"]') ?>
		</div>
	</div>
</div>
</div>
</section>

<div class = 'iv-bid'>
<?php
	echo render( 
		ORGANISMS.'/stripe/stripe.php', 
		array(), 
		array(
			'header_level'                   => 2,
			'has_buttons'                    => true,
			'button_size'                    => 'btn-md',
			'button_style'                   => 'btn-primary',
			'has_button_container'           => true,
			'text_block_alignment_classes'   => 'text-center-xs-min',
		),
		'INVALUABLE_BID'
	);
?>
<?php endif; ?>
</div>


<?php
if($config['inquiry'] == true) {
	
	echo render( 
		MOLECULES.'/forms/form.php', 
		array(
			'title'              => 'Lot Inquiry',
			'form_shortcode'     => '[gravityform id="5" title="false" description="false"]',
		), 
		array(
			'constrained_width'  => 2
		)
	);
}
?>
</div>