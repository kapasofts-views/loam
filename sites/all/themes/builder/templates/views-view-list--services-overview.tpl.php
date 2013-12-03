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
        print ' <div class="span4">';
        print '    <div style="background-color: rgb(241, 241, 241); padding: 15px; background-position: initial initial; background-repeat: initial initial;">';
        print '       <p style="text-align: center;">';
        print '          <img width="50px" height="50px" alt="" src="'.url('sites/default/files/'.file_uri_target($row->field_field_service_icon[0]['raw']['uri']), array('absolute'=>true)).'" title="round1" class="size-full aligncenter"></p>';
        print '       <h4 style="text-align: center;">'.$row->node_title.'</h4>';
        print '        <p style="text-align: center; font-size: 11px; margin-bottom: 0px !important;">'.$row->field_field_service_description[0]['raw']['value'].'</p>';
        print '    </div>';
        print '</div>';
    ?>
      <?php //print $row; ?>
    <?php endforeach; ?>
