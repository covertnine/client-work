<?php
/**
 * Color scheme, style variations for core blocks, and post formats setup
 *
 * @package c9
 */

 // Registers a style variation for separators
register_block_style(
    'core/separator',
    array(
        'name'         => 'black-bar',
        'label'        => __( 'Full Width Black Bar' ),
    )
);

register_block_style(
    'c9-blocks/grid',
    array(
        'name'         => 'gray-diagonal',
        'label'        => __( 'Gray Diagonal Background' ),
	)

);

register_block_style(
    'c9-blocks/grid',
	array(
			'name'		  => 'dark-gradient-left',
			'label'		  => __( 'Left Side Dark Gradient Background' ),
	)
);

register_block_style(
    'core/image',
	array(
			'name'		  => 'img-shadow',
			'label'		  => __( 'Shadow Below' ),
	)
);

register_block_style(
    'c9-blocks/heading',
	array(
			'name'		  => 'abel-heading',
			'label'		  => __( 'Second Heading' ),
	)
);

register_block_style(
    'core/paragraph',
	array(
			'name'		  => 'black-bar',
			'label'		  => __( 'Black Bar Behind' ),
	)
);

if (!function_exists('c9_client_setup')) {
    function c9_client_setup() {

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

add_action('after_setup_theme', 'c9_client_setup');
