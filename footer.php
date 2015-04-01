<?php 

// sees if setting for social media platform set.
function is_social_media_valid($setting) {
    return ((get_theme_mod($setting) != DEFAULT_LINK) && (get_theme_mod($setting) != " "));
}

function get_social_media_link_if_valid($social_media_obj) {
    if (is_social_media_valid($social_media_obj->setting)) {
        return '<a href="' . get_theme_mod($social_media_obj->setting) . '" class="social-button-a-link" target="_blank">' .
               '<div class="social-button ' . $social_media_obj->name . '">' .
               '<i class="fa fa-' . $social_media_obj->name . ' fa-4x icon"></i>' .
               '</div>' .
               '</a>';
    }
}
?>


<div class="row footer-row">
                <div class="container">
                    <div class="row"><!-- try not to edit height here. makes social buttons align along top -->
                        <div class="col-md-12">
                            <div class="center-hor-vert" style="z-index: 150;">
                                <?php 
                                
                                echo get_social_media_link_if_valid(new SocialMedia('facebook'));
                                echo get_social_media_link_if_valid(new SocialMedia('twitter'));
                                echo get_social_media_link_if_valid(new SocialMedia('instagram'));
                                echo get_social_media_link_if_valid(new SocialMedia('youtube'));
                                echo get_social_media_link_if_valid(new SocialMedia('tumblr'));
                                echo get_social_media_link_if_valid(new SocialMedia('google-plus'));
                                echo get_social_media_link_if_valid(new SocialMedia('github'));
                                echo get_social_media_link_if_valid(new SocialMedia('pinterest'));

                                ?>
                                                               
                            </div><!-- center-hor-vert -->
                        </div><!-- col-md-offset-6 col-md-6 -->
                    </div><!-- row -->

                    <div class="row">
                        <div class="col-md-12 footer-row-height">
                            <!-- footer content here -->
                        </div>
                    </div>
                </div><!-- container -->
            </div><!-- row footer-row -->
        </div><!-- container-fluid -->

        <?php wp_footer(); ?>
    </body>
</html>
