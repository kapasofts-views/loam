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

        <!-- Start Item -->
        <?php foreach ($view->result as $id => $row): ?>
        <?php ($id != 0) ? print '   <div class="testimonial" style="position: absolute; display: none;">' :  print '   <div class="testimonial" style="position: absolute; display: block;">';?>
                               <div class="main_testimonial">
        <?php print '                            <div class="blockquote">'.$row->field_field_testimonial_content[0]['raw']['value'].'</div>';?>
                               </div>
        <?php
        print '                       <div class="the-author">'.$row->field_field_testimonial_name[0]['raw']['value'] ;
            (!empty($row->field_field_testimonial_title[0]) || !empty($row->field_field_testimonial_company[0])) ? print ' / ' : '';
            (!empty($row->field_field_testimonial_title[0])) ? print $row->field_field_testimonial_title[0]['raw']['value'] : '';
            (!empty($row->field_field_testimonial_company[0])) ? print $row->field_field_testimonial_company[0]['raw']['value'] : '';
            print '</div>';
        ?>
            </div>
        <?php endforeach; ?>
