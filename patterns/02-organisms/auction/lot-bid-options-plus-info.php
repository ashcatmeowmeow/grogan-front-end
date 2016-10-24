<?php

$bid_button_text = 'Bid';
if($config['past_auction'] == true)
	$bid_button_text = 'inquire';
elseif($config['my_bid'] == true && $config['telephone_bid'] == true)
	$bid_button_text = 'Cancel telephone Bid';
elseif($config['my_bid'] == true)
	$bid_button_text = 'Cancel or Edit Bid';

$bid_link = 'http://grogan/wordpress/account/sign-in/';
if($config['past_auction'] == true)
	$bid_link = 'http://grogan/wordpress/auctions/inquiry/';
elseif($config['absentee_bid'] == true)
	$bid_link = 'http://grogan/wordpress/auctions/edit-absentee-bid/';
elseif($config['telephone_bid'] == true)
	$bid_link = 'http://grogan/wordpress/auctions/edit-telephone-bid/';
elseif($config['is_logged_in'] == true)
	$bid_link = 'http://grogan/wordpress/auctions/bid-page/';

$track_link = 'http://grogan/wordpress/account/sign-in/';
if($config['is_logged_in'] == true)
	$track_link = '#';

$track_attr = '';
if($config['is_logged_in'] == true)
	$track_attr = 'id = "track-lot" role ="button" data-toggle="button" data-text-swap="Tracked" aria-pressed="false" autocomplete="off"';


?>

<?php
echo render( 
	ATOMS.'/containers/container-single-column-start.php',
	array(),
	array(
		'constrained_width' => 2,
	)
);
?>

<div class = 'rhythm-block'>
	<?php
	echo render( 
		ATOMS.'/auction/lot-detail-meta.php',
		$fields,
		$config
	);
	?>
</div>
<?php
echo render( ATOMS.'/auction/lot-detail-expanded-meta.php');
?>

<div class = 'pos-rel height-block-2 constrained-2 column-centered'>
	<div class = 'pos-abs left-flush'><a class = 'bold text-uppercase' href = '#'><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> previous</a></div>
	<div class = 'pos-abs right-flush'><a class = 'bold text-uppercase' href = '#'>next<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></div>
</div>

<div class="btn-group btn-group-justified" role="group" aria-label="...">
<?php
echo render( 
	ATOMS.'/buttons/button.php',
	array(
		'button_text' => $bid_button_text,
		'button_link' => $bid_link,
	),
	array(
		'button_size' => 'btn-lg',
		'button_style' => 'btn-primary',
		'has_buttons' => true,
	)
); 
?>
</div>

<?php if ($config['past_auction'] != true):?>
<div class = 'border-spacer rhythm-block-half rhythm-block-half-top'></div>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
<?php
echo render( 
	ATOMS.'/buttons/button.php',
	array(
		'button_text' => 'Inquire',
		'button_link' => 'http://grogan/wordpress/auctions/inquiry/',
	),
	array(
		'button_size' => 'btn-md',
		'button_style' => 'btn-default',
		'has_buttons' => true,
	)
); 
?>
<a <?php echo $track_attr ?> href="<?php echo $track_link ?>" class="btn btn-default">Track lot</a>
</div>
<?php endif; ?>

<p class = 'text-mini rhythm-block-top'>All property is sold "AS IS" and any statement, whether oral or written, is given as a courtesy and shall not be deemed as a guarantee, warranty, or representation of the authenticity of authorship, physical condition, size, quality, rarity, importance, provenance, exhibitions, literature or historical relevance of the property or otherwise. The absence of a condition report does not imply the item is in perfect condition. Prospective bidders should inspect the property before bidding to determine its condition. If unable to attend the auction preview, clients may contact the gallery at 617.720.2020 or email us a request for a condition report. </p>

<?php
echo render( 
	ATOMS.'/containers/container-single-column-end.php',
	array(),
	array(
		'constrained_width' => 2,
	)
); 
?>
