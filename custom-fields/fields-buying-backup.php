<?php
add_filter( 'rwmb_meta_boxes', 'BUYING_FIELDS_register_meta_boxes' );


function BUYING_FIELDS_register_meta_boxes( $meta_boxes )
{	
	$box_prefix = 'BUYING_OPTIONS_';
    $meta_boxes[] = array(
        'id'         => $box_prefix . 'icons',
        'title'      => 'buying options',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
			array(
                'name'  => 'title',
                'id'    => $box_prefix  . 'title',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => 'copy',
                'id'    => $box_prefix  . 'copy',
                'type'  => 'wysiwyg',
                'clone' => false,
            ),
            array(
                'name'  => 'bidding option 1 title',
                'id'    => $box_prefix  . 'tile_1_title',
                'type'  => 'text',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 1 icon',
                'id'    => $box_prefix  . 'tile_1_image',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 1 copy',
                'id'    => $box_prefix  . 'tile_1_copy',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 1 button text',
                'id'    => $box_prefix  . 'tile_1_button_text',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 1 button link',
                'id'    => $box_prefix  . 'tile_1_button_link',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 2 title',
                'id'    => $box_prefix  . 'tile_2_title',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 2 icon',
                'id'    => $box_prefix  . 'tile_2_image',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 2 copy',
                'id'    => $box_prefix  . 'tile_2_copy',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 2 button text',
                'id'    => $box_prefix  . 'tile_2_button_text',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 2 button link',
                'id'    => $box_prefix  . 'tile_2_button_link',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 3 title',
                'id'    => $box_prefix  . 'tile_3_title',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 3 icon',
                'id'    => $box_prefix  . 'tile_3_image',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 3 text',
                'id'    => $box_prefix  . 'tile_3_copy',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 3 button text',
                'id'    => $box_prefix  . 'tile_3_button_text',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'bidding option 3 button link',
                'id'    => $box_prefix  . 'tile_3_button_link',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            )
        )
    );
	
	$box_prefix = 'BUYING_SHIPPING_';
    $meta_boxes[] = array(
        'id'         => $box_prefix . 'box',
        'title'      => 'shipping text',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => 'title',
                'id'    => $box_prefix  . 'title',
                'type'  => 'text',
                'clone' => false,
            ),
			array(
                'name'  => 'copy',
                'id'    => $box_prefix  . 'copy',
                'type'  => 'wysiwyg',
                'clone' => false,
            ),
			array(
                'name'  => 'button text',
                'id'    => $box_prefix  . 'button_text',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'button link',
                'id'    => $box_prefix  . 'button_link',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            )
        )
    );
	
	$box_prefix = 'BUYING_DEALERS_';
	$meta_boxes[] = array(
		'title'  => 'dealers',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
		'fields' => array(
			FieldModules::createTilesGroup($box_prefix, 'massachusetts dealers', '1'),
			
		),
	);
	
	$box_prefix = 'BUYING_DEALERS_';
    $meta_boxes[] = array(
        'id'         => $box_prefix . 'box',
        'title'      => 'dealers text',
		'post_types' => array( 'page' ),
		'include' => array( 
			'template' => array( 'page-buying.php'),
		),
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
			array(
                'name'  => 'Massachusetts dealers title',
                'id'    => $box_prefix  . 'tile_1_title',
                'type'  => 'text',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'Massachusetts dealers copy',
                'id'    => $box_prefix  . 'tile_1_copy',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'Massachusetts dealers button text',
                'id'    => $box_prefix  . 'tile_1_button_text',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
			array(
                'name'  => 'Massachusetts dealers button link',
                'id'    => $box_prefix  . 'tile_1_button_link',
                'type'  => 'text',
                'std'   => '',
                'class' => 'icon-meta',
                'clone' => false,
            ),
        )
    );
    return $meta_boxes;
}
?>