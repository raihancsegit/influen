<?php
define('CS_ACTIVE_FRAMEWORK', true); // default true
define('CS_ACTIVE_METABOX', true); // default true
define('CS_ACTIVE_TAXONOMY', false); // default true
define('CS_ACTIVE_SHORTCODE', false); // default true
define('CS_ACTIVE_CUSTOMIZE', false); // default true
define('CS_ACTIVE_LIGHT_THEME', true); // default false

add_filter('cs_framework_settings', 'influen_register_theme_settings');
function influen_register_theme_settings()
{
    $settings = array(
        'menu_title' => esc_html__('Theme Options', 'influen'),
        'menu_type' => 'menu',
        'menu_slug' => 'theme-options',
        'ajax_save' => true,
        'show_reset_all' => true,
        'framework_title' => esc_html__('Influen Option', 'influen'),
    );
    return $settings;
}

add_filter('cs_framework_options', 'register_options');
function register_options($influen_options)
{
    $influen_options = array();

    $dir = trailingslashit(INFLUEN_INCLUDES_DIR . 'options');
    $imgs = trailingslashit(INFLUEN_INCLUDES_DIR . 'admin/img');

    $sections = array(
        'general',
        'header',
        'blog',
        'single-page',
        'social',
        'footer',
        'custom',
        'backup',
    );

    foreach ($sections as $section) {
        $section_file = "{$dir}{$section}.php";
        if (file_exists($section_file)) {
            include_once $section_file;
        }

    }

    return $influen_options;
}
