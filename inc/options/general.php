<?php
/*
 * General
 */
$influen_options[] = array(
    'name'   => 'influen-General',
    'title'  => esc_html__( 'General', 'influen' ),
    'icon'   => 'fa fa-globe',
    'fields' => array(
        array(
            'id'      => 'display_backtotop',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Display BackToTop', 'influen' ),
            'desc'    => esc_html__( 'Switch on to display back to top.', 'influen' ),
            'default' => true
            ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Color Scheme', 'influen' ),
            ),
        array(
            'id'    => 'custom_brand_color',
            'type'  => 'switcher',
            'title' => esc_html__( 'Custom Theme Color', 'influen' ),
            'desc'  => esc_html__( 'Switch on to customize theme color.', 'influen' ),
            ),
        array(
            'id'    => 'brand_color',
            'type'  => 'color_picker',
            'title' => esc_html__( 'Theme Color', 'influen' ),
            'desc'  => esc_html__( 'Select an amazing theme color from unlimited posibilites.', 'influen' ),
            'default' => '#ffd460',
            'dependency' => array('custom_brand_color', '==', true)
            ),
        ),
    );
