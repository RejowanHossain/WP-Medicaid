<?php

// medicaid activation with tgm
require_once get_template_directory().'/medicaid-tgm/class-tgm-plugin-activation.php';

function medicaid_activation(){
    $plugins = array(
        array(
            'name' => __( 'Advanced Custom Fields', 'medicaid' ),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => __( 'Codestar Framework', 'medicaid' ),
            'slug' => 'codestar-framework',
            'source'    => '/Codestar/codestar-framework/archive/refs/heads/master.zip',
            'required' => true
        ),
        array(
            'name' => __( 'Contact Form 7', 'medicaid' ),
            'slug' => 'contact-form-7',
            'required' => true
        ),
        // array(
        //     'name' => __( 'medicaid Custom Posts', 'medicaid' ),
        //     'slug' => 'medicaid-custom-post',
        //     'source'    => '/RejowanHossain/cpt/archive/refs/heads/main.zip',
        //     'required' => true
        // ),
    );

    $config = array(
        'id' => 'medicaid_plugins_activation',
        'menu' => 'medicaid_plugins_activation',
        'parent_slug' => 'themes.php',
        'has_notices' => true,
    );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'medicaid_activation' );