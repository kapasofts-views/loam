<div class="row" style="margin-bottom:50px;">
    <?php if(!empty($node->field_blog_img['und'][0]['uri']) && empty($node->field_blog_img['und'][0]['is_default'])){ ?>
        <!--Post with Image-->
    <div class="span12">
        <div class="row">
            <div class="span12 blog_item nolink" style="margin-bottom:0px;">
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
    <div class="span12">
        <div class="row">
            <div class="span12 blog_item nolink" style="margin-bottom:0px;">
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
    <div class="span12">
        <div class="blog_item">
            <!--Post info and Title-->
            <div class="blog_head">
                <div style=" margin-bottom:-5px !important;"></div>
            </div>

            <!--Post content-->
            <div class="blog_post_item_description">
                <div class="blog_head blog_inner">
                    <?php print '<h4>'.$node->title.'</h4>';?>
                    <div class="meta">
                        <?php print '<span><b>By</b> <a href="#">' . $node->name . '</a></span>';?>
<!--                        <span><a href="#">DESIGN</a>, <a href="#">WORDPRESS</a></span>-->
                        <?php print '<span class="last-item"><a href="#">' . $node->comment_count . ' Comments</a></span>';?>
                    </div>
                </div>
                <?php print $body[0]['safe_value']; ?>
<!--                <p>-->
<!--                    <strong>Welcome to WordPress</strong>. This is your first post. Edit or delete it, then start blogging!-->
<!--                </p>-->

            </div>

        </div>
    </div>
    <div class="span12">
        <div class="share">
            <span style="float:left; margin-right:10px;">Share this:</span>
            <div style="float:left">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_counter addthis_pill_style"></a>
                </div>
                <script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f88195d6026781e"></script>
                <!-- AddThis Button END -->
            </div>
        </div>
    </div>

    <!-- ABOUT AUTHOR-->
    <div class="span12">
        <div class="blog_item_description" style="margin-top: 30px;">
            <?php print '<img class="img-polaroid" src="'.$profile_photo.'" style="float: left; margin-right: 20px; width: 80px; height: 80px;" alt="Builder avatar"/>';?>
            <h5 style="margin-bottom: 5px; font-weight: 600 !important;">About The Author</h5>
            Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit.
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- START COMMENTS -->
    <div class="span12">
        <div class="comments_div">
            <?php print '<h3 style="font-weight: 600 !important; text-transform: uppercase !important;">' . $node->comment_count . ' Comment:</h3>';?>
            <?php print render($content['comments']); ?>
        </div>

    </div>

</div>

