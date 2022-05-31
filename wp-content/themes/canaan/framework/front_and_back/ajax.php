<?php
defined('ABSPATH') || die();

//  add genral data

add_action('wp_ajax_contactus', 'contactus_cb_ajax');
add_action('wp_ajax_nopriv_contactus', 'contactus_cb_ajax');
function contactus_cb_ajax()
{

    global $_POST;
    $email = $_POST['email'];

    $data = $_POST;
    foreach ($data as $k => $v) {
        $data[$k] = wp_kses_data($v);
    }

    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array('status' => 'fail', 'message' => pll__('המייל אינו תקין'), 'element' => 'email'));
        die(); // bad request1
    }

    $emails_meta = carbon_get_theme_option('misc_' . 'email_accounts');
    $emails_to = wp_list_pluck($emails_meta, 'email');


    add_filter('wp_mail_content_type', function ($content_type) {
        return 'text/html';
    });
    $email_content = '';

    unset($data['pll_load_front']);
    unset($data['order_tour_field']);
    unset($data['action']);
    unset($data['nonce']);
    unset($data['_wp_http_referer']);

    foreach ($data as $k => $v) {
        $email_content .= '<p style="direction:rtl;"><b>' . field_trans($k) . ':</b><br/>' . $v . '</p>';
    }

    $email_content = apply_filters('comment_moderation_text', $email_content);
    echo apply_filters('comment_moderation_headers', '');


    $subject = " הודעה מאתר  " . get_bloginfo('name');

    create_a_lead($email_content,$data['full-name'] );
    $headers = array('Content-Type: text/html; charset=UTF-8');
    @wp_mail($emails_to, $subject, $email_content, $headers);
    echo json_encode(array('status' => 'sent', 'message' => pll__('ההודעה נשלחה בהצלחה')));
    die();
}


function field_trans($k)
{
    switch ($k) {
        case 'phone':
            return 'טלפון';
            break;
        case 'name':
            return 'שם מלא';
            break;
        case 'address':
            return 'כתובת';
            break;
        case 'show':
            return 'בחירת הופעה';
            break;
        case 'role':
            return 'תפקיד';
            break;
        case 'ticket-type':
            return 'כרטיס יחיד/זוגי';
            break;
    }


    return $k;
}

function create_a_lead($email_content, $name)
{
    // Create a Lead 
    $args = [
        'post_title'    => wp_strip_all_tags($name),
        'post_content'  => $email_content,
        // 'post_status'   => 'published',
        'post_type' => 'lead',
    ];
    wp_insert_post($args);
    // Create a Lead 
}




add_action('wp_ajax_get_more_posts', 'get_more_posts_cb_ajax');
add_action('wp_ajax_nopriv_get_more_posts', 'get_more_posts_cb_ajax');
function get_more_posts_cb_ajax()
{
    global $_POST;
    $postsPerPage = (isset($_POST['postsPerPage'])) ? intval($_POST['postsPerPage']) : get_option('posts_per_page');
    $offset = intval($_POST['offset']);

    $postType= $_POST['postType'] ? $_POST['postType'] : 'post';
    $tax_name = (isset($_POST['tax_name'])) ? $_POST['tax_name'] : 'category';
    $category = intval($_POST['category']);

    $args = [
        'posts_per_page' => $postsPerPage,
        'offset' => $offset,
        'post_type' => $_POST['postType'],
        'cat' => $category

    ];
    if ($category) {
        $args['tax_query'] = [
            [
                [
                    'taxonomy' => $tax_name,
                    'terms' => $category,
                    'include_children' => false
                ]
            ]
        ];
    }

    $posts =  new WP_Query($args);
    $html = '';
    $r = [];
    $r['postsCount'] = $posts->found_posts;
    $r['postsPerPage'] = $postsPerPage;
    $r['isLast'] = !$posts->have_posts();
    while ($posts->have_posts()) :
        $posts->the_post();
        if($postType === 'project'){
            $html .= project_prev_cmp(get_post());
        }
        if($postType === 'article'){
            $html .= article_prev_cmp(get_post());
        }

    endwhile;

    $r['html'] = $html;
    $r['offset'] = $offset + $postsPerPage;
    $r['success'] = true;
    wp_reset_postdata(); // reset postdata after the loop
    wp_send_json($r);
    die();
}