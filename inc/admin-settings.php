<?php
/**
 *
 * Add fields and configure admin settings API.
 *
 * @since   1.0
 * @package c9
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'c9_work_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function c9_work_customize_register( $wp_customize ) {

		$wp_customize->add_setting(
			'c9_dark_logo',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
				'type' 				=> 'theme_mod',
				'capability' 		=> 'edit_theme_options',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'c9_dark_logo',
				array(
					'label'      => __( 'Dark Logo', 'c9-work' ),
					'section'    => 'title_tagline',
					'settings'   => 'c9_dark_logo'
				)
			)
		);

	}
}
add_action( 'customize_register', 'c9_work_customize_register' );
