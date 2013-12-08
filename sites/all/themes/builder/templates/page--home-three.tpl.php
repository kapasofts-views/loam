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

    <div class="container">
        <div class="row">
            <div class="span12">

                <div class="row">
                    <?php print render($page['row_zero']); ?>
                </div>

                <div class="home_separator"></div>

                <!-- Simple Content -->
                <div class="row">
                    <?php print render($page['row_first']); ?>
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
    <script>
                jQuery(".builder_carousel").each(function() {
                    var carousel_width = jQuery(this).width(),
                        visible_count = 4,
                        carousel_speed = 500
                    //console.log(visible_count);
                    /* Get margin-left value from the css grid and apply it to the carousele li items (margin-right), before carousele initialization */
                    var carousele_li = jQuery(this).find('.builder_thumbnails-fluid li');
                    carousele_li.css({"margin-right": carousele_li.css("margin-left"), "margin-left" : 20 });

                    jQuery(this).find('.builder_wrapper:eq(0)').jCarouselLite({
                        btnNext: jQuery(this).find('.next'),
                        btnPrev: jQuery(this).find('.prev'),
                        visible: visible_count,
                        speed: carousel_speed
                    })
                    .width('100%');//carousel_width

                    var fluid_ul = jQuery(this).find('ul.builder_thumbnails-fluid');
                    fluid_ul.width(fluid_ul.width()+10);

                    jQuery(window).resize(function() {
                        var before_resize = screen_size;
                        screen_size = getSizeName();
                        if ( before_resize != screen_size ) {
                            window.setTimeout('location.reload()', 20);
                        }
                    });
                });
            </script>

            <!-- Flex Slider for recent Post From Blog -->
            <script type="text/javascript" charset="utf-8">
              $(window).load(function() {
                $('.flexslider').flexslider();
              });
            </script>
EOT;
?>
</div><!--end of Wide_Cont-->