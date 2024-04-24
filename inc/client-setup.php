<?php

/**
 * Color scheme, style variations for core blocks, sample content, and post formats setup
 *
 * @package c9
 */

add_action('after_setup_theme', 'c9_client_setup');
if (!function_exists('c9_client_setup')) {
	function c9_client_setup()
	{

		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Make specific theme colors available in the editor.
		add_theme_support('editor-color-palette', array(
			array(
				'name' => 'orange',
				'color'    => '#E8983A',
				'slug' => 'color-orange',
			),
			array(
				'name' => 'yellow',
				'color' => '#FEC50A',
				'slug'    => 'color-yellow',
			),
			array(
				'name' => 'gray',
				'color'    => '#ADB1B2',
				'slug'    => 'color-gray',
			),
			array(
				'name' => 'white',
				'color'    => '#ffffff',
				'slug'    => 'color-white',
			),
			array(
				'name' => 'black',
				'color'    => '#000000',
				'slug'    => 'color-black',
			),
		));
	}
}

// Registers a style variation for separators
register_block_style(
	'core/separator',
	array(
		'name'         => 'black-bar',
		'label'        => __('Full Width Black Bar', 'c9-work'),
	)
);

register_block_style(
	'c9-blocks/grid',
	array(
		'name'         => 'gray-diagonal',
		'label'        => __('Gray Diagonal Background', 'c9-work'),
	)

);

register_block_style(
	'c9-blocks/grid',
	array(
		'name'		  => 'dark-gradient-left',
		'label'		  => __('Left Side Dark Gradient Background', 'c9-work'),
	)
);

register_block_style(
	'core/image',
	array(
		'name'		  => 'img-shadow',
		'label'		  => __('Shadow Below', 'c9-work'),
	)
);

register_block_style(
	'core/paragraph',
	array(
		'name'		  => 'black-bar',
		'label'		  => __('Black Bar Behind', 'c9-work'),
	)
);


/**
 * Registering block patterns category with core Gutenberg blocks
 */
add_action('init', 'c9starter_register_block_patterns_cat');
function c9starter_register_block_patterns_cat()
{
	if (class_exists('WP_Block_Patterns_Registry')) {
		register_block_pattern_category(
			'c9',
			array('label' => __('C9 All Patterns', 'c9-work'))
		);
		register_block_pattern_category(
			'landingpage',
			array('label' => __('C9 Page + Post Templates', 'c9-work'))
		);
		register_block_pattern_category(
			'video',
			array('label' => __('C9 Video', 'c9-work'))
		);
		register_block_pattern_category(
			'audio',
			array('label' => __('C9 Audio', 'c9-work'))
		);
	}
}
