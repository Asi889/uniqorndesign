<?php
defined('ABSPATH') || die();

/**
 * Template Name: Home Page - עמוד הבית 
 * Description: עמוד הבית
 *
 */



global $post;
$prefix = 'home';
$mainObj = new canaan_post($post);





get_header();

?>
<main class="montserrat  overflow-hidden">

    <div class="w-full green-gradient">
        <?php get_template_part('page-templates/lp-home-page/our-studios'); ?>
    </div>
    <!-- <div class="w-full">
        <?php get_template_part('static/svgs/home-page/first-devider'); ?>
    </div> -->

    <div class="max-w-[1420px] mx-auto px-5 lg:px-3  ">
        <?php get_template_part('page-templates/lp-home-page/specialize'); ?>
    </div>

    <div class="w-full bg-purple-100">
        <?php get_template_part('page-templates/lp-home-page/vision'); ?>

    </div>

    <div class="w-full bg-blue-100">
        <?php get_template_part('page-templates/lp-home-page/featured-work'); ?>
        
    </div>
    <div class="w-full bg-[#F4FFF7]  pb-8 lg:pb-[60px] ">
        
        <?php get_template_part('page-templates/archive-project-page/testimonials'); ?>
    </div>
    <div class="w-full bg-Burgundy-100">
        <?php get_template_part('page-templates/lp-home-page/article'); ?>

    </div>

</main>



<?php

get_footer();
