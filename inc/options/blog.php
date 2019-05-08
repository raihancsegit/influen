<?php

$influen_options[] = array(
    'name'     => 'influen-custom-blog',
    'title'    => esc_html__( 'Page', 'influen' ),
    'icon'     => 'fa fa-cogs',
    'sections' => array(
        array(
            'name'   => 'influen-page',
            'title'  => esc_html__( 'Page Option', 'influen' ),
            'icon'   => 'fa fa-code',
            'fields' => array(
                array(
                    'type'          => 'subheading',
                    'content'       => esc_html__( 'Default Page & Template Options', 'influen' )
                ),
                array(
                    'id'            => 'influen_is_page_header',
                    'type'          => 'switcher',
                    'title'         => esc_html__( 'Page & Template Title', 'influen' ),
                    'label'         => esc_html__( 'Do you want to display page & template title?', 'influen' ),
                    'default'       => true
                ),        
                array(
                    'id'            => 'influen_page_header_bg',
                    'type'          => 'image',
                    'title'         => esc_html__( 'Title Background', 'influen' ),
                    'dependency'    => array( 'influen_is_page_header', '==', 'true' )
                ),     
              
                )
            ),

        array(
            'name'   => 'influen-blog',
            'title'  => esc_html__( 'Blog', 'influen' ),
            'icon'   => 'fa fa-code',
            'fields' => array(
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Blog Layout', 'influen' ),
                    ),
                array(
                        'id'      => 'influen_blog_layout',
                        'type'    => 'image_select',
                        'title'   => 'Blog Layout',
                        'options' => array(                
                            'right-sidebar' => get_template_directory_uri().'/inc/options/blog-image/right-sidebar.png',
                            'left-sidebar'  => get_template_directory_uri().'/inc/options/blog-image/left-sidebar.png',
                            'full-width'    => get_template_directory_uri().'/inc/options/blog-image/full-width.png',
                        ),
                        'default' => 'right-sidebar',
                ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Post Date Format', 'influen' ),
                    ),
                array(
                    'id'      => 'date_format',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Date Format', 'influen' ),
                    'default' => 'j M, Y',
                    'desc'    => esc_html__( 'Customize your post date format.', 'influen'),
                    ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Read More', 'influen' ),
                    ),
                array(
                    'id'         => 'read_more_text',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Custom Text', 'influen' ),
                    'default'    => esc_html__( 'Read More', 'influen' ),
                    'desc'       => esc_html__( 'Change read more button text.', 'influen')
                    ),
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'Post Exceprt', 'influen' ),
                    ),
                array(
                    'id'         => 'excerpt_length',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Excerpt Length', 'influen' ),
                    'default'    => 50,
                    'desc'       => esc_html__( 'Change post excerpt length', 'influen'),
                    ),
                )
            ),
            array(
                'name'   => 'influen-archive',
                'title'  => esc_html__( 'Archive', 'influen' ),
                'icon'   => 'fa fa-code',
                'fields' => array(
                    array(
                        'type'    => 'subheading',
                        'content' => esc_html__( 'Archive Layout', 'influen' ),
                        ),
                    array(
                            'id'      => 'influen_archive_layout',
                            'type'    => 'image_select',
                            'title'   => esc_html__('Archive Layout','influen'),
                            'options' => array(                
                                'right-sidebar' => get_template_directory_uri().'/inc/options/blog-image/right-sidebar.png',
                                'left-sidebar'  => get_template_directory_uri().'/inc/options/blog-image/left-sidebar.png',
                                'full-width'    => get_template_directory_uri().'/inc/options/blog-image/full-width.png',
                            ),
                            'default' => 'right-sidebar',
                    ),
                
                    )
                ),
            array(
                    'name'   => 'influen-404',
                    'title'  => esc_html__( '404 Page', 'influen' ),
                    'icon'   => 'fa fa-code',
                    'fields' => array(
                        array(
                            'type'    => 'subheading',
                            'content' => esc_html__( '404 Page', 'influen' ),
                            ),
                        array(
                            'id'         => '404',
                            'type'       => 'image',
                            'title'      => esc_html__( '404 page Image', 'influen' ),
                            'desc'       => esc_html__( 'Select an image as a 404 page Image.', 'influen' ),
                            ),
                      
                        )
                    ),
        )
    );
