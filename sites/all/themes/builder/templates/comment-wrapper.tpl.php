<?php print render($content['comments']); ?>

<?php if ($content['comment_form']): ?>
    <div id="respond" style="padding-top:40px;">
        <h4 style="font-weight:600 !important; margin-bottom:12px;">Leave a Reply</h4>

        <?php print '<form class="form" action="' . $content['comment_form']['#action'] . '" method="post" id="'.$content['comment_form']['#id'].'">';?>
            <br>
            <input  class="span4" type="text" placeholder="Subject" name="subject" value="" />
            <?php print render($content['comment_form']['form_build_id']);?>
            <?php print render($content['comment_form']['form_id']);?>
            <?php print render($content['comment_form']['form_token']);?>
            <?php print '<textarea type="text" placeholder="Message" id="'.$content['comment_form']['comment_body']['und'][0]['#id'].'" name="comment_body[und][0][value]" rows="5" style="width:98%"></textarea><br>';?>
            <button name="op" id="edit-submit" value="Save" type="submit"  class="btn btn-small">Post comment</button>


            <p></p>

        </form>
        <?php //print render($content['comment_form']); ?>

    </div>
<?php endif; ?>
