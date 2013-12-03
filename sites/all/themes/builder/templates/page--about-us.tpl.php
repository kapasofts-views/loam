<div class="wide_cont">
    <!-- START TOP LINE-->
    <div class="top_line"></div>
    <!-- END TOP LINE-->

    <!--PAGE HEAD-->
    <div class="page_head">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <!--START LOGO IMAGE-->
                    <?php if (!empty($logo)): ?>
                    <div class="logo">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                            <img alt="<?php print t('Home'); ?>" src="<?php print $logo; ?>"/></a>
                    </div>
                    <?php endif; ?>
                    <!-- END LOGO IMAGE-->
                </div>
                <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
                <div class="span9">
                    <!-- START MAIN MENU-->
                    <nav>
                        <?php if (!empty($primary_nav)): ?>
                            <?php print render($primary_nav); ?>
                        <?php endif; ?>
                        <?php if (!empty($secondary_nav)): ?>
                            <?php //print render($secondary_nav); ?>
                        <?php endif; ?>
                        <?php if (!empty($page['navigation'])): ?>
                            <?php //print render($page['navigation']); ?>
                        <?php endif; ?>
                    </nav>
                    <!-- END MAIN MENU-->
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--/PAGE HEAD-->
    <!--WELCOME AREA-->
    <div class="tag_line">
        <div class="container">

            <div class="row">
                <div class="span12">
                    <?php if (!empty($page_description)): ?>
                    <div class="welcome">
                        <h3><?php print $page_description; ?></h3>
                        <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
                    </div>
                    <?php endif; ?>
                    <?php print render($page['header']); ?>
                </div>
            </div>
        </div>
    </div>

    <!--/WELCOME AREA-->
    <!--MAIN CONTENT AREA-->
    <div class="main_content_area">
    <div class="container">
    <?php print $messages; ?>
    <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
    <?php endif; ?>
    <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
    <?php endif; ?>
    <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

        <div class="row">
            <?php print render($page['row_zero']); ?>
        </div>

        <div class="row">
            <div class="span8">
             <?php
             print '<h3>'.$about_title.'</h3>';
             print $about_content;
             ?>
            </div>
            <div class="span4 about">
                <?php print render($page['about_right_bottom']); ?>
<!--                <div class="row-fluid">-->
<!--                    <div class="span12">-->
<!--                        <h3>Clients Testimonials</h3>-->
<!--                        <div class="sidebar">-->
<!--                            <div class="testimonialrotator"  style="height: 240px;">-->
<!--                                <div class="testimonial" style="position: absolute; display: block;">-->
<!--                                    <div class="main_testimonial">-->
<!--                                        <div class="blockquote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. Ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. The readable content of a page when looking at its layout. It is a long established fact that a reader will be distracted by the readable content.</div>-->
<!--                                    </div>-->
<!--                                    <div class="the-author">Mikle / CEO Some Company</div>-->
<!--                                </div>-->
<!--                                <div class="testimonial" style="display: none;">-->
<!--                                    <div class="main_testimonial">-->
<!--                                        <div class="blockquote">Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). It is a long established fact that. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna.Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis.</div>-->
<!--                                    </div>-->
<!--                                    <div class="the-author">Jhon Doe</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    <!--END MAIN CONTENT AREA-->
    <!--FOOTER-->

    <!-- START TWITTER FEED -->
    <div class="twitter-block">
        <?php print render($page['footer_top']); ?>
    </div>
    <!-- END TWITTER FEED -->

    <!-- START WIDGET AREA AND SOCIAL ICONS -->
    <div class="footer">
        <?php print render($page['footer_middle']); ?>
    </div>
    <!-- END WIDGET AREA AND SOCIAL ICONS -->

    <!--START BOTTOM LINE-->
    <div class="bottom_line">
        <?php print render($page['footer_bottom']); ?>
    </div>
    <!--END BOTTOM LINE-->
    <!--END FOOTER-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <!-- jQuery REVOLUTION Slider  -->
<?php
    echo '<script type="text/javascript" src="'. base_path().path_to_theme() .'/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>';
    echo '<script type="text/javascript" src="'. base_path().path_to_theme() .'/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jquery.tweet.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/google-code-prettify/prettify.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/bootstrap.min.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jquery.easing.1.3.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/superfish-menu/superfish.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jquery.nivo.slider.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jquery.prettyPhoto.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jflickrfeed.min.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/testimonialrotator.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jquery.waitforimages.js"></script>';
    echo '<script src="'. base_path().path_to_theme() .'/js/jquery.isotope.min.js"></script>';
?>

    <?php echo '<script src="'. base_path().path_to_theme() .'/js/custom.js"></script>';?>
<?php
echo <<<'EOT'
    <script>
        /***************************************************
         TWITTER FEED
         ***************************************************/
        jQuery.noConflict()(function ($) {
            $(document).ready(function () {

                $(".tweet").tweet({
                    count: 1,
                    username: "Orange_Idea_RU",
                    loading_text: "loading twitter..."
                });
            });
        });
    </script>
EOT;
?>
</div><!--end of Wide_Cont-->