<?php
/**
 * Color scheme, style variations for core blocks, sample content, and post formats setup
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

		add_theme_support('starter-content',
			array(
				'options'	=> array(
					'show_on_front'	=> 'page',
					'page_on_front'	=> '{{home}}',
					'page_for_posts' => '{{blog}}',
					'blogname'		=> 'C9 Work',
					'blogdescription'	=> 'A WordPress Theme for industrial businesses with product catalog and mega menu support.'
				),
				'theme_mods'	=> array(
					'c9_show_search'		=> 'show',
					'c9_copyright_content'	=> '&copy; 2020. <a href="https://www.covertnine.com" title="Web design company in Chicago" target="_blank">WordPress Website design by COVERT NINE</a>.',
					'c9_default_font'		=> 'yes',
					'c9_heading_font'		=> 'Bebas Neue',
					'c9_subheading_font'	=> 'Lobster',
					'c9_body_font'			=> '',
					'c9_author_visible'		=> 'hide',
					'c9_blog_sidebar'		=> 'hide',
					'c9_archive_sidebar'	=> 'hide'

				),
				'nav_menus'	=> array(
					'primary'	=> array(
						'name'	=>	__( 'Top Navigation Menu', 'c9-work' ),
						'items'	=> array(
							'link_home',
							'page_about',
							'page_contact',
							'page_blog',
						),
					),
				),
				'widgets'	=> array(
					'footerfull'	=> array(
						'text_about',
						'recent-posts',
						'recent-comments',
						'meta_custom' => array( 'meta', array(
							'title'	=> 'Meta Widget',
						) ),
					),
					'right-sidebar'	=> array(
						'search',
						'text_about',
						'meta_custom' => array( 'meta', array(
							'title'	=> 'Meta Widget',
						) ),
					),
					'left-sidebar'	=> array(
						'search',
						'text_about',
						'meta_custom' => array( 'meta', array(
							'title'	=> 'Meta Widget',
						) ),
					),
				),
			)
		);

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
