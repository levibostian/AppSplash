<!doctype html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" ></link> 
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/AppSplash.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/bootstrap.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container-fluid">
            <div class="row app-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7" style="height: 500px;">
                            <div class="row">
                                <img class="app-logo" alt="app logo" src="<?php echo get_theme_mod('appsplash_app_logo'); ?>"/>
                                <h1 class="inline-text app-name" style="padding-left: 10px;"><?php echo get_theme_mod('appsplash_app_name'); ?></h1>
                            </div><!-- row -->

                            <div class="row" style="height: 82%;">
                                <div class="col-md-offset-1 col-md-11 center-div">
                                    <h2 class="description-header"><?php echo get_theme_mod('appsplash_app_description_header'); ?></h2>
                                    <p class="description"><?php echo get_theme_mod('appsplash_app_description'); ?> </p>
                                </div>
                            </div><!-- row -->
                        </div><!-- col-md-7 -->
                        <div class="col-md-5 app-screenshot-container">
                            <img class="image-center app-screenshot"  src="<?php echo esc_url(get_template_directory_uri()); ?>/img/app-screenshot-frame.png"/>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- row app-header -->
