<?php
if (!defined('ABSPATH')) {
    die();
}

get_header();
$product_hover_img = carbon_get_post_meta(get_the_ID(), 'hometop_subtitle');
// print_r($product_hover_img);
?>

<!-- <div class="max-w-[1420px] mx-auto">
    <?php get_template_part('page-templates/lp-home-page/our-studios'); ?>
</div> -->

<?php

get_footer();
