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
      <?php
      $photo_url = url('sites/default/files/'.file_uri_target($row->_entity_properties['entity object']->field_employee_photo['und'][0]['uri']), array('absolute'=>true));
      print '      <div class="span4 about">';
      print '          <p>';
      print '             <a href="'.$photo_url.'" rel="prettyPhoto">';
      print '                 <img src="'.$photo_url.'" alt="" width="980" height="671"/>';
      print '              </a>';
      print '          </p>';
      print '         <h4>'.$row->_entity_properties['entity object']->field_employee_name['und'][0]['value'].'  <strong>'.$row->_entity_properties['entity object']->field_employee_position['und'][0]['value'].'</strong></h4>';
      print '          <p>';
      print '              <em>'.$row->_entity_properties['entity object']->field_about_employee['und'][0]['value'].'</em>';
      print '              <br/>';
            $social_links =  $row->_entity_properties['entity object']->field_social_link['und'];
      print              $social_links[0]['value'];
            for($i=1;$i<count($social_links);$i++){
                print '              /';
                print $social_links[$i]['value'];
            }
//      print '              /';
//      print '              <a href="http://twitter.com">Facebook</a>';
      print '          </p>';
      print '      </div>';
            ?>
<?php endforeach; ?>
