<div class = "col-xs-12 col-md-4">
	<div class = "module tile icon-lockup">
		<div class = "constrained-1 centered-column">
			<div class = "row">
				<div class = "col-sm-4 col-md-12">
					<div class = "rhythm-block">	
						<?php
						if (is_array($icon_icon)) {
							foreach ( $icon_icon as $image ){
								echo "<img class = 'image__small image__centered' src='{$image['full_url']}' alt='{$image['alt']}' />";
							}
						}
						?>
					</div>
				</div>
				<div class = "col-sm-6 col-md-12">
					<h3><?php echo $icon_title; ?></h3>
					<p><?php echo $icon_text; ?></p>
					<?php
					if (rwmb_meta( $META_ID.'button_text_'.$i )) {
						require ATOMS.'/buttons/button.php';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>