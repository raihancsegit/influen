<?php
add_filter('cs_metabox_options', 'cs_register_options');
function cs_register_options($metabox_option)
{
    $metabox_option = array();

    $dir = trailingslashit(INFLUEN_INCLUDES_DIR . 'metabox');
    $imgs = trailingslashit(INFLUEN_ASSETS_URI . 'admin/img');

    $sections = array(
        'page',
        'service',
        'team',
       
    );

    foreach ($sections as $section) {
        $section_file = "{$dir}{$section}.php";
        if (file_exists($section_file)) {
            include_once $section_file;
        }

    }

    return $metabox_option;
}
