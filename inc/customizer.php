<?php

add_action( 'customize_register', 'appsplash_customize_register' );

function appsplash_customize_register($wp_customize) {
    
    // Section: App information section.

    $wp_customize->add_section( 'appsplash_app_information', array(
        'title'          => __( 'App information', 'appsplash' ),
        'priority'       => 35,
    ));

    // App name.

    $wp_customize->add_setting('appsplash_app_name', array(
        'default' => 'App Name',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('appsplash_app_name_control', array(
        'label' => __('App name', 'appsplash'),
        'section' => 'appsplash_app_information',
        'settings' => 'appsplash_app_name',
        'type' => 'text',
    ));

    // App description header
    
    $wp_customize->add_setting('appsplash_app_description_header', array(
        'default' => 'App for people to do stuff.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'appsplash_app_description_header_control', array( 
        'label'      => __( 'App description header.', 'appsplash' ),
        'section'    => 'appsplash_app_information',
        'settings'   => 'appsplash_app_description_header',
        'type'       => 'text',
    ));

    // App description.

    $wp_customize->add_setting('appsplash_app_description', array(
        'default' => 'Dr. Jimmy Brungus forgot to do rockets. Hippie Joel tastes like cow bathroom. Not for horses. No lonely times just dreams you turkey. Stop, drop and roll bones made from stuff your muscles don\'t like. Check the expiration date used to love pruppets.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'appsplash_app_information_description', array( 
        'label'      => __( 'App description.', 'appsplash' ),
        'section'    => 'appsplash_app_information',
        'settings'   => 'appsplash_app_description',
        'type'       => 'textarea',
    ));
    
}

?>
