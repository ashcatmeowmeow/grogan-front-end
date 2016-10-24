<section id = 'images-form' class = 'stripe rhythm-block-padding-both calder has-background no-margin-bottom'>
<div class = "container module">
<div class = 'row'>
<div class = 'col-xs-12'>
	<?php
		echo render( 
			MOLECULES.'/forms/form.php', 
			array(
				'title'              => 'Contact us',
				'form_shortcode'     => '[gravityform id="17" title="false" description="false"]',
			), 
			array(
				'constrained_width'  => 2
			)
		);
	?>
</div>
</div>
</div>
</section>

<?php
echo render( 
	TEMPLATES.'/footers/footer.php', 
	array(), 
	array()
);
?>