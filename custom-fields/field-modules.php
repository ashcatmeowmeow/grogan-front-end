<?php

class Field_modules {
	
	static $text_block =  array(
		array(
			'name'  => 'title',
			'id'    => 'title',
			'type'  => 'text',
			'clone' => false,
		),
		array(
			'name'  => 'image',
			'id'    => 'image',
			'type'  => 'file_input',
			'clone' => false,
		),
		array(
			'name'  => 'copy',
			'id'    => 'copy',
			'type'  => 'wysiwyg',
			'clone' => false,
		),
		array(
			'name'  => 'button text',
			'id'    => 'button_text',
			'type'  => 'text',
			'clone' => false,
		),
		array(
			'name'  => 'button link',
			'id'    => 'button_link',
			'type'  => 'text',
			'clone' => false,
		),
		array(
			'name'  => 'background image',
			'id'    => 'bg_image',
			'type'  => 'file_input',
			'clone' => false,
		),
	);
	
	static function create_tiles_group($box_prefix, $group_title, $number){
		$returnArray = array(
				'id'     => $box_prefix  . 'tile_'. $number,
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => self::$text_block
		);
		return $returnArray;
	}
	
	static function create_text_block_group($box_prefix, $group_title){
		$returnArray = array(
				'id'     => $box_prefix  . 'text_block',
				'name'   => $group_title,
				'type'   => 'group',
				// List of child fields
				'fields' => self::$text_block
		);
		return $returnArray;
	}
}
?>