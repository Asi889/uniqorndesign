<?php
$prefix = 'testimonials_';
global $posts;
// $testimonials = $posts;
?>

<div>
    <h1 class="text-4xl lg:text-5xl text-green-600 montserrat  font-bold px-5 lg:px-[250px] py-[60px] lg:py-20">
        The awesome people we work  <br class="hidden lg:block"> with say about us
    </h1>
   

</div>

<div class="swiper mySwiper pt-8 lg:pt-20">
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
                
                echo '<div class="swiper-slide   px-5 lg:px-[100px] pt-6 lg:pt-28 pb-20 lg:pb-12  montserrat">'; //
                echo '<div class=" px-6 lg:px-[100px] py-6 lg:py-12 bg-[#EEEEEE] w-fit mx-auto rounded-md">';
                echo '<div class="flex gap-x-0 lg:gap-x-8">';
                echo '<div class="testimonials-portrait-img">'; //
                echo get_img_html($testimonial[0]['image']);
                echo '</div>'; //

                echo '<div class=" grid content-end">'; //
                echo '<h4 class="text-xl lg:text-2xl font-bold text-[#424242]">' . $testimonial[0]['name'] . '</h4>';
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
    <div class="bg-[#EEEEEE] px-6 py-6 absolute top-[90%] lg:top-[18%] right-[22%] lg:right-[32%] rounded-full rotate-180 border-[#d8d4d4] border-[1px] z-10">

        <div id="js-next1" class="swiper-button-next"></div>
    </div>
    <div class="bg-[#EEEEEE] px-6 py-6 absolute top-[90%]  lg:top-[18%] right-[7%] lg:right-[29%] rounded-full rotate-180 border-[1px] border-[#d8d4d4] z-10">

        <div id="js-prev1" class="swiper-button-prev "></div>
    </div>
</div>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>