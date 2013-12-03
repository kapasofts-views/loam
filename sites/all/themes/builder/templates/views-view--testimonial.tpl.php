
<div class="row-fluid">
    <div class="span12">
<?php print '        <h3>'.$view->display['default']->display_options['title'].'</h3>';?>
        <div class="sidebar">
            <div class="testimonialrotator"  style="height: 240px;">
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

           </div>
        </div>
    </div>
</div>

