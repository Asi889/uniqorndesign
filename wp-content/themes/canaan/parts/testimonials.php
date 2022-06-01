<?php
$prefix = 'testimonials_';

$testimonials = get_posts_transiet([
    'post_type' => 'testimonials',
    'posts_per_page' => -1,

], 'testimonials_posts');


if (!$testimonials || empty($testimonials)) {
    return;
}


function singleSwipe($testimonial)
{
    $prefix = 'testimonials_';
    $title = get_the_title($testimonial->ID);
    $thumb = get_post_thumbnail_id($testimonial->ID);
    $company_logo = carbon_get_post_meta($testimonial->ID, $prefix . 'company_logo');
    $company = carbon_get_post_meta($testimonial->ID, $prefix . 'company');
    $sub_text = carbon_get_post_meta($testimonial->ID, $prefix . 'sub_text');

    echo '<div class=" px-5 lg:px-[100px] py-8 lg:py-12 bg-white w-fit mx-auto rounded-md border border-[#EEEEEE] montserrat">';
    echo '<div class="flex gap-x-0 lg:gap-x-8 items-center">';
    echo '<div class="h-[100px] w-[100px]">'; 
    echo get_img_html($thumb , true, 'full' ,'object-contain h-full');
    echo '</div>';

    echo '<div class=" grid content-end">'; 
    echo '<h4 class="text-xl lg:text-2xl font-bold text-[#424242]">' . $title . '</h4>';
    echo '<div class="flex gap-x-1">';
    echo '<p class="text-sm text-[#424242]">' . $company  . '</p>';

    echo '</div>'; 
    echo '</div>'; 
    echo '</div>';
    echo '<div class="mt-6 max-w-[620px]">'; 
    echo '<div class="text-base lg:text-2xl  text-superDark overflow-hidden testimonials_text">' .  get_the_content(null, false, $testimonial->ID) . '</div>';

    echo '</div>'; 
    echo '<div class="mt-6">'; 
    echo '<div class="text-base  text-[#424242] max-w-[620px]">' . $sub_text . '</div>';

    echo '</div>'; 
    echo '<div class="testimonials-logo-img h-6 overflow-hidden mt-6">'; 
    echo get_img_html($company_logo, true, 'full' ,'object-contain h-full object-left');
    echo '</div>'; 

    echo '</div>';
}
// $testimonials = $posts;
?>
<section class=" bg-[#F4FFF7]  pb-8 lg:pb-[60px] pt-20">

    <div class="max-w-7xl mx-auto px-4">
        <h3 class="text-4xl lg:text-5xl leading-[58px] text-green-600 montserrat max-w-[842px] font-bold  ">
            <?= carbon_get_theme_option('misc_testimonials_title'); ?>
        </h3>

    </div>

    <div class="swiper testimonials-swiper pt-8 max-w-[820px] mx-auto lg:pt-20 <?= count($testimonials) > 1 ? 'testimonials-swiper-js' : ''; ?>">

        <div class=" gap-x-3 mb-4 justify-end  px-4 2xl:px-0 <?= count($testimonials) > 1 ? 'flex' : 'hidden'; ?>">
            <button class="swiper-button-next-js grid place-content-center bg-white hover:opacity-60 transition-opacity px-6 py-6 rounded-full rotate-180 border border-[#EEEEEE] z-10 w-11 h-11">
                <span class="sr-only"><?= pll__('Next') ;?></span>
                <?= get_svg('arrow-right'); ?>
            </button>
            <button class="swiper-button-prev-js grid place-content-center bg-white hover:opacity-60 transition-opacity px-6 py-6 rounded-full rotate-180 border border-[#EEEEEE] z-10 w-11 h-11">
                <span class="sr-only"><?= pll__('Prev') ;?></span>
                <?= get_svg('arrow-left'); ?>

            </button>
        </div>


        <ul class="swiper-wrapper">

            <?php


            foreach ($testimonials as $key => $testimonial) {

                echo '<li class="swiper-slide">'; //
                singleSwipe($testimonial);
                echo '</li>';
            }

            ?>

            <!-- </div> -->
        </ul>

    </div>

</section>