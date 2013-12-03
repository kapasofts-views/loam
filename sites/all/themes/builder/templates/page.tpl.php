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
<!--                        <ul class="menu">-->
<!--                            <li class="current-menu-item"><a href="index.html">Home</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="home-page-two.html">Home Page 2</a></li>-->
<!--                                    <li><a href="home-page-three.html">Home Page 3</a></li>-->
<!--                                    <li><a href="home-page-four.html">Home Page 4</a></li>-->
<!--                                    <li><a href="home-page-five.html">Home Page 5</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><a href="#">Pages</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="about.html">About Us</a></li>-->
<!--                                    <li><a href="services.html">Services</a></li>-->
<!--                                    <li><a href="contacts.html">Contacts</a></li>-->
<!--                                    <li><a href="simple-gallery-2.html">Simple Gallery 2</a></li>-->
<!--                                    <li><a href="simple-gallery-3.html">Simple Gallery 3</a></li>-->
<!--                                    <li><a href="simple-gallery-4.html">Simple Gallery 4</a></li>-->
<!--                                    <li><a href="404.html">404 Error</a></li>-->
<!--                                    <li><a href="left-sidebar.html">Left Sidebar</a></li>-->
<!--                                    <li><a href="right-sidebar.html">Right Sidebar</a></li>-->
<!--                                    <li><a href="both-sidebar.html">Both Sidebar</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!---->
<!--                            <li><a href="#">Blog</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="big-image-right-sidebar.html">Big image + Right Sidebar</a></li>-->
<!--                                    <li><a href="big-image-left-sidebar.html">Big image + Left Sidebar</a></li>-->
<!--                                    <li><a href="mini-image-right-sidebar.html">Mini image + Right Sidebar</a></li>-->
<!--                                    <li><a href="mini-image-left-sidebar.html">Mini image + Left Sidebar</a></li>-->
<!--                                    <li><a href="text-post.html">Text Post</a></li>-->
<!--                                    <li><a href="image-post.html">Image post</a></li>-->
<!--                                    <li><a href="video-post.html">Video</a></li>-->
<!--                                    <li><a href="post-right-sidebar.html">Post + Right Sidebar</a></li>-->
<!--                                    <li><a href="post-left-sidebar.html">Post + Left Sidebar</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!---->
<!--                            <li><a href="#">Portfolio</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="2-columns-portfolio.html">2 Columns Portfolio</a></li>-->
<!--                                    <li><a href="3-columns-portfolio.html">3 Columns Portfolio</a></li>-->
<!--                                    <li><a href="4-columns-portfolio.html">4 Columns Portfolio</a></li>-->
<!--                                    <li><a href="6-columns-portfolio.html">6 Columns Portfolio</a></li>-->
<!--                                    <li><a href="portfolio-left-sidebar.html">Portfolio + Left Sidebar</a></li>-->
<!--                                    <li><a href="portfolio-right-sidebar.html">Portfolio + Right Sidebar</a></li>-->
<!--                                    <li><a href="item-single-image.html">Item - Single Image</a></li>-->
<!--                                    <li><a href="project-video.html">Project Video</a></li>-->
<!--                                    <li><a href="item-left-sidebar.html">Item - Left Sidebar</a></li>-->
<!--                                    <li><a href="item-right-sidebar.html">Item - Right Sidebar</a></li>-->
<!--                                    <li><a href="item-portrait.html">Item - Portrait</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><a href="#">Features</a>-->
<!--                                <ul class="sub-menu">-->
<!--                                    <li><a href="theme-grid.html">Theme Grid</a></li>-->
<!--                                    <li><a href="typography.html">Typography</a></li>-->
<!--                                    <li><a href="buttons.html">Buttons</a></li>-->
<!--                                    <li><a href="allerts.html">Allerts</a></li>-->
<!--                                    <li><a href="glyphicons.html">Glyphicons Icons</a></li>-->
<!--                                    <li><a href="badges-and-labels.html">Badges And Labels</a></li>-->
<!---->
<!--                                    <li><a href="tabs.html">Tabs</a></li>-->
<!--                                    <li><a href="accordion.html">Accordion</a></li>-->
<!--                                    <li><a href="tstimonial-rotator.html">Testimonial Rotator</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li><a href="http://themeforest.net/user/OrangeIdea/portfolio?ref=OrangeIdea" target="_blank">Purchase</a></li>-->
<!--                        </ul>-->
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
                    <?php if (!empty($site_slogan)): ?>
                    <div class="welcome">
                        <h3><?php print $site_slogan; ?></h3>
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
        <div class="span12">
            <div class="row">
            <?php print render($page['row_zero']); ?>
            </div>
        </div>
    </div>

    <!-- Divider -->
    <div class="row">
        <div class="span12">
            <div class="home_separator"></div>
        </div>
    </div>

    <div class="row mrgbtm35">
        <?php print render($page['row_first']); ?>
    </div>

    <div class="home_separator"></div>

    <!-- Start recent portfolio item -->
    <div class="row">
        <?php print render($page['row_second']); ?>
    </div>

    <!-- End recent portfolio item -->

    <div class="home_separator"></div>

    <div class="row">
        <div class="span6">
            <?php print render($page['row_three_left_top']); ?>
            <div class="home_separator"></div>
            <?php print render($page['row_three_left_bottom']); ?>
        </div>

        <div class="span6">
            <?php print render($page['row_three_right']); ?>
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
    echo '<script src="'. base_path().path_to_theme() .'/flexslider/jquery.flexslider-min.js"></script>';
?>

    <?php echo '<script src="'. base_path().path_to_theme() .'/js/custom.js"></script>';?>

<?php
echo <<<'EOT'
    <script type="text/javascript" charset="utf-8">
        jQuery.noConflict()(function ($) {
            $(window).load(function() {
                $('.flexslider').flexslider({animation: "slide", controlNav: false,});
            });
        });
    </script>


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
    <script type="text/javascript">

        var tpj=jQuery;

        tpj.noConflict();

        var revapi2;

        tpj(document).ready(function() {

            if (tpj.fn.cssOriginal != undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            if(tpj('#rev_slider_2_1').revolution == undefined)
                revslider_showDoubleJqueryError('#rev_slider_2_1');
            else
                revapi2 = tpj('#rev_slider_2_1').show().revolution(
                    {
                        delay:9000,
                        startwidth:770,
                        startheight:440,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:3,

                        navigationType:"none",
                        navigationArrows:"verticalcentered",
                        navigationStyle:"navbar",

                        touchenabled:"on",
                        onHoverStop:"on",

                        navOffsetHorizontal:0,
                        navOffsetVertical:20,

                        shadow:1,
                        fullWidth:"on",

                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off"
                    });

        }); //ready

    </script>
EOT;
?>
</div><!--end of Wide_Cont-->