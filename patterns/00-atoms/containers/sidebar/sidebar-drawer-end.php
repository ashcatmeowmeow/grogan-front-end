<?php


$name = '';
if($config['name'])
	$name = $config['name'];	

$target = '';
if($config['target'])
	$target = $config['target'];	


?>

</div>

<div class = 'toggle hidden-lg'>
	<a id="sidebar-drawer-toggle" class = "btn btn-default" href="#sidr">
		&#9776;
	</a> 
</div>

<script>
jQuery(document).ready(function() {
    jQuery('#sidebar-drawer-toggle').sidr();
});
</script>
</aside>