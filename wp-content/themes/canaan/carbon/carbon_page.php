<?php
defined('ABSPATH') || die();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_page_options');
function crb_attach_page_options()
{
    $prefix = 'home';
    $post_template =  'page-templates/' . $prefix . '.php';
    $metaBox = Container::make('post_meta', 'הגדרות כלליות')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make( 'date', $prefix.'date', 'תאריך' ),
        Field::make( 'text', $prefix.'top_subtitle', 'כותרת משנית' ),
        Field::make('complex', $prefix . 'specialize_in', 'ההתמחות שלנו')
        ->add_fields(array(
            Field::make('image', 'image', 'תמונה'),
            Field::make('text', 'title', 'כותרת'),
            Field::make('text', 'text', 'טקסט')
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
    $metaBox = Container::make('post_meta', 'הגדרות כלליות')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make( 'date', $prefix.'date', 'sdgh' ),
        Field::make('image', $prefix . 'product_hover', 'Product hover')
                ->set_value_type('id'),
                Field::make('complex', $prefix . 'our_values', 'our values')
                ->add_fields(array(
                    Field::make('image', 'image', 'תמונת'),
                    Field::make('text', 'title', 'כותרת'),
                    Field::make('text', 'text', 'טקסט')
                )),
                Field::make('complex', $prefix . 'meet_team', 'meet the team')
                ->add_fields(array(
                    Field::make('image', 'image', 'תמונת'),
                    Field::make('text', 'name', 'שם מלא'),
                    Field::make('text', 'text', 'טקסט')
                )),
                Field::make('complex', $prefix . 'main_content', 'main content')
                ->add_fields(array(
                    Field::make('text', 'title', 'כותרת'),
                    Field::make('text', 'text', 'טקסט')
                )),
    ));


    $prefix = 'contact_';
    $post_template =  'page-templates/' . $prefix . '.php';
    $metaBox = Container::make('post_meta', 'הגדרות כלליות')->where('post_template', '=', $post_template);
    $metaBox->add_fields(array(
        Field::make( 'date', $prefix.'date', 'תאריך' ),
    ));


}


// add_action('carbon_fields_{container_type}_container_saved', 'crb__post_meta_container_save');
add_action('carbon_fields_post_meta_container_saved', 'crb__post_meta_container_save');

function crb__post_meta_container_save(){
}