<div class="row" style="margin-bottom:50px;">
    <?php if(!empty($node->field_blog_img['und'][0]['uri']) && empty($node->field_blog_img['und'][0]['is_default'])){ ?>
        <!--Post with Image-->
        <div class="span8">
        <div class="row">
            <div class="span8 blog_item nolink" style="margin-bottom:0px;">
                <div class="view view-first">
                    <?php print ' <img src="'.url('sites/default/files/'.file_uri_target($node->field_blog_img['und'][0]['uri']), array('absolute'=>true)).'" alt="" />';?>

                    <div class="mask">
                       <?php print '<a href="'. url('sites/default/files/'.file_uri_target($node->field_blog_img['und'][0]['uri']), array('absolute'=>true)) .'" rel="prettyPhoto" title="Image title" class="info"></a>';?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php }elseif(!empty($node->field_video_id)){ ?>
    <div class="span8">
        <div class="row">
            <div class="span8 blog_item nolink" style="margin-bottom:0px;">
                <div class="view view-first">
                    <?php print '<iframe src="http://player.vimeo.com/video/'.$node->field_video_id['und'][0]['value'].'?portrait=0&amp;color=AEC71E" width="100%" height="440" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';?>

                    <div class="mask">
                        <?php print '<a href="'.base_path().path_to_theme().'/images/gallery/8-1024x682.jpg" rel="prettyPhoto" title="Image title" class="info"></a>';?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!--Simple text post-->
    <div class="span8">
        <div class="blog_item">
            <!--Post info and Title-->
            <div class="blog_head">
                <div style=" margin-bottom:-5px !important;"></div>
            </div>

            <!--Post content-->
            <div class="blog_post_item_description">
                <div class="blog_head blog_inner">
                    <?php print '<h4><a href="/' . drupal_get_path_alias('node/'.$node->nid) . '" >'.$node->title.'</a></h4>';?>
                    <div class="meta">
                        <?php print '<span><b>By</b> <a href="#">' . $node->name . '</a></span>';?>
<!--                        <span><a href="#">DESIGN</a>, <a href="#">WORDPRESS</a></span>-->
                        <?php print '<span class="last-item"><a href="#">' . $node->comment_count . ' Comments</a></span>';?>
                    </div>
                </div>
                <?php //print $body[0]['safe_value']; ?>
                <?php print '<p>'; ?>
                <?php print       views_trim_text(array('max_length' => 200), $body[0]['value']).'...';?>
                <?php print '</p>';?>
                <?php print ' <h6><a href="/'.drupal_get_path_alias('node/'.$node->nid).'">Read more...</a></h6>';?>
            </div>

        </div>
    </div>

    <!-- START COMMENTS -->
<!--    <div class="span8">-->
<!--        <div class="comments_div">-->
<!--            --><?php ////print '<h3 style="font-weight: 600 !important; text-transform: uppercase !important;">' . $node->comment_count . ' Comment:</h3>';?>
<!--            --><?php //if (empty($content['comments'])) :?>
<!--               --><?php //print render($content['links']['comment']);?>
<!--            --><?php //else: ?>
<!--               --><?php //print render($content['comments']);?>
<!--            --><?php //endif; ?>
<!--        </div>-->
<!---->
<!--    </div>-->

</div>

