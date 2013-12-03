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
        print '<li class="span3">';
        print '    <div class="portfolio_item">';
        print '        <div class="view view-first">';
        print '            <a href="item-single-image.html" class="link_image">';
        print '                <!-- Link to Main Big Image -->';
        print '                <img src="'.url('sites/default/files/'.file_uri_target($row->field_field_portfolio_photo[0]['raw']['uri']), array('absolute'=>true)).'" alt="Permalink to Another Work">';
        print '            </a>';
        print '            <div class="mask">';
        print '                <!-- Link to Thambnail -->';
        print '                <a href="' . url('sites/default/files/'.file_uri_target($row->field_field_portfolio_photo[0]['raw']['uri']), array('absolute'=>true)) . '" rel="prettyPhoto" class="info"></a>';
        print '                <!-- Link to Page -->';
        print '                <a href="'.drupal_get_path_alias('node/'.$row->nid).'" class="link"></a>';
        print '            </div>';
        print '        </div>';
        print '    </div>';
        print '    <div class="descr">';
        print '        <!-- Item Heading -->';
        print '        <h5 class="post_title"><a href="'.drupal_get_path_alias('node/'.$row->nid).'" class="link title" title="Permalink to Another Work">'.$row->node_title.'</a></h5>';
        print '        <!-- Item Description -->';
        print '        <div class="entry_content">';
        print '            Few words about project';
        print '        </div>';
        print '    </div>';
        print '</li>';
        print '<!-- End Item -->';
            ?>
<?php endforeach; ?>
