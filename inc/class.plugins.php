<?php
/**
 * This file contains all the required and recommended plugin list.
 *
 * @package Medim
 * @author themeroots <themebucket@gmail.com>
 */


class Medim_Plugins {

    public function __construct() {
        add_action( 'tgmpa_register', array($this, 'register') );
    }

    public function register() {
        tgmpa( $this->get_plugins(), $this->get_config() );
    }

    private function get_config() {
        return array(
            'id'           => 'medim',
            'default_path' => '',
            'menu'         => 'medim-install-plugins',
            'parent_slug'  => 'themes.php',
            'capability'   => 'edit_theme_options',
            'has_notices'  => true,
            'dismissable'  => true,
            'dismiss_msg'  => '',
            'is_automatic' => false,
            'message'      => '',
        );
    }

    private function get_plugins() {
        $imgs = MEDIM_ASSETS_URI . 'admin/img/';

        return array(
            array(
                'name'             => 'medim Engine',
                'slug'             => 'medim-helper',
                'source'           => MEDIM_ROOT . 'plugins/medim-helper.zip',
                'required'         => true,
                'version'          => '1.0.0',
                'image_url'        => esc_url( $imgs . 'medim_engine.jpg' ),
            ),
            array(
                'name'             => 'Medim Appointment',
                'slug'             => 'appointment',
                'source'           => MEDIM_ROOT . 'plugins/appointment.zip',
                'required'         => true,
                'version'          => '1.0.0',
                'image_url'        => esc_url( $imgs . 'medim_engine.jpg' ),
            ),
            array(
                'name'             => 'Codestar Framework',
                'slug'             => 'codestar-framework',
                'source'           => MEDIM_ROOT . 'plugins/codestar-framework.zip',
                'required'         => true,
                'version'          => '1.0.0',
                'image_url'        => esc_url( $imgs . 'medim_engine.jpg' ),
            ),
            array(
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => false,
                'image_url' => esc_url( $imgs . 'contact_form_7.jpg' ),
            ),

            array(
                'name'      => 'One Click Demo Import',
                'slug'      => 'one-click-demo-import',
                'required'  => false,
                'image_url' => esc_url( $imgs . '1click.jpg' ),
            ),

            array(
                'name'      => 'MailChimp for WordPress',
                'slug'      => 'mailchimp-for-wp',
                'required'  => false,
                'image_url' => esc_url( $imgs . '1click.jpg' ),
            ),

            array(
                'name'      => 'Visual Portfolio',
                'slug'      => 'visual-portfolio',
                'required'  => false,
                'image_url' => esc_url( $imgs . '1click.jpg' ),
            ),

            array(
                'name'      => 'Visual Composer',
                'slug'      => 'js_composer',
                'required'  => false,
                'source'    => MEDIM_ROOT . 'plugins/js_composer.zip',
                'image_url' => esc_url( $imgs . 'visual_composer.jpg' ),
            ),

        );
    }

}

new Medim_Plugins;
