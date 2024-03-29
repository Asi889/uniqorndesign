<?php
defined('ABSPATH') || die();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// !! Field Name Patterns : most have uniqe prefix
// https://docs.carbonfields.net/#/advanced-topics/field-name-patterns?id=field-name-patterns


add_action('carbon_fields_register_fields', 'crb_attach_post_options');
function crb_attach_post_options()
{
    $post_type = 'post';
    $prefix = 'post_';
    $metaBox = Container::make('post_meta', 'General Settings');
    $metaBox->where('post_type', '=', $post_type);
    $metaBox->add_fields(
        array(
            Field::make('image', $prefix . 'image', 'תמונת תצוגה 1:1  {width:350,height:350}')
                ->set_value_type('id'),
            Field::make('separator', 'crb_separator', __('Separator')),
            Field::make('complex', $prefix . 'services', ' זהו שדה מורכב')
                ->add_fields(array(
                    Field::make('text', 'name'),
                )),
        )
    );

    $post_type = 'article';

    $prefix = 'article_';
    $metaBox = Container::make('post_meta', 'General Settings');
    $metaBox->where('post_type', '=', $post_type);
    $metaBox->add_fields(
        array(
            Field::make('image', 'firstimage', 'Optional: Main Photo at the top of the page {width:1180px,height:600px}')
                ->set_value_type('id'),
                // Field::make('text', $prefix . 'name', 'Article name, will be used in loby pages'),
        )
    );

    $post_type = 'project';

    $prefix = 'project_';
    $metaBox = Container::make('post_meta', 'General Settings');
    $metaBox->where('post_type', '=', $post_type);
    $metaBox->add_fields(
        array(
            Field::make('image',  'firstimage', 'Optional: Main Photo at the top of the page {width:1180px,height:600px}'),
            Field::make('text', $prefix . 'name', 'Project name, will be used in loby pages'),
            // Field::make('text', 'subtitle', 'Subtitle (client name)'),

        )
    );

    $post_type = 'testimonials';

    $prefix = 'testimonials_';
    $metaBox = Container::make('post_meta', 'Client name is the post title.');
    $metaBox->where('post_type', '=', $post_type);
    $metaBox->add_fields(
        array(
            Field::make('text', $prefix.'company', 'Title, Company name '),
            Field::make('textarea', $prefix.'sub_text', 'Slogan text (short description- under the main text)') ->set_rows( 1),
            Field::make('image', $prefix.'company_logo', 'Company logo (the thumb is the post featured image)'),
        )
    );


}
