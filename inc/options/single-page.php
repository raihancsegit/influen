<?php
$influen_options[] = array(
    'name'     => 'influen-custom-doctor',
    'title'    => esc_html__( 'Single Page', 'influen' ),
    'icon'     => 'fa fa-cogs',
    'sections' => array(
       

            array(
                'name'   => 'influen-single',
                'title'  => esc_html__( 'Single Page', 'influen' ),
                'icon'   => 'fa fa-code',
                'fields' => array(
                    array(
                        'type'    => 'subheading',
                        'content' => esc_html__( 'Single Page Layout', 'influen' ),
                        ),
                    array(
                            'id'      => 'influen_single_layout',
                            'type'    => 'image_select',
                            'title'   => esc_html__('Single Page Layout','influen'),
                            'options' => array(                
                                'right-sidebar' => get_template_directory_uri().'/inc/options/blog-image/right-sidebar.png',
                                'left-sidebar'  => get_template_directory_uri().'/inc/options/blog-image/left-sidebar.png',
                                'full-width'    => get_template_directory_uri().'/inc/options/blog-image/full-width.png',
                            ),
                            'default' => 'right-sidebar',
                        ),
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( 'Page Breadcumb', 'influen' ),
                            ),
                        array(
                            'id'         => 'page_bg',
                            'type'       => 'image',
                            'title'      => esc_html__( 'Breadcumb Backgroud', 'influen' ),
                            'desc'       => esc_html__( 'Select an image as a background image for Breadcumb.', 'influen' ),
                            ),
                
                    )
                ),
                array(
                    'name'   => 'influen-doctor',
                    'title'  => esc_html__( 'Doctor Single Page', 'influen' ),
                    'icon'   => 'fa fa-code',
                    'fields' => array(
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( 'Doctor Breadcumb', 'influen' ),
                            ),
                        array(
                            'id'         => 'dr_bred_bg',
                            'type'       => 'image',
                            'title'      => esc_html__( 'Breadcumb Backgroud', 'influen' ),
                            'desc'       => esc_html__( 'Select an image as a background image for Breadcumb.', 'influen' ),
                            ),
                      
                        )
                    ),
                array(
                    'name'   => 'influen-service',
                    'title'  => esc_html__( 'Service Single Page', 'influen' ),
                    'icon'   => 'fa fa-code',
                    'fields' => array(
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( 'Doctor Breadcumb', 'influen' ),
                            ),
                        array(
                            'id'         => 'ser_bred_bg',
                            'type'       => 'image',
                            'title'      => esc_html__( 'Breadcumb Backgroud', 'influen' ),
                            'desc'       => esc_html__( 'Select an image as a background image for Breadcumb.', 'influen' ),
                            ),
                      
                        )
                    ),

                
            
        )
    );
