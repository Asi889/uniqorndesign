<?php
// THIS IS THE main  functions files -> include filter, hooks and menus and so
defined('ABSPATH') || die();
if (canaan_conf::$isSafeLocalHost) {
    // wp_set_current_user(1);
    // wp_set_auth_cookie(1, true);
}
add_action('wp_loaded', function () {
    if (canaan_conf::$IN_MAINTENANCE && !is_user_logged_in()) {

        header('HTTP/1.1 Service Unavailable', true, 503);
        header('Content-Type: text/html; charset=utf-8');
        header('Retry-After: 3600');

        if (file_exists(ABSPATH . '/maintenance.html')) {
            require_once(ABSPATH . '/maintenance.html');
        }
        die();
    }
});
add_theme_support( 'post-thumbnails' );

add_action('init', 'canaan_init');
function canaan_init()
{

    global $pagenow;
    if (WP_DEBUG === true) {
        canaan_conf::$staticVersionID = time();
    }
    if (is_admin() ||  'wp-login.php' === $pagenow) {
        return;
    }
    // wp_dequeue_script('jquery');
    // wp_deregister_script('jquery');
}



function canaan_theme_support()
{
    register_nav_menu('primary',  'Primary Menu');
    register_nav_menu('footer',  'Footer Menu');
    register_nav_menu('mobile',  'Mobile hamburegr Menu');

    add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'canaan_theme_support');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('admin_notices', 'update_nag', 3);
remove_action('network_admin_notices', 'update_nag', 3);

// BLOCK WP REST API FRON NOT LOGED USER 
// add_filter('rest_authentication_errors', function ($result) {

//     if (!empty($result)) {
//         return $result;
//     }
//     if (!is_user_logged_in()) {
//         return new WP_Error('rest_not_logged_in', 'You are not currently logged in.', array('status' => 401));
//     }
//     return $result;
// });

// FOR use with canaan_get_menu_array 
add_filter('wp_get_nav_menu_items', 'prefix_nav_menu_classes', 10, 3);

function prefix_nav_menu_classes($items, $menu, $args)
{
    _wp_menu_item_classes_by_context($items);
    return $items;
}



function order_posts_by_menu_order($query)
{
    if (!is_admin() && $query->is_main_query()) {
        $query->set('orderby', 'menu_order');
        $query->set('order', 'asc');
    }
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('project')) {
        $query->set('posts_per_page', '50');
    }

    return $query;
}
add_action('pre_get_posts', 'order_posts_by_menu_order');

// Disable Automatic Update Email Notification Using Code 
add_filter('auto_theme_update_send_email', '__return_false');
add_filter('auto_plugin_update_send_email', '__return_false');
add_filter('auto_core_update_send_email', 'wpb_stop_auto_update_emails', 10, 4);

function wpb_stop_update_emails($send, $type, $core_update, $result)
{
    if (!empty($type) && $type == 'success') {
        return false;
    }
    return true;
}

//Disable the new user notification sent to the site admin
function smartwp_disable_new_user_notifications()
{
    //Remove original use created emails
    remove_action('register_new_user', 'wp_send_new_user_notifications');
    remove_action('edit_user_created_user', 'wp_send_new_user_notifications', 10, 2);

    //Add new function to take over email creation
    add_action('register_new_user', 'smartwp_send_new_user_notifications');
    add_action('edit_user_created_user', 'smartwp_send_new_user_notifications', 10, 2);
}
function smartwp_send_new_user_notifications($user_id, $notify = 'user')
{
    if (empty($notify) || $notify == 'admin') {
        return;
    } elseif ($notify == 'both') {
        //Only send the new user their email, not the admin
        $notify = 'user';
    }
    wp_send_new_user_notifications($user_id, $notify);
}
add_action('init', 'smartwp_disable_new_user_notifications');


add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() && $query->is_main_query()  ) {
    $post_type = get_query_var('post_type');

    if($post_type){
        $post_type = $post_type;
    } else{
        $post_type = ['nav_menu_item','project', 'post', 'article']; // don't forget nav_menu_item to allow menus to work!
    }
    $query->set('post_type',$post_type);
    return $query;
    }
}