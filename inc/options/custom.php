<?php

$influen_options[] = array(
    'name'     => 'influen-custom-code',
    'title'    => esc_html__( 'Custom Code', 'influen' ),
    'icon'     => 'fa fa-cogs',
    'sections' => array(
        array(
            'name'   => 'influen-css',
            'title'  => esc_html__( 'CSS', 'influen' ),
            'icon'   => 'fa fa-code',
            'fields' => array(
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'You do not need to add "style" tag in this field. Your JavaScript code will be wrapped using "style" tag automatically and then will be added to your site\'s header', 'influen' ),
                    ),
                array(
                    'id'         => 'influen_css',
                    'type'       => 'textarea',
                    'sanitize'   => false,
                    'attributes' => array(
                        'style' => 'height:400px',
                        ),
                    )
                )
            ),
        array(
            'name'   => 'influen-js',
            'title'  => esc_html__( 'JavaScript', 'influen' ),
            'icon'   => 'fa fa-code',
            'fields' => array(
                array(
                    'type'    => 'subheading',
                    'content' => esc_html__( 'You do not need to add "script" tag in this field. Your JavaScript code will be wrapped using "script" tag automatically and then will be added to your site\'s footer', 'influen' ),
                    ),
                array(
                    'id'         => 'influen_js',
                    'type'       => 'textarea',
                    'sanitize'   => false,
                    'attributes' => array(
                        'style' => 'height:400px',
                        ),
                    )
                )
            ),
        )
    );
