<?php

class Field_modules_w_fix {
	
	static function create_tiles_group($box_prefix, $group_title, $number){
		$returnArray = array(
				'id'     => $box_prefix .'_tile_'.$number,
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix.'_'.$number,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'image',
						'id'    => 'image_'.$box_prefix.'_'.$number,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'copy',
						'id'    => 'copy_'.$box_prefix.'_'.$number,
						'type'  => 'wysiwyg',
						'clone' => false,
					),
					array(
						'name'  => 'button text',
						'id'    => 'button_text_'.$box_prefix.'_'.$number,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button link',
						'id'    => 'button_link_'.$box_prefix.'_'.$number,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'background image',
						'id'    => 'bg_image_'.$box_prefix.'_'.$number,
						'type'  => 'file_input',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_highlights_group($box_prefix){
		$returnArray = array(
				'id'     => $box_prefix .'_tile',
				'name'   => $group_title,
				'type'   => 'group',
				// Clone whole group?
				'clone'  => true,
				// Drag and drop clones to reorder them?
				'sort_clone' => true,
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'tag',
						'id'    => 'tag_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'copy',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'textarea',
						'clone' => false,
					),
					array(
						'name'  => 'estimate',
						'id'    => 'estimate_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sale price',
						'id'    => 'hammer_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'image',
						'id'    => 'image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'button text',
						'id'    => 'button_text_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button link',
						'id'    => 'button_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_business_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix .'_tile',
				'name'   => $group_title,
				'type'   => 'group',
				// Clone whole group?
				'clone'  => true,
				// Drag and drop clones to reorder them?
				'sort_clone' => true,
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'link',
						'id'    => 'title_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'address',
						'id'    => 'address_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'phone number',
						'id'    => 'phone_number_'.$box_prefix,
						'type'  => 'text',
						'desc'  => 'use xxx.xxx.xxxx format',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_clone_tiles_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix .'_tile',
				'name'   => $group_title,
				'type'   => 'group',
				// Clone whole group?
				'clone'  => true,
				// Drag and drop clones to reorder them?
				'sort_clone' => true,
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'copy',
						'id'    => 'copy_'.$box_prefix,
						'type'  => 'textarea',
						'clone' => false,
					),
					array(
						'name'  => 'image',
						'id'    => 'image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'button text',
						'id'    => 'button_text_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button link',
						'id'    => 'button_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'bg_image',
						'id'    => 'bg_image_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_text_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . '_text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'image',
						'id'    => 'image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'copy',
						'id'    => 'copy_'.$box_prefix,
						'type'  => 'wysiwyg',
						'clone' => false,
					),
					array(
						'name'  => 'button text',
						'id'    => 'button_text_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button link',
						'id'    => 'button_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'background image',
						'id'    => 'bg_image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_event_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . '_text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'image',
						'id'    => 'image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'copy',
						'id'    => 'copy_'.$box_prefix,
						'type'  => 'wysiwyg',
						'clone' => false,
					)
				)
		);
		return $returnArray;
	}
	
	static function create_press_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . '_text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'image',
						'id'    => 'image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'copy',
						'id'    => 'copy_'.$box_prefix,
						'type'  => 'wysiwyg',
						'clone' => false,
					),
					array(
						'name'  => 'read more link',
						'id'    => 'button_link_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
					array(
						'name'  => 'background image',
						'id'    => 'bg_image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_header_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . '_text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'title link',
						'id'    => 'title_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'background image',
						'id'    => 'hero_bg_image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}

	static function create_auction_header_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . '_text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'title link',
						'id'    => 'title_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button text',
						'id'    => 'button_text_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button link',
						'id'    => 'button_link_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button text 2',
						'id'    => 'button_text_2_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button link 2',
						'id'    => 'button_link_2_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'background image',
						'id'    => 'hero_bg_image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
	
	static function create_auction_post_header_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . '_text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => array(
					array(
						'name'  => 'title',
						'id'    => 'title_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title top',
						'id'    => 'sub_title_top_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'sub title bottom',
						'id'    => 'sub_title_bottom_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'button text',
						'id'    => 'button_text_2_'.$box_prefix,
						'type'  => 'text',
						'desc'  => 'Use for a link to the catalog or other page if you need it',
						'clone' => false,
					),
					array(
						'name'  => 'button link',
						'id'    => 'button_link_2_'.$box_prefix,
						'type'  => 'text',
						'clone' => false,
					),
					array(
						'name'  => 'background image',
						'id'    => 'hero_bg_image_'.$box_prefix,
						'type'  => 'file_input',
						'clone' => false,
					),
				)
		);
		return $returnArray;
	}
}
?>