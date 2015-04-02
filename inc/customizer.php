<?php

add_action( 'customize_register', 'appsplash_customize_register' );

define('GOOGLE_ANALYTICS_DEFAULT', 'UA-00000000-0');
define('MAILCHIMP_DEFAULT', '//examplewebsite.us10.list-manage.com/subscribe/post?u=7f489ab74730d111936a8515e&amp;id=e7c869cc60');

define('DEFAULT_APP_LOGO', get_template_directory_uri() . '/img/app-logo.png');
define('DEFAULT_APP_NAME', 'App Name');
define('DEFAULT_APP_DESCRIPTION_HEADER', 'App for people to do stuff.');
define('DEFAULT_APP_DESCRIPTION', 'Dr. Jimmy Brungus forgot to do rockets. Hippie Joel tastes like cow bathroom. Not for horses. No lonely times just dreams you turkey. Stop, drop and roll bones made from stuff your muscles don\'t like. Check the expiration date used to love pruppets.');
define('DEFAULT_APP_SCREENSHOT', get_template_directory_uri() . '/img/app-screenshot.png');
define('DEFAULT_MAILCHIMP_SUBMIT_BUTTON', 'Notify');
define('DEFAULT_COMING_SOON_MESSAGE', "Coming soon. \nGet notified when app is released.");

class SocialMedia {
    public $name; // used for font-awesome and potentially other times.
    public $setting;
    public $control;

    public function __construct($name) {
        $this->name = $name;
        $this->setting = 'appsplash_social_media_' . $this->name;
        $this->control = $this->setting . '_control';
    }

    public function formal_name() {
        return ucwords(str_replace('-', ' ', $this->name));
    }
}

function create_social_media_setting_and_control($wp_customize, $social_media_obj) {
    $wp_customize->add_setting($social_media_obj->setting, array(
        'default' => DEFAULT_LINK,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control($social_media_obj->control, array(
        'label' => __($social_media_obj->formal_name() . ' URL', 'appsplash'),
        'section' => 'appsplash_social_media',
        'settings' => $social_media_obj->setting,
        'type' => 'text',
    ));
}

define('DEFAULT_LINK', '');

function appsplash_customize_register($wp_customize) {
    
    // Section: App information section.

    $wp_customize->add_section( 'appsplash_app_information', array(
        'title'          => __( 'App information', 'appsplash' ),
        'priority'       => 35,
    ));

    // App name.

    $wp_customize->add_setting('appsplash_app_name', array(
        'default' => DEFAULT_APP_NAME,
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
        'default' => (esc_url(get_template_directory_uri()) . DEFAULT_APP_LOGO),
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
        'default' => DEFAULT_APP_DESCRIPTION_HEADER,
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
        'default' => DEFAULT_APP_DESCRIPTION,
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
        'default' => (esc_url(get_template_directory_uri()) . DEFAULT_APP_SCREENSHOT),
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

   
    // Section: Mailchimp info.

    $wp_customize->add_section( 'appsplash_mailchimp_information', array(
        'title'          => __( 'MailChimp information', 'appsplash' ),
        'priority'       => 37,
    ));

    // Coming soon message.

    $wp_customize->add_setting('appsplash_coming_soon_message', array(
        'default' => DEFAULT_COMING_SOON_MESSAGE,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('appsplash_coming_soon_message_control', array(
        'label' => __('MailChimp message', 'appsplash'),
        'section' => 'appsplash_mailchimp_information',
        'settings' => 'appsplash_coming_soon_message',
        'type' => 'textarea',
    ));

    // Mailchimp path.

    $wp_customize->add_setting('appsplash_mailchimp_path', array(
        'default' => MAILCHIMP_DEFAULT,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'appsplash_mailchimp_path_control', array( 
        'label'      => __( 'Mailchimp form path.', 'appsplash' ),
        'section'    => 'appsplash_mailchimp_information',
        'settings'   => 'appsplash_mailchimp_path',
        'type'       => 'textarea',
    ));

    // Mailchimp email form submit button

    $wp_customize->add_setting('appsplash_mailchimp_submit_button', array(
        'default' => 'Notify',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control( 'appsplash_mailchimp_submit_button_control', array( 
        'label'      => __( 'Mailchimp submit button text.', 'appsplash' ),
        'section'    => 'appsplash_mailchimp_information',
        'settings'   => 'appsplash_mailchimp_submit_button',
        'type'       => 'text',
    ));
    
    // Section: Social media.

    $wp_customize->add_section( 'appsplash_social_media', array(
        'title'          => __( 'Social media', 'appsplash' ),
        'priority'       => 36,
    ));

    // Create social media settings and controls.

    create_social_media_setting_and_control($wp_customize, new SocialMedia('facebook'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('twitter'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('instagram'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('youtube'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('tumblr'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('google-plus'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('github'));
    create_social_media_setting_and_control($wp_customize, new SocialMedia('pinterest'));
    
}

// If there are properties changed here in settings that change values in .css, need to put it here.
// else, go ahead and put it in the .php file with get_them_mod().
function appsplash_stick_custom_css_in_header() {
?>
    <style type="text/css">
     .app-screenshot {
         background-image: url("<?php echo get_theme_mod('appsplash_app_screenshot', DEFAULT_APP_SCREENSHOT); ?>");
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

$user_chosen_analytics_code = trim(get_theme_mod('appsplash_google_analytics'));
if (($user_chosen_analytics_code != GOOGLE_ANALYTICS_DEFAULT) && ($user_chosen_analytics_code != "")) {
    add_action('wp_head', 'appsplash_add_analytics');
}

?>

