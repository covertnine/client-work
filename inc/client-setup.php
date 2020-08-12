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

if (!function_exists('c9_client_setup')) {
	function c9_client_setup()
	{
		global $wp_filesystem;
		// Initialize the WP filesystem, no more using 'file-put-contents' function
		if (empty($wp_filesystem)) {
			require_once(ABSPATH . '/wp-admin/includes/file.php');
			require_once(ABSPATH . '/wp-admin/includes/class-wp-filesystem-base.php');
			require_once(ABSPATH . '/wp-admin/includes/class-wp-filesystem-direct.php');
			WP_Filesystem();
		}

		add_theme_support(
			'starter-content',
			array(
				'posts'	=> array(
					'home'			=> array(
						'comment_status'	=> 'closed',
						'post_content'		=>  $wp_filesystem->get_contents(get_template_directory_uri() . '/client/content/home.html')
					),
					'about'			=> array(
						'comment_status'	=> 'closed',
						'post_type'			=> 'page',
						'post_title'		=> __('Our History', 'c9-work'),
						'post_content'		=>  $wp_filesystem->get_contents(get_template_directory_uri() . '/client/content/about.html')
					),
					'setup'			=> array(
						'comment_status'	=> 'closed',
						'post_type'			=> 'page',
						'post_title'		=> __('Setup Guide', 'c9-work'),
						'post_content'		=>  $wp_filesystem->get_contents(get_template_directory_uri() . '/client/content/setup.html')
					),
					'services'		=> array(
						'comment_status'	=> 'closed',
						'post_type'			=> 'page',
						'post_title'		=> __('Services', 'c9-work'),
						'post_content'		=>  $wp_filesystem->get_contents(get_template_directory_uri() . '/client/content/services.html')
					),
					'styleguide'		=> array(
						'comment_status'	=> 'closed',
						'post_type'			=> 'page',
						'post_title'		=> __('Style Guide', 'c9-work'),
						'post_content'		=>  $wp_filesystem->get_contents(get_template_directory_uri() . '/client/content/styleguide.html')
					),
					'contact'		=> array(
						'comment_status'	=> 'closed',
						'post_content'		=>  $wp_filesystem->get_contents(get_template_directory_uri() . '/client/content/contact.html')
					),
					'news'			=> array(
						'post_content'			=> __('This page will show all of the news posts once you have populated your database with news items.', 'c9-work')
					),
				),
				'options'			=> array(
					'show_on_front'		=> 'page',
					'page_on_front'		=> '{{home}}',
					'page_for_posts' 	=> '{{news}}',
					'blogname'			=> 'C9 Work',
					'blogdescription'	=> __('A WordPress Theme for small businesses with WooCommerce product catalogs, forms, and mega menu support.', 'c9-work'),
				),
				'theme_mods'		=> array(
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
				'nav_menus'		=> array(
					'primary'		=> array(
						'name'			=>	__('Top Navigation Menu', 'c9-work'),
						'items'			=> array(
							'page_home',
							'page_about'	=> array(
								'type'		=> 'post_type',
								'object'	=> 'page',
								'object_id'	=> '{{about}}',
							),
							'page_setup'	=> array(
								'type'		=> 'post_type',
								'object'	=> 'page',
								'object_id'	=> '{{setup}}',
							),
							'page_services'	=> array(
								'type'		=> 'post_type',
								'object'	=> 'page',
								'object_id'	=> '{{services}}',
							),
							'page_styleguide'	=> array(
								'type'		=> 'post_type',
								'object'	=> 'page',
								'object_id'	=> '{{styleguide}}',
							),
							'page_news',
							'page_contact',
						),
					),
				),
				'widgets'	=> array(
					'footerfull'	=> array(
						'c9work_resources'	=> array(
							'text',
							array(
								'title'	=> __('Resources Menu', 'c9-work'),
								'text'	=> '<ul id="menu-footer-resources" class="menu">
									<li class="menu-item">
										<a href="#">About</a>
									</li>
									<li class="menu-item">
										<a href="#">News</a>
									</li>
									<li class="menu-item">
										<a href="#">Library</a>
									</li>
									<li class="menu-item">
										<a href="#">Style Guide</a>
									</li>
									<li class="menu-item">
										<a href="#">Terms &amp; Conditions</a>
									</li>
								</ul>'
							)
						),
						'c9work_company'	=> array(
							'text',
							array(
								'title'	=> __('Company Menu', 'c9-work'),
								'text'	=> '<ul id="menu-footer-company" class="menu">
									<li class="menu-item">
										<a href="#">Catalog</a>
									</li>
									<li class="menu-item">
										<a href="#">Corporate Governance</a>
									</li>
									<li class="menu-item">
										<a href="#">Safety Information</a>
									</li>
									<li class="menu-item">
										<a href="#">Contact Us</a>
									</li>
									<li class="menu-item">
										<a href="#">Privacy Policy</a>
									</li>
								</ul>'
							)
						),
						'meta_custom' => array('meta', array(
							'title'	=> __('WordPress Meta', 'c9-work'),
						)),
						'c9work_about' => array(
							'text',
							array(
								'title'	=> __('About C9 Work Theme', 'c9-work'),
								'text'	=> __('Be sure to activate the <strong>C9 Blocks Plugin</strong> during theme setup. The blocks plugin includes the custom WordPress blocks for tabs, toggles, and the responsive grid system that makes the theme look super duper.', 'c9-work'),
							)
						)
					),
					'right-sidebar'	=> array(
						'search',
						'c9work_about' => array(
							'text',
							array(
								'title'	=> 'About C9 Work Theme',
								'text'	=> 'Be sure to activate the <strong>C9 Blocks Plugin</strong> during theme setup. The blocks plugin includes the custom WordPress blocks for tabs, toggles, and the responsive grid system that makes the theme look super duper.'
							)
						),
						'meta_custom' => array('meta', array(
							'title'	=> 'Meta Widget',
						)),
					),
					'left-sidebar'	=> array(
						'search',
						'c9work_about' => array(
							'text',
							array(
								'title'	=> 'About C9 Work Theme',
								'text'	=> 'Be sure to activate the <strong>C9 Blocks Plugin</strong> during theme setup. The blocks plugin includes the custom WordPress blocks for tabs, toggles, and the responsive grid system that makes the theme look super duper.'
							)
						),
						'meta_custom' => array('meta', array(
							'title'	=> 'Meta Widget',
						)),
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
