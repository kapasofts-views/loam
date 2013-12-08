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
            $path_alias = drupal_get_path_alias('node/'.$row->nid);
            $blog_entity = $row->_entity_properties['entity object'];
            print '           <div class="row" style="margin-bottom:50px;">';
            print '                <!--Simple text post-->';
            print '                <div class="span8">';
            print '                    <div class="blog_item">';
            print '                        <!--Post info and Title-->';
            print '                        <div class="blog_head">';
            print '                            <div class="date">';
            print '                                <h6><i class="icon-calendar icon-white"></i> ' . format_date($blog_entity->created, 'medium', 'd M Y') . ' </h6>';
            print '                            </div>';
            print '                            <h3><a href="/'.$path_alias.'">' . $blog_entity->title . '</a></h3>';
            print '                            <div class="meta">';
            print '                                <span><b>By</b> <a href="#">' . $blog_entity->name . '</a></span>';
//            print '                                <span><a href="#">Post tags</a></span>';
            print '                                <span class="last-item"><a href="/'. $path_alias .'"> ' . $blog_entity->comment_count . ' Comments </a></span>';
            print '                            </div>';

            print '                            <div style=" margin-bottom:-5px !important;"></div>';
            print '                        </div>';?>
            <?php
            if (!empty($blog_entity->field_blog_img[LANGUAGE_NONE][0]['uri']) ){
                                           $img_url = url('sites/default/files/'.file_uri_target($blog_entity->field_blog_img[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            print '                        <!-- Featured image -->';
            print '                        <div class="row">';
            print '                            <div class="span8 slider_area">';
            print '                                <div class="view view-first">';
            print '                                      <img src="'.$img_url.'" alt="'.$blog_entity->field_blog_img[LANGUAGE_NONE][0]['alt'].'" />';
            print '                                            <div class="mask">';

            print '                                                <a href="'.$img_url.'" rel="prettyPhoto" title="Image title" class="info"></a>';
            print '                                                <a href="'.$img_url.'" class="link"></a>';
            print '                                            </div>';
            print '                                 </div>';
            print '                                 <div class="clearfix"></div>';
            print '                             </div>';
            print '                        </div>';
            }elseif(!empty($blog_entity->field_video_id[LANGUAGE_NONE][0]['value'])){
            print '                        <div class="row">';
            print '                            <div class="span8 slider_area">';
            print '                                <div class="view view-first">';
            print '                                                  <iframe src="http://player.vimeo.com/video/' . $blog_entity->field_video_id[LANGUAGE_NONE][0]['value'] . '?badge=0" width="100%" height="440" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
            print '                                    <div class="mask">';
            print '                                    </div>';
            print '                                </div>';
            print '                                <div class="clearfix"></div>';
            print '                            </div>';
            print '                        </div>';
            }
            print '                        <!--Post content-->';
            print '                        <div class="blog_item_description">';
            print '                            <p>';
            print                                   views_trim_text(array('max_length' => 200), $blog_entity->body[LANGUAGE_NONE][0]['value']).'...';
            print '                            </p>';
            print '                            <!--Read more link-->';
            print '                            <h6><a href="/'.$path_alias.'">Read more...</a></h6>';
            print '                        </div>';

            print '                    </div>';
            print '                </div>';
            print '            </div>';
            ?>
<?php endforeach; ?>
