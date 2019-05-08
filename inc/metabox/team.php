<?php
$metabox_option[] = array(
    'id'        => '_team',
    'title'     => esc_html__('Team Option', 'influen'),
    'post_type' => 'team',                                           
    'context'   => 'normal',
    'priority'  => 'default',
    'sections'  => array(

        // begin section
        array(
            'name'   => 'Team Information',
            'icon'   => 'fa fa-wifi',
            'fields' => array(
                                 
                array(
                    'id'    => 'pos',
                    'type'  => 'text',
                    'title' => esc_html__('Position', 'influen'),
                    'value' => 'SEO, Expert'

                ),
                array(
                    'id'    => 'fb_url',
                    'type'  => 'text',
                    'title' => esc_html__('Facebook URL', 'influen'),
                    'value' => '#'

                ),

                array(
                    'id'    => 'tw_url',
                    'type'  => 'text',
                    'title' => esc_html__('Twitter URL', 'influen'),
                    'value' => '#'

                ),

                array(
                    'id'    => 'vm_url',
                    'type'  => 'text',
                    'title' => esc_html__('vimeo URL', 'influen'),
                    'value' => '#'

                ),

                array(
                    'id'    => 'li_url',
                    'type'  => 'text',
                    'title' => esc_html__('Linkedin URL', 'influen'),
                    'value' => '#'

                ),

              
            ),
        ),

    ),
);
