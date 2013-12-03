
<div class="span4 hidden-phone column_container">
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $welcome_content;?>

                    <?php echo '<h4 class="visible-desktop">' . $features_title . '</h4>';?>

                    <div class="visible-desktop">
                        <div class="span6">
                            <ul class="unstyled" style="margin-top: 10px;">
                            <?php
                            for($i = 0; $i < 4; $i++){
                                echo '<li>';
                                echo $features_items[$i];
                                echo '</li>';
                            }
                            ?>
                            </ul>
                        </div>

                        <div class="span6">
                            <ul class="unstyled" style="margin-top: 10px;">
                            <?php
                                for($i = 4; $i < 8; $i++){
                                echo '<li>';
                                echo $features_items[$i];
                                echo '</li>';
                                }
                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</div>