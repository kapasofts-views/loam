<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 */
?>
<div class="container">
    <div class="row">
        <?php print $content; ?>
<!--        <div class="span6">-->
<!--            <span class="copyright">Copyright 2012 Builder - Company. Design by <a href="http://themeforest.net/user/OrangeIdea?ref=OrangeIdea">OrangeIdea</a></span>-->
<!--        </div>-->
        <!-- END COPYRIGHT INFORMATION-->
<!--        <div class="span6">-->
<!--            <!-- START FOOTER MENU-->
<!--                        <span class="copyright pull-right visible-desktop">-->
<!--                            <div class="menu-footer-menu-container">-->
<!--                                <ul class="unstyled footer_menu" id="menu-footer-menu">-->
<!--                                    <li><a href="index.html">Home</a></li>-->
<!--                                    <li><a href="about.html">About Us</a></li>-->
<!--                                    <li><a href="big-image-right-sidebar.html">Blog</a></li>-->
<!--                                    <li><a href="2-columns-portfolio.html">Portfolio</a></li>-->
<!--                                    <li><a href="contacts.html">Contacts</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </span>-->
<!--            <!-- END FOOTER MENU-->
<!--        </div>-->
    </div>
</div>


