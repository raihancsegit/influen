<?php
$influen_options[] = array(
    'name'   => 'influen-header',
    'title'  => esc_html__( 'Header', 'influen' ),
    'icon'   => 'fa fa-bars',
    'fields' => array(
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'Main Logo', 'influen' ),
            ),
        array(
            'id'         => 'logo_default',
            'type'       => 'image',
            'title'      => esc_html__( 'Default Logo', 'influen' ),
            'desc'       => esc_html__( 'Select an image for logo.', 'influen' ),
            ),
        array(
            'id'         => 'logo_retina',
            'type'       => 'image',
            'title'      => esc_html__( 'Retina Logo', 'influen' ),
            'desc'       => esc_html__( 'Select an image for the retina version of the logo. It should be exactly 2x the size of main logo.', 'influen' ),
            ),
        array(
                'type'          => 'subheading',
                'content'       => esc_html__( 'Header Settings', 'influen' )
            ),
        array(
                'id'      => 'influen_header_style',
                'type'    => 'radio',
                'title'   => esc_html__('Header Style', 'influen'),
                'class'   => 'horizontal',
                'options' => array(
                    '1' => esc_html__('Header 1', 'influen'),
                    '2' => esc_html__('Header 2', 'influen'),
                    '3' => esc_html__('Header 3', 'influen'),
                    '4' => esc_html__('Header 4', 'influen'),
                ),
                'default'    => '1',
                'attributes' => array(
                    'data-depend-id' => 'influen_header_style',
                ),
            ), 

            array(
                'type'       => 'subheading',
                'content'    => esc_html__( 'Top Bar', 'influen' ),
                'dependency' => array( 'influen_header_style', 'any', '1,3' ),
                ),
            array(
                'id'         => 'has_topbar',
                'type'       => 'switcher',
                'title'      => esc_html__( 'Display Top Bar', 'influen' ),
                'default'    => true,
                'desc'       => esc_html__( 'Switch on to display top bar', 'influen' ),
                'dependency' => array( 'influen_header_style', 'any', '1,3' )
                ),
            array(
                'id'         => 'display_topbar_social',
                'type'       => 'switcher',
                'title'      => esc_html__( 'Display Social Icons', 'influen' ),
                'default'    => true,
                'desc'       => esc_html__( 'Switch on to display top header social icons', 'influen' ),
                'dependency' => array( 'influen_header_style|has_topbar', 'any|==', '3|true' )
                ),
            array(
                'id'         => 'topbar_phone_no',
                'type'       => 'text',
                'title'      => esc_html__( 'Contact Number', 'influen' ),
                'desc'       => esc_html__( 'Add contact number to display top header', 'influen' ),
                'dependency' => array( 'influen_header_style|has_topbar', 'any|==', '1,3|true' )
                ),
            array(
                'id'         => 'topbar_email_addr',
                'type'       => 'text',
                'title'      => esc_html__( 'Contact Email', 'influen' ),
                'desc'       => esc_html__( 'Add contact email to display top header', 'influen' ),
                'dependency' => array( 'influen_header_style|has_topbar', 'any|==', '1,3|true' ),
                ),
            
            array(
                'id'         => 'btn_name',
                'type'       => 'text',
                'title'      => esc_html__( 'Button Name', 'influen' ),
                'desc'       => esc_html__( 'Add Button Name to display Menu', 'influen' ),
                'default'    => 'do stuff',
                'dependency' => array( 'influen_header_style', 'any', '2,3' ),
                ),
            array(
                'id'         => 'btn_link',
                'type'       => 'text',
                'title'      => esc_html__( 'Button Link', 'influen' ),
                'desc'       => esc_html__( 'Add Button Link to display Menu', 'influen' ),
                'default'    => '#',
                'dependency' => array( 'influen_header_style', 'any', '2,3' ),
                ),

        
        ),
    );


