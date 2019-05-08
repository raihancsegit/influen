<?php
/**
 * Backup
 */
$influen_options[] = array(
    'name'   => 'backup',
    'title'  => esc_html__( 'Backup', 'influen' ),
    'icon'   => 'fa fa-suitcase',
    'fields' => array(
        array(
            'id'    => 'backup',
            'type'  => 'backup',
            'title' => esc_html__( 'Backup Options', 'influen' ),
            )
        )
    );