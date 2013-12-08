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
            $blog_entity = $row->_entity_properties['entity object'];

            $path_alias = drupal_get_path_alias('node/'.$row->nid);
           print ' <!-- First Slide-->';
           print '             <li style="width: 573px; float: left; display: block;">';
           print '                 <a class="/'. $path_alias .'" title="Permalink to ' . $blog_entity->title . '">';
    if(!empty($blog_entity->field_blog_img)){
        $img_url = url('sites/default/files/'.file_uri_target($blog_entity->field_blog_img[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
        print '                  <img src="'.$img_url .'" width="880" height="461"/>';
    }elseif(!empty($blog_entity->field_video_id)){
           print '                            <iframe src="http://player.vimeo.com/video/'. $blog_entity->field_video_id[LANGUAGE_NONE][0]['value'] . '?badge=0" width="100%" height="240" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
    }else{
        //default image
           print '                  <img src="'.base_path().path_to_theme() .'/images/gallery/Anchor_v1_preview2-880x461.png" width="880" height="461"/>';
    }
           print '                 </a>';

           print '                 <div class="flex-caption blog_item">';
           print '                     <div class="blog_head">';
           print '                         <div class="date">';
           print '                             <h6><i class="icon-calendar icon-white"></i>'.format_date($blog_entity->created, 'medium', 'd M Y').'</h6>';
           print '                         </div>';
           print '                         <h3><a href="/' . $path_alias . '">'.$blog_entity->title.'</a></h3>';
           print '                     </div>';

           print '                     <div class="meta">';
           print '                         <span><b>By</b> <a href="#">'. $blog_entity->name . '</a></span>';
           print '                         <span><a href="/'.$path_alias.'">Post tags</a></span>';
           print '                         <span class="last-item"><a href="/'.$path_alias.'">'. $blog_entity->comment_count .' Comments</a></span>';
           print '                     </div>';
           print views_trim_text(array('max_length' => 150), $blog_entity->body[LANGUAGE_NONE][0]['value']).'...';
           print '                     <h6 class="read_more" style="margin-top: 10px !important;">';
           print '                         <a style="margin-top: 15px;" href="/'.$path_alias.'">Read More</a>';
           print '                     </h6>';
           print '                 </div>';
           print '             </li>';
            ?>
<?php endforeach; ?>
