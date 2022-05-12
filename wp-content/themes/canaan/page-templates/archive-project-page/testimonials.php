<?php
$prefix = 'testimonials_';
global $posts;
// $testimonials = $posts;
?>

<div>
    <h1 class="text-4xl lg:text-5xl text-green-600 montserrat max-w-[842px]">
        The awesome people we work with say about us
    </h1>

</div>

<div class="swiper mySwiper ">
    <div class="swiper-wrapper max-w-[700px] ">
        <!-- <div class="max-w-[700px]"> -->



            <?php
            $testimonials = get_posts([
                'post_type' => 'testimonials',
                
            ]);
            
            foreach ($testimonials as $key => $t_meta) {
                $testimonial = carbon_get_post_meta($t_meta->ID, 'testimonials_testimonial');
                // $img = get_term_meta($testimonial[0]['logo']);
                // die;
                
                echo '<div class="swiper-slide max-h-[437px]  px-6 lg:px-[100px] pt-6 lg:pt-28 pb-6 lg:pb-12  montserrat">'; //
                echo '<div class=" px-6 lg:px-[100px] py-6 lg:py-12 bg-[#EEEEEE]">';
                echo '<div class="flex gap-x-0 lg:gap-x-8">';
                echo '<div class="testimonials-portrait-img">'; //
                echo get_img_html($testimonial[0]['image']);
                echo '</div>'; //

                echo '<div class=" grid content-end">'; //
                echo '<h4 class="text-xl lg:text-2xl text-bold text-[#424242]">' . $testimonial[0]['name'] . '</h4>';
                echo '<div class="flex gap-x-1">'; //
                echo '<p class="text-sm lg:text-base  text-[#424242]">' . $testimonial[0]['job_title'] . ', ' . '</p>';
                echo '<p class="text-sm lg:text-base  text-[#424242]">' . $testimonial[0]['company'] . '</p>';

                echo '</div>'; //
                echo '</div>'; //
                echo '</div>';
                echo '<div class="pt-6 max-w-[620px]">'; //
                echo '<p class="text-base lg:text-2xl  text-[#212121]">' . $testimonial[0]['text'] . '</p>';

                echo '</div>'; //
                echo '<div class="pt-6">'; //
                echo '<p class="text-base  text-[#424242] max-w-[620px]">' . $testimonial[0]['sub_text'] . '</p>';

                echo '</div>'; //
                echo '<div class="testimonials-logo-img">'; //
                echo get_img_html($testimonial[0]['logo']);
                echo '</div>'; //

                echo '</div>'; //
                echo '</div>';
            }

            ?>

        <!-- </div> -->
    </div>
    <div class="bg-[#EEEEEE] px-10 py-10 absolute top-[23px] right-[250px] rounded-full rotate-180 border-[#d8d4d4] border-[1px]">

        <div id="js-next1" class="swiper-button-next"></div>
    </div>
    <div class="bg-[#EEEEEE] px-10 py-10 absolute top-[23px] right-[157px] rounded-full rotate-180 border-[1px] border-[#d8d4d4] ">

        <div id="js-prev1" class="swiper-button-prev"></div>
    </div>
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>