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
            $img_url = url('sites/default/files/'.file_uri_target($row->field_field_blog_img[0]['raw']['uri']), array('absolute'=>true));
            $path_alias = drupal_get_path_alias('none/'.$row->nid);
           print ' <!-- First Slide-->';
           print '             <li style="width: 573px; float: left; display: block;">';
           print '                 <a class="'. $path_alias .'" title="Permalink to ' . $row->node_title . '">';
           print '                  <img src="'.$img_url .'" width="880" height="461"/>';
           print '                 </a>';

           print '                 <div class="flex-caption blog_item">';
           print '                     <div class="blog_head">';
           print '                         <div class="date">';
           print '                             <h6><i class="icon-calendar icon-white"></i>'.format_date($row->node_created, 'medium', 'd M Y').'</h6>';
           print '                         </div>';
           print '                         <h3><a href="' . $path_alias . '">'.$row->node_title.'</a></h3>';
           print '                     </div>';

           print '                     <div class="meta">';
           print '                         <span><b>By</b> <a href="#">'. $row->_field_data['nid']['entity']->name . '</a></span>';
           print '                         <span><a href="'.$path_alias.'">Post tags</a></span>';
           print '                         <span class="last-item"><a href="'.$path_alias.'">'. $row->_field_data['nid']['entity']->comment_count .' Comments</a></span>';
           print '                     </div>';
           print views_trim_text(array('max_length' => 150), $row->field_body[0]['raw']['value']).'...';
           print '                     <h6 class="read_more" style="margin-top: 10px !important;">';
           print '                         <a style="margin-top: 15px;" href="'.$path_alias.'">Read More</a>';
           print '                     </h6>';
           print '                 </div>';
           print '             </li>';
            ?>
<?php endforeach; ?>
