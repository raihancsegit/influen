<?php
$metabox_option[] = array(
    'id'        => '_service',
    'title'     => esc_html__('Service Option', 'influen'),
    'post_type' => 'service',                                           
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin section
        array(
            'name'   => 'Icon',
            'icon'   => 'fa fa-wifi',
            'fields' => array(

                array(
                    'id'      => 'image_icon',
                    'type'    => 'radio',
                    'title'   => esc_html__('Image / Icon','influen'),
                    'options' => array(
                      'no'   => esc_html__('Image','influen'),
                      'yes'    => esc_html__('Icon','influen')
                    ),
                    'default' => 'yes',
                  ),
                  
                                 
                array(
                    'id'    => 'icon',
                    'type'  => 'text',
                    'title' => esc_html__('Icon class', 'influen'),
                    'value' => 'flaticon-portfolio',
                    'dependency'   => array( 'image_icon_yes','!=', ''),
                ),

                array(
                    'id'          => 'image',
                    'type'        => 'image',
                    'title'       => esc_html__('Image','influen'),
                    'dependency'   => array( 'image_icon_no','!=', ''),
                  ),

              
            ),
        ),

    ),
);
