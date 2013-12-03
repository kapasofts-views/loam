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

<?php print render($page['row_zero']); ?>
<!--<div id="fullwidthbanner">-->
<!--    <link rel='stylesheet' id='rev-google-font' href='http://fonts.googleapis.com/css?family==Open+Sans:300italic,400italic,600italic,700italic,800italic,300,600,700,800' type='text/css' media='all' />-->
<!---->
<!--    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner_container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:440px;height:440;">-->
<!---->
<!--        <div id="rev_slider_2_1" class="rev_slider fullwidthbanner_container" style="display:none;max-height:440px;height:440;">-->
<!--            <ul>-->
<!--                <li data-transition="random" data-slotamount="7" data-masterspeed="300" >-->
<!---->
<!--                    <img src="images/gallery/retro_stripe1.png" >-->
<!---->
<!--                    <div class="tp-caption lfb"-->
<!--                         data-x="460"-->
<!--                         data-y="16"-->
<!--                         data-speed="1500"-->
<!--                         data-start="500"-->
<!--                         data-easing="easeInOutElastic"  ><img src="images/gallery/ipad1.png" alt="Image 1"></div>-->
<!---->
<!--                    <div class="tp-caption lfb"-->
<!--                         data-x="346"-->
<!--                         data-y="120"-->
<!--                         data-speed="1500"-->
<!--                         data-start="1000"-->
<!--                         data-easing="easeInOutElastic"  ><img src="images/gallery/ipad21.png" alt="Image 2"></div>-->
<!---->
<!--                    <div class="tp-caption very_large_text lfl"-->
<!--                         data-x="-150"-->
<!--                         data-y="42"-->
<!--                         data-speed="1500"-->
<!--                         data-start="1500"-->
<!--                         data-easing="easeInOutElastic"  >Builder is awesome</div>-->
<!---->
<!--                    <div class="tp-caption big_white lfl"-->
<!--                         data-x="-144"-->
<!--                         data-y="104"-->
<!--                         data-speed="1500"-->
<!--                         data-start="2500"-->
<!--                         data-easing="easeOutElastic"  >HTML TEMPLATE</div>-->
<!---->
<!--                    <div class="tp-caption small_text sfb"-->
<!--                         data-x="-140"-->
<!--                         data-y="186"-->
<!--                         data-speed="1500"-->
<!--                         data-start="3500"-->
<!--                         data-easing="easeOutExpo"  >Powerful HTML template designed in a clean and minimalistic style.<br>This template is very flexible, easy for customizing and well documented, <br>approaches for personal and professional use. </div>-->
<!--                </li>-->
<!--                <li data-transition="random" data-slotamount="7" data-masterspeed="300" >-->
<!--                    <img src="images/gallery/retro_stripe1.png" >-->
<!---->
<!--                    <div class="tp-caption lfl"-->
<!--                         data-x="-45"-->
<!--                         data-y="0"-->
<!--                         data-speed="2500"-->
<!--                         data-start="1000"-->
<!--                         data-easing="easeOutElastic"  ><img src="images/gallery/box-blur.png" alt="Image 6"></div>-->
<!---->
<!--                    <div class="tp-caption lfl"-->
<!--                         data-x="-308"-->
<!--                         data-y="7"-->
<!--                         data-speed="2500"-->
<!--                         data-start="500"-->
<!--                         data-easing="easeInOutElastic"  ><img src="images/gallery/box-normal.png" alt="Image 7"></div>-->
<!---->
<!--                    <div class="tp-caption very_large_text fade"-->
<!--                         data-x="350"-->
<!--                         data-y="32"-->
<!--                         data-speed="300"-->
<!--                         data-start="1300"-->
<!--                         data-easing="easeOutExpo">Powerfull & Responsive</div>-->
<!---->
<!--                    <div class="tp-caption big_white fade"-->
<!--                         data-x="350"-->
<!--                         data-y="95"-->
<!--                         data-speed="300"-->
<!--                         data-start="1600"-->
<!--                         data-easing="easeOutExpo"  >HTML TEMPLATE</div>-->
<!---->
<!--                    <div class="tp-caption small_text fade"-->
<!--                         data-x="350"-->
<!--                         data-y="167"-->
<!--                         data-speed="300"-->
<!--                         data-start="1900"-->
<!--                         data-easing="easeOutExpo"  >-->
<!--                        - BOOTSTRAP UNDER THE HOOD<br>-->
<!--                        - INTEGRATED REVOLUTION SLIDER (15$ VALUE )<br>-->
<!--                        - UNLIMITED COLORS<br>-->
<!--                        - MORE 40 HTML PAGES<br>-->
<!--                        - FRIENDLY HTML/CSS CODE-->
<!--                    </div>-->
<!---->
<!--                    <div class="tp-caption fade"-->
<!--                         data-x="350"-->
<!--                         data-y="298"-->
<!--                         data-speed="300"-->
<!--                         data-start="2200"-->
<!--                         data-easing="easeOutExpo"  >-->
<!--                        <a href='javascript:alert("click");' class='tp-button darkgrey small'>Purchase now!</a></div>-->
<!---->
<!--                    <div class="tp-caption fade"-->
<!--                         data-x="670"-->
<!--                         data-y="81"-->
<!--                         data-speed="300"-->
<!--                         data-start="2500"-->
<!--                         data-easing="easeOutExpo"  >-->
<!--                        <img src="images/gallery/45.png" alt="Image 7"></div>-->
<!--                </li>-->
<!--                <li data-transition="random" data-slotamount="7" data-masterspeed="300" >-->
<!--                    <img src="images/gallery/retro_stripe1.png" >-->
<!---->
<!--                    <div class="tp-caption fade"-->
<!--                         data-x="0"-->
<!--                         data-y="19"-->
<!--                         data-speed="300"-->
<!--                         data-start="500"-->
<!--                         data-easing="easeOutExpo"  ><img src="images/gallery/hand-black2.png" alt="Image 2"></div>-->
<!---->
<!--                    <div class="tp-caption fade"-->
<!--                         data-x="196"-->
<!--                         data-y="70"-->
<!--                         data-speed="300"-->
<!--                         data-start="800"-->
<!--                         data-easing="easeOutExpo"  ><iframe src='http://player.vimeo.com/video/34134308?title=0&amp;byline=0&amp;portrait=0' width='420' height='314' style='width:420px;height:314px;'></iframe>-->
<!--                    </div>-->
<!---->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="main_content_area">
    <div class="container">
        <div class="row mrgbtm35">
            <?php print render($page['row_first']); ?>
        </div>

        <div class="home_separator"></div>

        <!-- Simple Content -->
        <div class="row mrgbtm35">
            <?php print render($page['row_second']); ?>
        </div>

        <div class="home_separator"></div>

        <div class="row">
            <div class="span6">
                <?php print render($page['square_top_left']); ?>
                <?php if(!empty($page['square_bottom_left'])) {print '<div class="home_separator"></div>';}?>
                <?php print render($page['square_bottom_left']); ?>
            </div>

            <div class="span6">
                <?php print render($page['square_top_right']); ?>
                <?php if(!empty($page['square_bottom_left'])) {print '<div class="home_separator"></div>';}?>
                <?php print render($page['square_bottom_right']); ?>
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

                        shadow:0,
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