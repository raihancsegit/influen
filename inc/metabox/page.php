<?php
$metabox_option[] = array(
    'id'        => '_influen_page_options',
    'title'     => esc_html__('Page Option', 'influen'),
    'post_type' => 'page',                                           
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin section
        array(
            'name'   => 'Page Content',
            'icon'   => 'fa fa-wifi',
            'fields' => array(

                array(
                    'type'          => 'subheading',
                    'content'       => esc_html__( 'Header Settings', 'influen' )
                ), 
                array(
                    'id'            => 'influen_custom_header',
                    'type'          => 'switcher',
                    'title'         => esc_html__( 'Custom Header Option', 'influen' ),
                    'default'       => false
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
                    'attributes' => array(
                      'data-depend-id' => 'influen_header_style',
                    ),
                    'default'    => '1',
                    'dependency' => array( 'influen_custom_header', '==', 'true' ),
                ),                        
                array(
                    'type'          => 'subheading',
                    'content'       => esc_html__( 'Page Title Options', 'influen' )
                ),
                array(
                    'id'            => 'influen_custom_page_header',
                    'type'          => 'switcher',
                    'title'         => esc_html__( 'Custom Page Title Option', 'influen' ),
                    'default'       => false
                ),
                array(
                    'id'         => 'influen_is_page_header',
                    'type'       => 'switcher',
                    'title'      => esc_html__( 'Page Header', 'influen' ),
                    'label'      => esc_html__( 'Do you want to display page header for this page?', 'influen' ),
                    'default'    => true,
                    'dependency' => array( 'influen_custom_page_header', '==', 'true' ),
                ), 
                array(
                    'id'            => 'influen_page_header_bg',
                    'type'          => 'image',
                    'title'         => esc_html__( 'Title Background', 'influen' ),
                    'dependency'    => array( 'influen_custom_page_header|influen_is_page_header', '==|==', 'true|true' )
                ), 
                
                array(
                    'type'          => 'subheading',
                    'content'       => esc_html__( 'Footer Settings', 'influen' )
                ), 
                array(
                    'id'            => 'influen_custom_footer',
                    'type'          => 'switcher',
                    'title'         => esc_html__( 'Custom Footer Option', 'influen' ),
                    'default'       => false
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
                    'attributes' => array(
                      'data-depend-id' => 'influen_footer_style',
                    ),
                    'default'    => '1',
                    'dependency' => array( 'influen_custom_footer', '==', 'true' ),
                ),

              
            ),
        ),

    ),
);
