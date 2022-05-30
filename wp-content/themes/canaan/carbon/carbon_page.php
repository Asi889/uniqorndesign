<?php
defined('ABSPATH') || die();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_page_options');
function crb_attach_page_options()
{
    $prefix = 'home';
    $post_template =  'page-templates/' . $prefix . '.php';
    $metaBox = Container::make('post_meta', 'General')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make('text', $prefix . 'top_subtitle', 'Sub title'),
        Field::make('complex', $prefix . 'specialize_in', 'We specialize in')
            ->add_fields(array(
                Field::make('image', 'image', 'Image'),
                Field::make('text', 'title', 'title'),
                Field::make('text', 'text', 'text')
            )),
        Field::make('complex', $prefix . 'vision', 'מה יש לנו')
            ->add_fields(array(
                Field::make('image', 'image', 'תמונה'),
                Field::make('text', 'title', 'כותרת'),
                Field::make('text', 'text', 'טקסט')
            )),
    ));


    $prefix = 'page-about';
    $post_template =   $prefix . '.php';
    $metaBox = Container::make('post_meta', 'General')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make('image', $prefix . 'product_hover', 'Top Image (next to the title'),
        Field::make('complex', $prefix . 'our_values', 'our values list')
            ->add_fields(array(
                Field::make('image', 'image', 'Icon'),
                Field::make('text', 'title', 'title'),
                Field::make('textarea', 'text', 'short text')
            ))
            ->set_layout('tabbed-vertical')
            ->set_header_template(' <% if (title) { %>  <%- title %> <% } %> '),
        Field::make('complex', $prefix . 'meet_team', 'meet the team')
            ->add_fields(array(
                Field::make('image', 'image', 'Profile image'),
                Field::make('text', 'name', 'Full name'),
                Field::make('text', 'text', 'Role and job')
            ))
            ->set_layout('tabbed-vertical')
            ->set_header_template(' <% if (name) { %>  <%- name %> <% } %> '),

    ));


    $prefix = 'page-contact';
    $post_template =   $prefix . '.php';
    $metaBox = Container::make('post_meta', 'General')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make('text', $prefix.'phone_number', 'Phone number'),
        Field::make('text', $prefix.'email', 'Email'),
        Field::make('text', $prefix.'whatsup', 'Whatsup'),
        Field::make('rich_text', $prefix.'message_sent', 'message sent text')
        // Field::make('date', $prefix . 'date', 'תאריך'),
    ));
}


// add_action('carbon_fields_{container_type}_container_saved', 'crb__post_meta_container_save');
add_action('carbon_fields_post_meta_container_saved', 'crb__post_meta_container_save');

function crb__post_meta_container_save()
{
}
