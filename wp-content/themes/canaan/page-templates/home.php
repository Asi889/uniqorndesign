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

    <div class="w-full  green-gradient relative overflow-hidden">
        <?php get_template_part('page-templates/lp-home-page/our-studios'); ?>


        <div class="hidden lg:absolute -top-28 right-[120px]">
            <?php get_template_part('static/svgs/home-page/blob29'); ?>
        </div>
        <div class="absolute top-[40%] right-32 ">
            <?php get_template_part('static/svgs/home-page/blob26'); ?>
        </div>
        <div class="absolute top-[45%] right-0 ">
            <?php get_template_part('static/svgs/home-page/blue-blob29'); ?>
        </div>
        <div class="hidden lg:absolute bottom-[32%] left-0 ">
            <?php get_template_part('static/svgs/home-page/green-blob27'); ?>
        </div>
        <div class="hidden lg:absolute bottom-[28%] left-28 ">
            <?php get_template_part('static/svgs/home-page/green-blob28'); ?>
        </div>

    </div>
    <div class="hidden lg:absolute w-full">
        <?php get_template_part('static/svgs/home-page/first-devider'); ?>
    </div>
    <div class="absolute lg:hidden w-full">
        <?php get_template_part('static/svgs/home-page/first-devider-mobile'); ?>
    </div>

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
