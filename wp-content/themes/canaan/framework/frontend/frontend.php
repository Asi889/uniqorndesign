<?php
defined('ABSPATH') || die();

include_once(dirname(__FILE__) . '/components.php');
include_once(dirname(__FILE__) . '/svg.php');

function get_uniqorns_tags_and_cats($posttags, $categories, $options = ['have-anchor' => true])
{

    // $blue = 'text-blue-500 bg- blue-200';
    // $red = 'text-Burgundy-400 bg-[#FFF6FA]';
    // $purple = 'bg-purple-100 text-purple-5';
    $html = '';
    if ($posttags) {

        foreach ((array) $posttags as $key => $tag) {
            $html .= '<li class="bg-[#FFF6FA] text-Burgundy-400 rounded-2xl text-sm  px-2 leading-[30px]">';

            if ($options['have-anchor']) $html .= '<a href="TODO: MISSING LINK" class="">';
            $html .= $tag->name;
            if ($options['have-anchor']) $html .= '</a>';
            $html .= '</li>';
        }
    }
    if ($categories) {
        foreach ((array) $categories as $key => $tag) {
            $html .= '<li class="bg-purple-100 text-purple-500 rounded-2xl text-sm  px-2 leading-[30px]">';
            if ($options['have-anchor']) $html .= '<a href="TODO: MISSING LINK">';
            $html .= $tag->name;
            if ($options['have-anchor']) $html .= '</a>';
            $html .= '</li>';
        }
    }
    return $html;
}

function canaan_get_menu_array($current_menu = 'Main Menu')
{

    $menuLocations = get_nav_menu_locations();
    $menuID = isset($menuLocations[$current_menu]) ? $menuLocations[$current_menu] : null;
    $menu_array = wp_get_nav_menu_items($menuID);
    $menu = array();
    foreach ((array) $menu_array as $m) {

        if ($m && empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['classes'] = $m->classes;
            $menu[$m->ID]['type'] = $m->type;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        }
    }

    return $menu;
}
function populate_children($menu_array, $menu_item)
{
    $children = array();
    if (!empty($menu_array)) {
        foreach ($menu_array as $k => $m) {
            if ($m->menu_item_parent == $menu_item->ID) {
                $children[$m->ID] = array();
                $children[$m->ID]['ID'] = $m->ID;
                $children[$m->ID]['title'] = $m->title;
                $children[$m->ID]['url'] = $m->url;
                $children[$m->ID]['classes'] = $m->classes;
                $children[$m->ID]['type'] = $m->type;
                unset($menu_array[$k]);
                $children[$m->ID]['children'] = populate_children($menu_array, $m);
            }
        }
    };
    return $children;
}

function countMinutesToRead($content)
{
    $count = str_word_count($content);
    if ($content < 300) {
        return "";
    }
    return  round($count / 60) . '&nbsp;' . pll__('min read');
}


function get_writer_cmp($p)
{
    $writes = get_the_terms($p->ID, 'writer');

    if (empty($writes) || !isset($writes[0]) || !isset($writes[0]->name)) {
        return '';
    }
    $writer = $writes[0];

    $html = '';
    $html .= '<p class="text-base text-[#616161] montserrat flex items-center gap-x-4 h-[60px] overflow-hidden">';
    $html .= get_img_html(carbon_get_term_meta($writer->term_id, 'writer_image'), true, 'full', 'w-[60px] w-full object-cover');
    $html .= '<span>' . $writer->name . '</span>';
    $html .= '</p>';
    return $html;
}

function article_prev_cmp(WP_Post $p)
{
    $html = '';
    $posttags = get_the_tags($p->ID);

    $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');

    $html .= '<a href="" class="w-full block px-6 lg:px-8 py-8 bg-[#FFFFFF]   rounded-lg hover:drop-shadow-2xl"> ';
    $html .= '<h2 class="font-bold text-xl lg:text-2xl text-[#424242] pb-2 montserrat">' . $p->post_title . '</h2>';
    $html .= '<div class="flex gap-x-4 pt-2 pb-3">';

    $html .= '<ul class="flex gap-x-3 mt-4 lg:mt-8 ">';
    $html .=  get_uniqorns_tags_and_cats($posttags, [], ['have-anchor' => false]);
    $html .= '</ul>';

    $html .= '<span class="text-[#9E9E9E]  text-sm  ">';
    $html .= countMinutesToRead($p->post_content);
    $html .= '</span>';
    $html .= '</div>';
    $html .= '<div class="text-base montserrat text-[#616161]">';
    $html .= canaan_get_excerpt($p, '', 35);
    $html .= '</div>';
    $html .= '<div class="flex gap-x-4 pt-4 items-center">';

    $html .= get_writer_cmp($p);

    $html .= '</div>';
    $html .= '</a>';
    return $html;
}



function project_prev_cmp(WP_Post $p, $key = 0)
{
    $html ='';
    $posttags = get_the_tags($p->ID);
    $posttagsid = [];
    if($posttags && !is_wp_error($posttags)){
        foreach ($posttags as $tag) {
            $posttagsid[] = $tag->term_id;
        }
    }
    $class ='project-card w-full grid px-0 lg:px-3 py-0 lg:py-3 rounded-lg hover:drop-shadow-2xl';
    $halfGrid =[3,4];
    $towThird =[6,9];
    if(in_array($key, $halfGrid)){
        $class .= ' col-span-6';
    } elseif(in_array($key, $towThird)){
        $class .= '  col-span-8';
    } else {
        $class .= ' max-w-[335px] lg:max-w-[436px] col-span-4';
    }
    

    $image = get_post_thumbnail_id($p->ID,);

    $html .= '<div data-post-tags="[' . implode(',', $posttagsid) . ']" class="' . $class . '">';
    $html .= '<div class=" bg-[#F9F2FF] h-[436px]">';
    $html .= get_img_html($image, true, 'full', 'h-full w-full object-cover');
    $html .= '</div>';
    $html .= '<div class="pt-4 lg:pt-5">';
    $html .= '<h2 class="font-bold text-xl lg:text-2xl text-[#424242]  montserrat">' . $p->post_title . '</h2>';
    $html .= '<ul class="flex gap-x-4 pt-3">';
    $html .= get_uniqorns_tags_and_cats($posttags, []);
    $html .= '</ul>';
    $html .= '</div>';
    $html .= '</div>';
    return $html;
}
