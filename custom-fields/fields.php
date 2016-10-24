<?php
function createStripeMetaBox ($prefix, $title) {
	${$prefix} = function( $meta_boxes )
	{
		$box_prefix = $prefix;
		$meta_boxes[] = array(
			'id'         => $title . 'box',
			'title'      => $box_prefix,
			'post_types' => array( 'page' ),
			'context'    => 'normal',
			'priority'   => 'high',

			'fields' => array(
				array(
					'name'  => 'main title',
					'desc'  => 'the text for the main title',
					'id'    => $box_prefix  . 'main-title',
					'type'  => 'text',
					'std'   => '',
					'class' => 'custom-class',
					'clone' => false,
				)
			)
		);

		return $meta_boxes;
	};
	add_filter( 'rwmb_meta_boxes', ${$prefix} );
}

createStripeMetaBox('test', 'hey heysdfsdfsdf');