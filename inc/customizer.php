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

    // App logo.

    $wp_customize->add_setting('appsplash_app_logo', array(
        'default' => (esc_url(get_template_directory_uri()) . '/img/app-logo.png'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'appsplash_app_logo_control',
            array (
                'label' => __('App logo (2MB max size.)', 'appsplash'),
                'section' => 'appsplash_app_information',
                'settings' => 'appsplash_app_logo',
            )
        )
    );

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

    // App screenshot.

    $wp_customize->add_setting('appsplash_app_screenshot', array(
        'default' => (esc_url(get_template_directory_uri()) . '/img/app-screenshot.png'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'appsplash_app_screenshot_control',
            array (
                'label' => __('App screenshot (2MB max size.)', 'appsplash'),
                'section' => 'appsplash_app_information',
                'settings' => 'appsplash_app_screenshot',
            )
        )
    );
            
}

// If there are properties changed here in settings that change values in .css, need to put it here.
// else, go ahead and put it in the .php file with get_them_mod().
function appsplash_stick_custom_css_in_header() {
?>
    <style type="text/css">
     .app-screenshot {
         background-image: url("<?php echo get_theme_mod('appsplash_app_screenshot'); ?>");
     }
    </style>
<?php
}

add_action('wp_head', 'appsplash_stick_custom_css_in_header');
?>
    
