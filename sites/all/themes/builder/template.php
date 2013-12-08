<?php

/**
 * @file template.php
 */
/*********Page*********/
function builder_preprocess_page(&$vars){
    $node = (isset($vars['node'])) ? $vars['node'] : (object) array('type'=>'default') ;
    $type = $node->type;
    if($type == 'blog'){
        switch($node->field_sidebar_positioning['und'][0]['taxonomy_term']->name){
            case 'left':
                $vars['theme_hook_suggestions'][] = 'page__'. $type.'_left';
                break;
            case 'none':
                $vars['theme_hook_suggestions'][] = 'page__'. $type.'_without_sidebar';
                break;
            default:
                $vars['theme_hook_suggestions'][] = 'page__'. $type;
        }

    }else{
        $vars['theme_hook_suggestions'][] = 'page__'. $type;
    }
    $rel_path = $_GET['q'];
    $breadcrumb = drupal_get_breadcrumb();
    if($rel_path == 'blog'){
        //teaser for posts
        $node->title = 'All Posts';
        $breadcrumb[] = $node->title;
        drupal_set_breadcrumb($breadcrumb);
    }elseif(($startPos = strpos($rel_path, 'blog/')) !== false){
        $userId = substr($rel_path, $startPos + 5);
        $user = user_load($userId);
        $node->title = $user->name."'s Blog";
        $breadcrumb[] = $node->title;
        drupal_set_breadcrumb($breadcrumb);
    }
    $vars['node'] = $node;


    switch($type){
        case 'home_five':
        case 'home_two':
        case 'home_one':
        case 'home_three':
            //REVOLUTION BANNER CSS SETTINGS
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/rs-plugin/css/responsive.css', array('group' => CSS_THEME - 1,'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/rs-plugin/css/settings.css', array('group' => CSS_THEME - 1,'media' => 'screen','type' => 'file'));

            //Flex Slider Css
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/flexslider/flexslider.css', array('group' => CSS_THEME - 1,'type' => 'file'));

            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            break;
        case 'home_four':
            //REVOLUTION BANNER CSS SETTINGS
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/rs-plugin/css/responsive.css', array('group' => CSS_THEME - 1,'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/rs-plugin/css/settings.css', array('group' => CSS_THEME - 1,'media' => 'screen','type' => 'file'));

            //Flex Slider Css
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/flexslider/flexslider.css', array('group' => CSS_THEME - 1,'type' => 'file'));

            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            break;
        case 'about_us':
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));

            $vars['about_title'] = $node->field_about_us_title[LANGUAGE_NONE][0]['value'];
            $vars['about_content'] = $node->field_about_content[LANGUAGE_NONE][0]['value'];
            $vars['page_description'] = $node->field_description[LANGUAGE_NONE][0]['value'];
            break;
        case 'service_page':
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));

            //variables
            $vars['primary_title'] = $node->field_service_main_title[LANGUAGE_NONE][0]['value'];
            $vars['primary_content'] = array_map('_retreive_values', $node->field_about_service[LANGUAGE_NONE]);
            $vars['primary_photo'] =  url('sites/default/files/'.file_uri_target($node->field_primary_service_photo[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));
            $vars['secondary_title'] = $node->field_secondary_title[LANGUAGE_NONE][0]['value'];
            $vars['secondary_content'] = array_map('_retreive_values', $node->field_secondary_content[LANGUAGE_NONE]);
            $vars['secondary_photo'] = url('sites/default/files/'.file_uri_target($node->field_secondary_phote[LANGUAGE_NONE][0]['uri']), array('absolute'=>true));

            $vars['page_description'] = $node->field_description[LANGUAGE_NONE][0]['value'];

            break;
        case 'contact':
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));

            //variables
            $vars['longitude'] = (!empty($node->field_contact_longitude)) ? $node->field_contact_longitude[LANGUAGE_NONE][0]['value'] : '';
            $vars['latitude'] = (!empty($node->field_contact_latitude)) ? $node->field_contact_latitude[LANGUAGE_NONE][0]['value'] : '';
            $vars['info_title'] =  (!empty($node->field_contact_info_title)) ? $node->field_contact_info_title[LANGUAGE_NONE][0]['value']: '';
            $vars['info_content'] = (!empty($node->field_contact_info_content)) ? $node->field_contact_info_content[LANGUAGE_NONE][0]['value'] : '';
            $vars['address'] = (!empty($node->field_contact_address)) ? $node->field_contact_address[LANGUAGE_NONE][0]['value'] : '';
            $vars['city'] = (!empty($node->field_contact_city)) ? $node->field_contact_city[LANGUAGE_NONE][0]['value'] : '';
            $vars['state'] = (!empty($node->field_contact_state)) ? $node->field_contact_state[LANGUAGE_NONE][0]['value'] : '';
            $vars['zip'] = (!empty($node->field_contact_website)) ? $node->field_contact_zip[LANGUAGE_NONE][0]['value'] : '';
            $vars['phone'] = (!empty($node->field_contact_phone)) ? $node->field_contact_phone[LANGUAGE_NONE][0]['value'] : '';
            $vars['email'] = (!empty($node->field_contact_email)) ? $node->field_contact_email[LANGUAGE_NONE][0]['value'] : '';
            $vars['fax'] = (!empty($node->field_contact_fax)) ? $node->field_contact_fax[LANGUAGE_NONE][0]['value'] : '';
            $vars['website'] = (!empty($node->field_contact_website)) ? $node->field_contact_website[LANGUAGE_NONE][0]['value'] : '';
            $vars['form_title'] = (!empty($node->field_contact_form_title)) ? $node->field_contact_form_title[LANGUAGE_NONE][0]['value'] : '';

            $vars['page_description'] = $node->field_description[LANGUAGE_NONE][0]['value'];

            break;
        case 'gallery_four':
        case 'gallery_three':
        case 'gallery_two':
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));

            $vars['page_description'] = $node->field_description[LANGUAGE_NONE][0]['value'];
            $vars['photos'] = array_map('_retreive_photos', $node->field_photo[LANGUAGE_NONE]);
            break;
        case 'error':
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1, 'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));

            $vars['error_content'] = $node->body[LANGUAGE_NONE][0]['value'];
            $vars['error_title'] = $node->title;
            $vars['page_description'] = $node->field_description[LANGUAGE_NONE][0]['value'];
            break;
        case 'blog_right_sidebar':
        case 'blog_right_sidebar_small':
        case 'blog_left_sidebar_small':
        case 'blog_left_sidebar':
        case 'right_sidebar':
        case 'both_sidebar':
        case 'left_sidebar':
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1,'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1,'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));

            $vars['pars'] = (!empty($node->field_content_par[LANGUAGE_NONE])) ? array_map('_retreive_values', $node->field_content_par[LANGUAGE_NONE]) : '';
            $vars['sidebar_img'] = (!empty($node->field_content_image[LANGUAGE_NONE][0]['uri'])) ? url('sites/default/files/'.file_uri_target($node->field_content_image[LANGUAGE_NONE][0]['uri']), array('absolute'=>true)) : '';
            $vars['sidebar_img_alt'] = (!empty($node->field_content_image[LANGUAGE_NONE][0]['alt'])) ? $node->field_content_image[LANGUAGE_NONE][0]['alt'] : '';
            $vars['page_description'] = $node->field_description[LANGUAGE_NONE][0]['value'];
            break;
        default:
            //REVOLUTION BANNER CSS SETTINGS
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/rs-plugin/css/responsive.css', array('group' => CSS_THEME - 1,'media' => 'screen', 'type' => 'file'));
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/rs-plugin/css/settings.css', array('group' => CSS_THEME - 1,'media' => 'screen','type' => 'file'));

            //Flex Slider Css
//            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/flexslider/flexslider.css', array('group' => CSS_THEME - 1,'type' => 'file'));

            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/wide_layout.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/docs.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/options.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/builder.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/js/google-code-prettify/prettify.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/nivo/nivo-slider.css', array('group' => CSS_THEME + 1,'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/prettyPhoto.css', array('group' => CSS_THEME + 1,'media' => 'screen', 'type' => 'file'));
            drupal_add_css(drupal_get_path('theme',$GLOBALS['theme']) .'/css/style.css', array('group' => CSS_THEME + 1, 'type' => 'file'));
        break;

    }
}

function _retreive_photos($photo){
    return url('sites/default/files/'.file_uri_target($photo['uri']), array('absolute'=>true));
}

function _retreive_features($feature){
    return $feature->name;
}

function _retreive_tid($feature){
    return $feature['tid'];
}

/************Block***********/
function builder_preprocess_block(&$vars){
    switch($vars['block_html_id']){
        //view for services
        case 'block-views-services-overview-block':
            $vars['theme_hook_suggestions'][] = 'block__view_services_overview';
            break;
        case 'block-block-1':
            break;
    }

}

/*******Node********/
function builder_preprocess_node(&$vars){

    switch($vars['type']){
        case 'blog':
            if($vars['view_mode'] == 'teaser'){
                //blog with multiple posts(all or per author)
                $vars['theme_hook_suggestions'][] = 'node__post_list';
            }elseif($vars['node']->field_sidebar_positioning['und'][0]['taxonomy_term']->name == 'none'){
                    //post configured without any sidebar
                    $vars['theme_hook_suggestions'][] = 'node__post_full';
            }
            $vars['profile_photo'] = ($vars['picture']) ? image_style_url("medium", file_load($vars['picture'])->uri) : base_path().path_to_theme().'/images/gallery/avatar-2.png' ;

            break;
    }

}

function _retreive_values($par){
    return $par['value'];
}

function builder_preprocess_views_view_field(&$vars) {
    $vars['output'] = $vars['field']->advanced_render($vars['row']);
}

/**********Menu**********/
function builder_menu_tree(&$variables) {
//    var_dump($variables);
    return '<ul class="menu">' . $variables['tree'] . '</ul>';
}

function builder_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';
//    $element['#attributes']['class'][] = "menu";

    if ($element['#below']) {

        // Prevent dropdown functions from being added to management menu as to not affect navbar module.
        if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
            $sub_menu = drupal_render($element['#below']);
        }

        else {
            // Add our own wrapper
            unset($element['#below']['#theme_wrappers']);
            $sub_menu = '<ul class="sub-menu">' . drupal_render($element['#below']) . '</ul>';
//            $element['#localized_options']['attributes']['class'][] = 'current-menu-item';
//            $element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
//            $element['#localized_options']['attributes']['data-toggle'] = 'dropdown';

            // Check if this element is nested within another
            if ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] > 1)) {
                // Generate as dropdown submenu
//                $element['#attributes']['class'][] = 'dropdown-submenu';
            }
            else {
                // Generate as standard dropdown
//                $element['#attributes']['class'][] = 'dropdown';
                $element['#localized_options']['html'] = TRUE;
//                $element['#title'] .= ' <span class="caret"></span>';
            }

            // Set dropdown trigger element to # to prevent inadvertant page loading with submenu click
            $element['#localized_options']['attributes']['data-target'] = '#';
        }
    }
    // Issue #1896674 - On primary navigation menu, class 'active' is not set on active menu item.
    // @see http://drupal.org/node/1896674
    if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']) || $element['#localized_options']['language']->language == $language_url->language)) {
//        $element['#attributes']['class'][] = 'active';
        $element['#attributes']['class'][] = 'current-menu-item';
    }
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
//      return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";

}

function builder_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];

    if (!empty($breadcrumb)) {
        $breadcrumbs = '<ul class="breadcrumb">';

        $count = count($breadcrumb) - 1;
        foreach ($breadcrumb as $key => $value) {
            if ($count != $key) {
                $breadcrumbs .= '<li class="small">' . $value . '<span class="divider">/</span></li>';
            }
            else{
                $breadcrumbs .= '<li class="small">' . $value . '<span class="divider">/</span></li>';
            }
        }
        if ((arg(0) == 'node') && is_numeric(arg(1)) && ($node = node_load(arg(1)))) {
                $breadcrumbs .= '<li><span>'.$node->title.'</span></li>';
        }
        $breadcrumbs .= '</ul>';

        return $breadcrumbs;
    }
}

function builder_pager($variables) {
    $output = "";
    $tags = $variables['tags'];
    $element = $variables['element'];
    $parameters = $variables['parameters'];
    $quantity = $variables['quantity'];

    global $pager_page_array, $pager_total;

    // Calculate various markers within this pager piece:
    // Middle is used to "center" pages around the current page.
    $pager_middle = ceil($quantity / 2);
    // current is the page we are currently paged to
    $pager_current = $pager_page_array[$element] + 1;
    // first is the first page listed by this pager piece (re quantity)
    $pager_first = $pager_current - $pager_middle + 1;
    // last is the last page listed by this pager piece (re quantity)
    $pager_last = $pager_current + $quantity - $pager_middle;
    // max is the maximum page number
    $pager_max = $pager_total[$element];
    // End of marker calculations.

    // Prepare for generation loop.
    $i = $pager_first;
    if ($pager_last > $pager_max) {
        // Adjust "center" if at end of query.
        $i = $i + ($pager_max - $pager_last);
        $pager_last = $pager_max;
    }
    if ($i <= 0) {
        // Adjust "center" if at start of query.
        $pager_last = $pager_last + (1 - $i);
        $i = 1;
    }

    // End of generation loop preparation.
    $li_first = theme('pager_first', array('text' => (isset($tags[0]) ? $tags[0] : t('first')), 'element' => $element, 'parameters' => $parameters));
    $li_previous = theme('pager_previous', array('text' => (isset($tags[1]) ? $tags[1] : t('previous')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
    $li_next = theme('pager_next', array('text' => (isset($tags[3]) ? $tags[3] : t('next')), 'element' => $element, 'interval' => 1, 'parameters' => $parameters));
    $li_last = theme('pager_last', array('text' => (isset($tags[4]) ? $tags[4] : t('last')), 'element' => $element, 'parameters' => $parameters));

    if ($pager_total[$element] > 1) {
        /*
        if ($li_first) {
          $items[] = array(
            'class' => array('pager-first'),
            'data' => $li_first,
          );
        }
        */
        if ($li_previous) {
            $items[] = array(
                'class' => array('prev'),
                'data' => $li_previous,
            );
        }

        // When there is more than one page, create the pager list.
        if ($i != $pager_max) {
            if ($i > 1) {
                $items[] = array(
//                    'class' => array('pager-ellipsis', 'disabled'),
                    'data' => '<span>…</span>',
                );
            }
            // Now generate the actual pager piece.
            for (; $i <= $pager_last && $i <= $pager_max; $i++) {
                if ($i < $pager_current) {
                    $items[] = array(
                         'class' => array('page-numbers'),
                        'data' => theme('pager_previous', array('text' => $i, 'element' => $element, 'interval' => ($pager_current - $i), 'parameters' => $parameters)),
                    );
                }
                if ($i == $pager_current) {
                    $items[] = array(
                        'class' => array('current', 'page-numbers'), // Add the active class
                        'data' => l($i, '#', array('fragment' => '','external' => TRUE)),
                    );
                }
                if ($i > $pager_current) {
                    $items[] = array(
                        'class' => array('page-numbers'),
                        'data' => theme('pager_next', array('text' => $i, 'element' => $element, 'interval' => ($i - $pager_current), 'parameters' => $parameters)),
                    );
                }
            }
            if ($i < $pager_max) {
                $items[] = array(
//                    'class' => array('pager-ellipsis', 'disabled'),
                    'data' => '<span>…</span>',
                );
            }
        }
        // End generation.
        if ($li_next) {
            $items[] = array(
                'class' => array('next', 'page-numbers'),
                'data' => $li_next,
            );
        }
        /*
        if ($li_last) {
          $items[] = array(
            'class' => array('pager-last'),
            'data' => $li_last,
          );
        }
        */

//        return '<div class="pagination pagination-centered">'. theme('item_list', array(
//            'items' => $items,
//            //'attributes' => array('class' => array('pager')),
//        )) . '</div>';

        return '<section style="padding:0px !important;">'
                            .'<hr style="margin-top:0px;">'
                            .'<div class="pride_pg">'
                            . theme('item_list', array(
                                'items' => $items,
                                'attributes' => array('class' => array('builder-pager')),
                            ))
                            .'</div>'
                            .'</section>';
    }

    return $output;
}
