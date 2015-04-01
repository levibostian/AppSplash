<?php

add_action( 'customize_register', 'appsplash_customize_register' );

define('GOOGLE_ANALYTICS_DEFAULT', 'UA-00000000-0');
define('MAILCHIMP_DEFAULT', '//examplewebsite.us10.list-manage.com/subscribe/post?u=7f489ab74730d111936a8515e&amp;id=e7c869cc60');

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

    // Section: Website information.

    $wp_customize->add_section( 'appsplash_website_information', array(
        'title'          => __( 'Website information', 'appsplash' ),
        'priority'       => 36,
    ));

    // Google analytics.

    $wp_customize->add_setting('appsplash_google_analytics', array(
        'default' => GOOGLE_ANALYTICS_DEFAULT,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('appsplash_google_analytics_control', array(
        'label' => __('Google Analytics Tracking ID', 'appsplash'),
        'section' => 'appsplash_website_information',
        'settings' => 'appsplash_google_analytics',
        'type' => 'text',
    ));

    // Mailchimp path.

    $wp_customize->add_setting('appsplash_mailchimp_path', array(
        'default' => MAILCHIMP_DEFAULT,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'appsplash_mailchimp_path_control', array( 
        'label'      => __( 'Mailchimp form path.', 'appsplash' ),
        'section'    => 'appsplash_website_information',
        'settings'   => 'appsplash_mailchimp_path',
        'type'       => 'textarea',
    ));
    
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

// Add analytics to website 
function appsplash_add_analytics() {
?>
    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', '<?php echo get_theme_mod('appsplash_google_analytics');?>', 'auto');
     ga('send', 'pageview');
    </script>

<?php
}

$user_chosen_analytics_code = get_theme_mod('appsplash_google_analytics');
if ($user_chosen_analytics_code != GOOGLE_ANALYTICS_DEFAULT) {
    add_action('wp_head', 'appsplash_add_analytics');
}

?>

