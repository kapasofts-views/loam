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


    <?php
    foreach($view->result as $key => $row){
        $element = $row->_field_data['nid']['entity'];
        $bg_img = url('sites/default/files/'.file_uri_target($element->field_background_img[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
        $first_elem_style = (count($element->field_first_element_style)) ? $element->field_first_element_style[LANGUAGE_NONE][0]['value'] : '';
        $first_x_pos = (count($element->field_first_element_x_pos)) ? $element->field_first_element_x_pos[LANGUAGE_NONE][0]['value'] : '';
        $first_y_pos = (count($element->field_first_element_y_pos)) ? $element->field_first_element_y_pos[LANGUAGE_NONE][0]['value'] : '';
        $first_speed = (count($element->field_first_element_speed)) ? $element->field_first_element_speed[LANGUAGE_NONE][0]['value'] : '';
        $first_start_time = (count($element->field_first_element_start_time)) ? $element->field_first_element_start_time[LANGUAGE_NONE][0]['value'] : '';
        $first_text = (count($element->field_first_element_text)) ? $element->field_first_element_text[LANGUAGE_NONE][0]['value'] : '';
        $first_elem_img = (count($element->field_first_element_image)) ? url('sites/default/files/'.file_uri_target($element->field_first_element_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true)) : '';
        $first_elem_video = (count($element->field_first_element_video)) ? 'http://player.vimeo.com/video/'.$element->field_first_element_video.'?title=0&amp;byline=0&amp;portrait=0' : '';

        $second_elem_style = (count($element->field_second_element_style)) ? $element->field_second_element_style[LANGUAGE_NONE][0]['value'] : '';
        $second_x_pos = (count($element->field_second_element_x_pos)) ? $element->field_second_element_x_pos[LANGUAGE_NONE][0]['value'] : '';
        $second_y_pos = (count($element->field_second_element_y_pos)) ? $element->field_second_element_y_pos[LANGUAGE_NONE][0]['value'] : '';
        $second_speed = (count($element->field_second_element_speed)) ? $element->field_second_element_speed[LANGUAGE_NONE][0]['value'] : '';
        $second_start_time = (count($element->field_second_element_start)) ? $element->field_second_element_start[LANGUAGE_NONE][0]['value'] : '';
        $second_text = (count($element->field_second_element_text)) ? $element->field_second_element_text[LANGUAGE_NONE][0]['value'] : '';
        $second_elem_img = (count($element->field_second_element_image)) ?  url('sites/default/files/'.file_uri_target($element->field_second_element_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true)) : '';
        $second_elem_video = (count($element->field_second_element_video)) ? 'http://player.vimeo.com/video/'.$element->field_second_element_video[LANGUAGE_NONE][0]['value'].'?title=0&amp;byline=0&amp;portrait=0' : '';

        echo '<li data-transition="random" data-slotamount="7" data-masterspeed="300" >'."\n";

        echo '<img src="' . $bg_img . '" >'."\n";
        echo '   <div class="tp-caption '.$first_elem_style.' fade"'."\n";
        echo '         data-x="'.$first_x_pos.'"'."\n";
        echo '         data-y="'.$first_y_pos.'"'."\n";
        echo '        data-speed="'.$first_speed.'"'."\n";
        echo '         data-start="'.$first_start_time.'"'."\n";
        echo '         data-easing="easeOutExpo">'."\n";
        if(!empty($first_text)){
            echo '        <div>'.$first_text.'</div>'."\n";
        }elseif(!empty($first_elem_img)){
            echo '<img src="'. $first_elem_img .'">'."\n";
        }elseif(!empty($first_elem_video)){
            echo '<iframe src="http://player.vimeo.com/video/'.$first_elem_video.'?title=0&amp;byline=0&amp;portrait=0" width="420" height="314" style="width:420px;height:314px;"></iframe>'."\n";
        }else{
            echo '        <div></div>'."\n";
        }
        echo '   </div>'."\n";

        echo '    <div class="tp-caption '. $second_elem_style .' fade"'."\n";
        echo '         data-x="'.$second_x_pos.'"'."\n";
        echo '         data-y="'.$second_y_pos.'"'."\n";
        echo '         data-speed="'.$second_speed.'"'."\n";
        echo '         data-start="'.$second_start_time.'"'."\n";
        echo '         data-easing="easeOutExpo">'."\n";
        if(!empty($second_text)){
            echo '        <div>'.$second_text.'</div>'."\n";
        }elseif(!empty($second_elem_img)){
            echo '<img src="'. $second_elem_img .'">'."\n";
        }elseif(!empty($second_elem_video)){
            echo '<iframe src="'.$second_elem_video.'" width="420" height="314" style="width:420px;height:314px;"></iframe>'."\n";
        }else{
            echo '        <div></div>'."\n";
        }
        echo '    </div>'."\n";
        echo '</li>'."\n";
    }
    ?>
