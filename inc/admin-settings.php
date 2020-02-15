<?php
/**
 *
 * Add fields and configure admin settings API.
 *
 * @since   1.0
 * @package c9
 */

require_once get_template_directory() . '/admin/admin-settings.php';

$wposa_obj->add_field(
	'cortex_branding',
	array(
		'id'   => 'dark-logo',
		'type' => 'image',
		'name' => __( 'Dark Theme Logo', 'c9' ),
		'desc' => __( 'Upload your dark color logo here', 'c9' ),
	)
);

