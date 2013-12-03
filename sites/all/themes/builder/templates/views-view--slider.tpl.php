<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */

print '<div class="span8 mrgbtm35">';
print '    <div id="banner_container">';

print '        <link rel="stylesheet" id="rev-google-font" href="http://fonts.googleapis.com/css?family==Open+Sans:300italic,400italic,600italic,700italic,800italic,300,600,700,800" type="text/css" media="all" />';
print '        <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper banner_container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:440px;height:440;">';
print '            <div id="rev_slider_2_1" class="rev_slider banner_container" style="display:none;max-height:440px;height:440;">';
print '                <ul>';
?>
   <?php if ($exposed): ?>
        <div class="view-filters">
            <?php print $exposed; ?>
        </div>
    <?php endif; ?>

    <?php if ($attachment_before): ?>
        <div class="attachment attachment-before">
            <?php print $attachment_before; ?>
        </div>
    <?php endif; ?>

    <?php if ($rows): ?>
            <?php print $rows; ?>
    <?php elseif ($empty): ?>
        <div class="view-empty">
            <?php print $empty; ?>
        </div>
    <?php endif; ?>
 <?php
print '                   </ul>';
print '            </div>';
print '        </div>';
print '            </div>';
print '        </div>';
?>