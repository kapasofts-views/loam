<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>


    <?php foreach ($view->result as $id => $row): ?>
<?php
        ($id) ? print '<div class="testimonial" style="position: absolute; display: block;">' : print '<div class="testimonial" style="position: absolute; display: none;">';
        print '                    <div class="main_testimonial">';
        print '                        <div class="blockquote">'.$row->field_field_quote[0]['raw']['value'].'</div>';
        print '                    </div>';
        $authTitle =  (!empty($row->field_field_quote_author_position[0]['raw']['value'])) ? ' / '.$row->field_field_quote_author_position[0]['raw']['value'].'</div>' : '</div>';
        print '                    <div class="the-author">'.$row->field_field_quote_author[0]['raw']['value'].$authTitle;
        print '                </div>';
?>
    <?php endforeach; ?>

