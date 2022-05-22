<?php
defined('ABSPATH') || die();

/**
 * Template Name: Home Page 
 *
 */



global $post;
$prefix = 'home';
$mainObj = new canaan_post($post);





get_header();

?>
<main class="">

    <?php get_template_part('lp-home-page/our-studios'); ?>


    <div class="max-w-[1420px] mx-auto px-5 lg:px-3  ">
        <?php get_template_part('lp-home-page/specialize'); ?>
    </div>

    <div class="w-full bg-purple-100">
        <?php get_template_part('lp-home-page/vision'); ?>
    </div>

    <div class="w-full bg-blue-100">
        <?php get_template_part('lp-home-page/featured-work'); ?>
    </div>

    <div class="w-full bg-[#F4FFF7]  pb-8 lg:pb-[60px] ">
        <?php get_template_part('parts/testimonials'); ?>
    </div>
    
    <div class="w-full bg-Burgundy-100">
        <?php get_template_part('lp-home-page/article'); ?>

    </div>

</main>



<?php

get_footer();
