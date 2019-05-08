<?php
/**
 * Social Media
 */
$influen_social_links = array(
    'behance'        => esc_html__( 'Behance', 'influen' ),
    'bitbucket'      => esc_html__( 'Bitbucket', 'influen' ),
    'custom'         => esc_html__( 'Custom', 'influen' ),
    'deviantart'     => esc_html__( 'Deviant Art', 'influen' ),
    'dribbble'       => esc_html__( 'Dribbble', 'influen' ),
    'email'          => esc_html__( 'Email', 'influen' ),
    'facebook'       => esc_html__( 'Facebook', 'influen' ),
    'flickr'         => esc_html__( 'Flickr', 'influen' ),
    'github'         => esc_html__( 'Github', 'influen' ),
    'google-plus'    => esc_html__( 'Google Plus', 'influen' ),
    'instagram'      => esc_html__( 'Instagram', 'influen' ),
    'jsfiddle'       => esc_html__( 'JsFiddle', 'influen' ),
    'linkedin'       => esc_html__( 'LinkedIn', 'influen' ),
    'medium'         => esc_html__( 'Medium', 'influen' ),
    'pinterest'      => esc_html__( 'Pinterest', 'influen' ),
    'slideshare'     => esc_html__( 'Slide Share', 'influen' ),
    'soundcloud'     => esc_html__( 'Sound Cloud', 'influen' ),
    'stack-exchange' => esc_html__( 'Stack Exchange', 'influen' ),
    'stack-overflow' => esc_html__( 'Stack Overflow', 'influen' ),
    'tumblr'         => esc_html__( 'Tumblr', 'influen' ),
    'twitter'        => esc_html__( 'Twitter', 'influen' ),
    'vimeo'          => esc_html__( 'Vimeo', 'influen' ),
    'whatsapp'       => esc_html__( 'WhatsApp', 'influen' ),
    'youtube'        => esc_html__( 'Youtube', 'influen' ),
);

$influen_options[] = array(
    'name'   => 'influen-social-media',
    'title'  => esc_html__( 'Social Media', 'influen' ),
    'icon'   => 'fa fa-bullhorn',
    'fields' => array(
        array(
            'id'              => 'social_media',
            'type'            => 'group',
            'title'           => esc_html__( 'Social Media', 'influen' ),
            'button_title'    => esc_html__( 'Add New Media', 'influen' ),
            'accordion_title' => esc_html__( 'Media Name', 'influen' ),
            'fields'          => array(
                array(
                    'id'      => 'name',
                    'type'    => 'select',
                    'title'   => esc_html__( 'Media', 'influen' ),
                    'options' => $influen_social_links
                    ),
                array(
                    'id'         => 'icon-name',
                    'type'       => 'text',
                    'title'      => esc_html__( 'Custom Icon', 'influen' ),
                    'desc'       => esc_html__( 'Add a Font Awesome icon class. Note: class name from different icon library may not work properly.', 'influen' ),
                    'dependency' => array('name', '==', 'custom'),
                    ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => esc_html__( 'Link', 'influen' ),
                    )
                )
            )
        )
    );
