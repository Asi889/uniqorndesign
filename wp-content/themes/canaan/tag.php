<?php
defined('ABSPATH') || die();

global $wp_query;
$term = get_queried_object();

$tag_id = $term->term_id;
$posts = get_posts([
    'post_type' => 'project',
    'tax_query' => [[
        'taxonomy'  => 'post_tag',
        "field"    => "term_id",
        "terms"    => $tag_id
    ]]
]);

$prefix = 'tag_';
// $mainObj = new canaan_post($post);
// $url = $mainObj->get_url();
// $pid = $mainObj->get_ID();

// echo $url;

$contnet = carbon_get_term_meta($tag_id, $prefix . 'content');

get_header();

?>

<main>
    <div>
        <div class="w-full bg-[#FAFAFA]">
            <div class="max-w-">

            </div>

        </div>
    </div>
</main>








<?php

get_footer();
