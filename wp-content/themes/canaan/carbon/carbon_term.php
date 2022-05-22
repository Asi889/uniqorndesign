<?php
defined('ABSPATH') || die();

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_term_options');
function crb_attach_term_options()
{
    $taxonomy = 'writer';
    $prefix = 'writer_';
    $metaBox = Container::make('term_meta', 'General')->where('term_taxonomy', '=', $taxonomy);
    $metaBox->add_fields(array(
        Field::make( 'image', $prefix.'image', 'Profile photo , in preview for posts by writer' ),
    ));

    // tags
    $taxonomy = 'post_tag';
    $prefix = 'tag_';
    $metaBox = Container::make('term_meta', 'General')->where('term_taxonomy', '=', $taxonomy);
    $metaBox->add_fields(array(
        Field::make( 'rich_text', $prefix.'content', 'Content' ),
    ));

    // category
    $taxonomy = 'category';
    $prefix = 'category_';
    $metaBox = Container::make('term_meta', 'General')->where('term_taxonomy', '=', $taxonomy);
    $metaBox->add_fields(array(
        // Field::make( 'textarea', $prefix.'excerpt', 'Excerpt -  for homepage' ),
        Field::make( 'image', $prefix.'hp-image', 'HomePage Image - (with blubs)' ),
    ));
}
