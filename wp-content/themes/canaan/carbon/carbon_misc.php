<?php
defined('ABSPATH') || die();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{

    $prefix = 'misc_';
    $metaBox = Container::make('theme_options', 'Miscellaneous');
    $metaBox->add_tab('General', array(
        Field::make('complex', "{$prefix}email_accounts", 'E-mails for site notfications')
            ->add_fields(array(
                Field::make('text', 'email', 'E-mail')->set_attribute('type', 'email')->set_attribute('placeholder', 'test@test.com'),

            )),
        Field::make('complex', $prefix . 'main_link', 'Social links (top nav)')
            ->add_fields(array(
                Field::make('text', 'href', 'Link (the system will add the logo by itself)')->set_attribute('type', 'url')
            )),
        Field::make('text', $prefix . 'academy_link', 'academy link (used in header, footer etc)"')->set_attribute('type', 'url'),


    ));

    $metaBox->add_tab('Titles and more', [
        Field::make('text', $prefix . 'archive_project_title', 'Archive projects (work) title'),
        Field::make('text', $prefix . 'archive_project_subtitle', 'Sub: Archive projects (work) subtitle'),
        Field::make('text', $prefix . 'testimonials_title', 'Testimonials title'),

    ]);
    $metaBox->add_tab('Partners', [
        Field::make('complex', $prefix . 'partners_logo', 'Partners (Home page, featured work, and more...')
            ->add_fields(array(
                Field::make('text', 'name', 'Name'),
                Field::make('image', 'logo', 'Logo'),
                Field::make('text', 'href', 'Link *optional')->set_attribute('type', 'url'),
            ))
            ->set_layout('tabbed-vertical')
            ->set_header_template(' <% if (name) { %>  <%- name %> <% } %> '),
    ]);

    $metaBox->add_tab('Lets Talk', [
        Field::make('text', $prefix . 'lets_talk_link', 'Lets Talk Link')->set_attribute('type', 'url'),
        Field::make('textarea', $prefix . 'lets_talk_text', 'Lets Talk text'),
    ]);
    $metaBox->add_tab('Join Us', [
        Field::make('text', $prefix . 'join_us__link', 'Join Us Link')->set_attribute('type', 'url'),
        Field::make('textarea', $prefix . 'joun_us_top_text', 'Join us Top text'),
        Field::make('textarea', $prefix . 'joun_us_bottom_text', 'Join us Bottom text (Join our academy)'),
    ]);
}
