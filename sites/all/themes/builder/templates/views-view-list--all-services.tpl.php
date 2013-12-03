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
        ($id % 4) ? print ' <div class="span3">' : print ' <div class="span3 no-left-margin">';
        print '        <img class="servicesimg"  title="round1" src="'.url('sites/default/files/'.file_uri_target($row->field_field_service_icon[0]['raw']['uri']), array('absolute'=>true)).'" alt="" width="32" height="32"/>';
        print '        <h5 >'.$row->node_title.'</h5>';
        print '        <address style="font-size: 11px;">'.$row->field_field_service_description[0]['raw']['value'].'</address>';
        print '    </div>';
    ?>
      <?php //print $row; ?>
    <?php endforeach; ?>
