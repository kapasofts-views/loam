<ul class="unstyled commentsul">
    <li class="comment even thread-even depth-1">
        <div class="seppp">
            <div>
                <div class="blog_item_comments_description">

                    <div class="hidden-phone" style="float: left; margin-right: 0px;">
                        <?php print '<img alt="" src="' . image_style_url("medium", $comment->picture->uri) . '" class="avatar img-polaroid avatar-70 photo avatar-default" height="70" width="70"/>';?>
                    </div>

                    <?php print '<h6 style="margin-bottom: 4px;">By <span class="colored"><a href="#" rel="external nofollow" class="url">' . $comment->name . '</a></span>';?>
                        <?php print '<a style="color: inherit; padding-left: 7px;" href="http://html.orange-idea.com/builder/hello-world/#comment-26">' . format_date($comment->created, 'medium', 'd M Y') . '</a>';?>
                    </h6>

                    <hr style="margin-top: 0px; margin-bottom: 10px;"/>

                    <div style="font-style: italic;">
                        <?php print $comment->comment_body[LANGUAGE_NONE][0]['safe_value']; ?>
                    </div>

                </div>
            </div>
        </div>
    </li>
</ul>

