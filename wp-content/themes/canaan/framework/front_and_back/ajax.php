<?php
defined('ABSPATH') || die();

//  add genral data

add_action('wp_ajax_contactus', 'contactus_cb_ajax');
add_action('wp_ajax_nopriv_contactus', 'contactus_cb_ajax');
function contactus_cb_ajax()
{


    global $_POST;
    $email = $_POST['form-mail'];

    $data = $_POST;
 
    foreach ($data as $k => $v) {
        $data[$k] = wp_kses_data($v);
    }

    if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array('status' => 'fail', 'message' => pll__('המייל אינו תקין'), 'element' => 'email'));
        
        // echo('<h1>mail not good send again</h1>');
        die(); // bad request1
    }

    $to =['asafmarom89@gmail.com'];

    $email_content = '';
    foreach ($data as $key => $value) {
        $email_content .= '<p style="direction:rtl;"><b>'.$key.'</b>' . $value . '</p>';
    }
    $email_content = apply_filters('comment_moderation_text', $email_content);


    $subject = " הודעה מאתר  " . get_bloginfo('name');

    $headers = array('Content-Type: text/html; charset=UTF-8');

    @wp_mail($to, $subject, $email_content, $headers);
    echo json_encode(array('status' => 'sent', 'message' => 'ההודעה נשלחה בהצלחה'));

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

function create_a_lead($email_content, $name){
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