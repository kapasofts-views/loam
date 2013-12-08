
<?php
print '<h3>' .$view->display['default']->display_options['title']. '</h3>';
print '            <!-- Place somewhere in the <body> of your page -->';
print '            <div class="slider">';
print '                <div class="flexslider">';
print '                    <ul class="slides">';
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
print '</ul>';
print '<!-- FlexSlider Nav -->';
print '<ul class="flex-direction-nav">';
print '    <li><a href="#" class="flex-prev"></a></li>';
print '    <li><a href="#" class="flex-next"></a>';
print '</ul>';
print '<!-- End FlexSlider Nav -->';
print '</div>';
print '</div>';
?>
