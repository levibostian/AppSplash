<?php get_header(); ?>
<div class="row connect-row">
    <div class="container" style="height: auto;">
        <div class="row" style="height: auto;">
            <div class="col-md-6 connect-row-height">
                <div class="center-div">
                    <h2><?php echo nl2br(get_theme_mod('appsplash_coming_soon_message', DEFAULT_COMING_SOON_MESSAGE)); ?>
                    </h2>
                </div>
            </div>
            <div class="col-md-6 connect-row-height">

                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup" class="center-div mailchimp-container">
                    <form action="<?php echo get_theme_mod('appsplash_mailchimp_path'); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
	                                
                            <div class="mc-field-group mc_field_headers">
	                        <input type="email" placeholder="Email Address" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
	                    <div id="mce-responses" class="clear">
		                <div class="response" id="mce-error-response" style="display:none"></div>
		                <div class="response" id="mce-success-response" style="display:none"></div>
	                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;"><input type="text" name="b_7f489ab74730d111936a8515e_e7c869cc60" tabindex="-1" value=""></div>
                            <div class="clear">
                                <input type="submit" value="<?php echo get_theme_mod('appsplash_mailchimp_submit_button', DEFAULT_MAILCHIMP_SUBMIT_BUTTON); ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
                            </div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>
                 (function($) {
                     window.fnames = new Array();
                     window.ftypes = new Array();
                     fnames[0]='EMAIL';
                     ftypes[0]='email';
                 }(jQuery));
                 var $mcj = jQuery.noConflict(true);
                </script>
                <!--End mc_embed_signup-->
                            
            </div><!-- col-md-->                              
        </div><!-- row -->
    </div><!-- container -->
</div><!-- row connect-row -->
<?php get_footer(); ?>
