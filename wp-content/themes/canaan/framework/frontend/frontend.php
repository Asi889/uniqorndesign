<?php
defined('ABSPATH') || die();

include_once(dirname(__FILE__) . '/components.php');
include_once(dirname(__FILE__) . '/svg.php');

function get_uniqorns_tags_and_cats($posttags, $categories, $archiveArticle = false, $options = ['have-anchor' => true])
{

    // $blue = 'text-blue-500 bg- blue-200';
    // $red = 'text-Burgundy-400 bg-[#FFF6FA]';
    // $purple = 'bg-purple-100 text-purple-5';
    $html = '';

    if ($archiveArticle) {
        if ($posttags) {

            foreach ((array) $posttags as $key => $tag) {
                $html .= '<li class="bg-[#FFF6FA] hover:bg-[#f3e2ea]  text-Burgundy-400 rounded-2xl text-sm  px-[8px] py-[4px] leading-[30px] montserrat relative z-10">';

                $html .= '<a href="' . get_term_link($tag) . '" class="">';
                $html .= $tag->name;
                $html .= '</a>';
                $html .= '</li>';
            }
        }
        if ($categories) {
            foreach ((array) $categories as $key => $tag) {
                $html .= '<li class="bg-[#FFF6FA] hover:bg-[#f3e2ea] text-Burgundy-400 rounded-2xl text-sm  px-[8px] py-[4px] leading-[30px] montserrat relative z-10">';
                $html .= '<a href="' . get_term_link($tag) . '">';
                $html .= $tag->name;
                $html .= '</a>';
                $html .= '</li>';
            }
        }
        return $html;
    }
    if ($posttags) {

        foreach ((array) $posttags as $key => $tag) {
            $html .= '<li class="bg-blue-100 hover:bg-[#d1dff1]  text-blue-500 rounded-2xl text-sm leading-[30px] transition">';

            $html .= '<a class="block px-2 py-1" href="' . get_term_link($tag) . '">';
            $html .= $tag->name;
            $html .= '</a>';
            $html .= '</li>';
        }
    }
    if ($categories) {
        foreach ((array) $categories as $key => $tag) {
            $html .= '<li class="bg-purple-100 hover:bg-[#f0e5fc] text-purple-500 rounded-2xl text-sm  leading-[30px] transition">';
            $html .= '<a class="block px-2 py-1" href="' . get_term_link($tag) . '">';
            $html .= $tag->name;
            $html .= '</a>';
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
    $count = str_word_count(strip_tags($content));
    if ($count < 300) {
        pll__('1 min read');
        return;
    };
    return  round($count / 200) . '&nbsp;' . pll__('min read');
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
    $postcategories = get_the_category($p->ID);

    $html .= '<div class="w-full block px-6 lg:px-8 py-8 bg-[#FFFFFF]   rounded-lg hover:shadow transition ease-in-out duration-700 relative"> ';
    $html .= '<h2 class="font-bold text-xl lg:text-2xl text-[#424242]  montserrat">' . $p->post_title . '</h2>';
    $html .= '<div class="flex gap-x-4 pt-2 lg:pt-4  pb-4 lg:pb-6 items-center flex-wrap">';

    $html .= '<ul class="flex gap-x-3 gap-y-2 flex-wrap items-center">';
    $html .=  get_uniqorns_tags_and_cats($posttags, $postcategories, true);
    $html .= '<li class="text-[#9E9E9E]  text-sm  ">';
    $html .= countMinutesToRead($p->post_content);
    $html .= '</li>';
    $html .= '</ul>';

    $html .= '</div>';
    $html .= '<div class="text-base montserrat text-[#616161] max">';
    $html .= canaan_get_excerpt($p, '', 30);
    $html .= '</div>';
    $html .= '<div class="flex gap-x-4 pt-4 items-center">';

    $html .= get_writer_cmp($p);

    $html .= '</div>';
    $html .= '<a class="absolute inset-0 w-full h-full z-0" href="' . get_the_permalink($p) . '"><span class="sr-only">' . $p->post_title . '</span></a>';

    $html .= '</div>';
    return $html;
}



function project_prev_cmp(WP_Post $p)
{
    $html = '';
    $posttags = get_the_tags($p->ID);
    $postcategories = get_the_category($p->ID);
    $posttagsid = [];
    $categoriesid = [];


    if ($posttags && !is_wp_error($posttags)) {
        foreach ($posttags as $tag) {
            $posttagsid[] = $tag->term_id;
        }
    }
    if ($postcategories && !is_wp_error($postcategories)) {
        foreach ($postcategories as $cat) {
            $categoriesid[] = $cat->term_id;
        }
    }

    $class = 'project-card group w-full mx-auto grid px-0 lg:px-3 py-0 lg:py-3 rounded-lg transition ease-in-out duration-300 ';


    $image = get_post_thumbnail_id($p->ID,);
    $html .= '<div data-post-tags="[' . implode(',', $posttagsid) . ',' . implode(',', $categoriesid) . ']" class="p-item ' . $class . '">';
    $html .= '<div class=" grid w-full gap-y-5 relative">';
    $html .= '<div class="bg-[#F9F2FF] h-[436px] overflow-hidden rounded-2xl w-full">';
    $html .= get_img_html($image, true, 'full', 'h-full w-full object-cover group-hover:scale-105 transition ease-in-out duration-500');
    $html .= '</div>';
    $html .= '<h2 class="font-bold text-xl lg:text-2xl text-[#424242]  group-hover:opacity-75 transition">' . $p->post_name . '</h2>';
    $html .= '<a class="absolute inset-0 w-full h-full z-0" href="' . get_the_permalink($p) . '"><span class="sr-only">' . $p->post_title . '</span></a>';
    $html .= '</div>';
    $html .= '<div class="pt-2">';
    $html .= '<ul class="flex gap-x-4  flex-wrap gap-y-2">';
    $html .= get_uniqorns_tags_and_cats($posttags, $postcategories,);
    $html .= '</ul>';
    $html .= '</div>';
    $html .= '</div>';
    return $html;
}
