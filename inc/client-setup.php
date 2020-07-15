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
        'label'        => __( 'Full Width Black Bar', 'c9' ),
    )
);

register_block_style(
    'c9-blocks/grid',
    array(
        'name'         => 'gray-diagonal',
        'label'        => __( 'Gray Diagonal Background', 'c9' ),
	)

);

register_block_style(
    'c9-blocks/grid',
	array(
			'name'		  => 'dark-gradient-left',
			'label'		  => __( 'Left Side Dark Gradient Background', 'c9' ),
	)
);

register_block_style(
    'core/image',
	array(
			'name'		  => 'img-shadow',
			'label'		  => __( 'Shadow Below', 'c9' ),
	)
);

register_block_style(
    'c9-blocks/heading',
	array(
			'name'		  => 'abel-heading',
			'label'		  => __( 'Second Heading', 'c9' ),
	)
);

register_block_style(
    'core/paragraph',
	array(
			'name'		  => 'black-bar',
			'label'		  => __( 'Black Bar Behind', 'c9' ),
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

if (!function_exists('c9_work_register_required_plugins')) {
function c9_work_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		array(
			'name'		=> 'WooCommerce',
			'slug'		=> 'woocommerce',
			'required'	=> false,
		),
		array(
			'name'		=> 'Max Mega Menu',
			'slug'		=> 'megamenu',
			'required'	=> false,
		),
		array(
			'name'		=> 'Smash balloon Social Photo Feed',
			'slug'		=> 'instagram-feed',
			'required'	=> false,
		)

	);

	if ( ! isset( $config ) ) {
		$config = [];
	}

	tgmpa( $plugins, $config );
}
} //end if function exists
add_action( 'tgmpa_register', 'c9_work_register_required_plugins' );
