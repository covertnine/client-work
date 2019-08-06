<?php
if (!function_exists('cortextoo_client_setup')) {
    function cortextoo_client_setup()
    {
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

add_action('after_setup_theme', 'cortextoo_client_setup');
