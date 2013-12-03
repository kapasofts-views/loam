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
            <div class="span12 mrgbtm35">
                <div class="row-fluid mrgbtm35 gmap">
<!--                    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q=9930+124th+Avenue+Northeast+Kirkland,+Washington&hl=en&sll=37.0625,-95.677068&sspn=58.858685,114.169922&hnear=9930+124th+Ave+NE,+Kirkland,+Washington+98033&t=m&z=16&t=m&z=14&output=embed"></iframe>-->
                        <?php
                        $location = html_entity_decode($address.', '.$state);
                        $locationZip = html_entity_decode($address.', ' . $state . ' ' . $zip);
                        print '<iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?q='.$location.'&hl=en&sll='.$longitude.','.$latitude.'&hnear='.$locationZip.'&t=m&z=16&t=m&z=14&output=embed"></iframe>';
?>
                </div>
                <div class="row-fluid">
                    <div class="span8">
                        <?php print '<h4>'.$form_title.'</h4>';?>
                        <div id="note"></div>
                        <div id="fields">
                            <form class="form" id="ajax-contact-form" action="javascript:alert('Was send!');">
                                <input type="text" id="name" name="name" class="span6" placeholder="Name"/>
                                <br/>
                                <input id="email" type="text" class="span6" name="email" placeholder="Email"/>
                                <br/>
                                <textarea id="message" class="span11" type="text" name="message" placeholder="Message" rows="8"></textarea>
                                <br/>
                                <button type="submit" class="btn btn-small">Send message</button>
                                <br/>
                            </form>
                            <p/>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="row-fluid">
                            <div class="span12">
                                <?php print '<h4>'.$info_title.'</h4>';?>
                                <p>
                                    <?php print $info_content;?>
                                </p>
                                <p>
                                    <?php if(!empty($address)){
                                     print '<br/>';
                                     print '<strong>Aress:</strong> ';
                                     print $address . ', ' . $city . ' ' . $state ;
                                    }

                                    if(!empty($phone)){
                                    print '<br/>';
                                    print '<strong>Phone:</strong> ';
                                    print $phone;
                                    }

                                    if(!empty($fax)){
                                    print '<br/>';
                                    print '<strong>Fax:</strong> ';
                                    print $fax;
                                    }

                                    if(!empty($website)){
                                    print '<br/>';
                                    print '<strong>Website:</strong> ';
                                    print $website;
                                    }

                                   if(!empty($email)){
                                    print '<br/>';
                                    print '<strong>Email:</strong> ';
                                    print $email;
                                   }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--END MAIN CONTENT AREA-->

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

<?php
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