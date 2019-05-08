<?php
$influen_options[] = array(
    'name'   => 'influen-footer',
    'title'  => esc_html__( 'Footer', 'influen' ),
    'icon'   => 'fa fa-bars',
    'fields' => array(
        array(
            'type'          => 'subheading',
            'content'       => esc_html__( 'Footer Settings', 'influen' )
        ), 
        array(
            'id'      => 'influen_footer_style',
            'type'    => 'radio',
            'title'   => esc_html__('Footer Style', 'influen'),
            'class'   => 'horizontal',
            'options' => array(
                    '1' => esc_html__('Footer 1', 'influen'),
                    '2' => esc_html__('Footer 2', 'influen'),
            ),
            'default'    => '1',
            'attributes' => array(
                'data-depend-id' => 'influen_footer_style',
            ),
        ),

        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Footer Widget Area', 'influen' ),
            'dependency' => array( 'influen_footer_style', 'any', '1'),
            ),
        array(
            'id'         => 'footer_widget_area_columns',
            'type'       => 'select',
            'title'      => esc_html__( 'Widget Area Columns', 'influen' ),
            'default'    => 3,
            'desc'       => esc_html__( 'Select number of columns for footer widget area. ', 'influen' ),
            'options'    => array(
                '1' => esc_html__( 'Column 1', 'influen' ),
                '2' => esc_html__( 'Column 2', 'influen' ),
                '3' => esc_html__( 'Column 3', 'influen' ),
                '4' => esc_html__( 'Column 4', 'influen' ),
            ),
            'dependency' => array( 'influen_footer_style', 'any', '1'),
            ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Copyright', 'influen' ),
            ),
        array(
            'id'      => 'display_footer_copyright',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Display Copyright', 'influen' ),
            'default' => true,
            'desc'    => esc_html__( 'Switch on to display copyright information.', 'influen' ),
            ),
        array(
            'id'         => 'footer_copyright_content',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Copyright Content', 'influen' ),
            'desc'       => esc_html__( 'Add copyright content here.', 'influen' ),
            'dependency' => array( 'display_footer_copyright', '==', true ),
            ),

            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Address', 'influen' ),
                'dependency' => array( 'influen_footer_style', 'any', '2'),
             ),

             array(
                'id'         => 'address',
                'type'       => 'textarea',
                'title'      => esc_html__( 'Address', 'influen' ),
                'dependency' => array( 'influen_footer_style', 'any', '2'),
                ),
            
                array(
                    'id'              => 'link',
                    'type'            => 'group',
                    'title'           => esc_html__( 'Page Link', 'influen' ),
                    'button_title'    => esc_html__( 'Add New page', 'influen' ),
                    'accordion_title' => esc_html__( 'Page Name', 'influen' ),
                    'dependency' => array( 'influen_footer_style', 'any', '2'),
                    'fields'          => array(
                        array(
                            'id'      => 'name',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Media', 'influen' ),
                            ),
                    
                        array(
                            'id'    => 'url',
                            'type'  => 'text',
                            'title' => esc_html__( 'Link', 'influen' ),
                            )
                        )
                    )
        ),
    );
