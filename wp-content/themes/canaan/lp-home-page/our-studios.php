<?php
$contact_page_link = get_page_by_path('/contact');
?>
<header class="w-full green-gradient relative lg:h-[calc(100vh-80px)]">

    <div class="max-w-[1420px] mx-auto px-5 lg:px-0 h-full flex flex-col justify-between">
        <h1 class="pt-9 lg:pt-20">
            <div class="text-4xl lg:text-5xl leading-[48px] lg:leading-[58px] font-bold montserrat text-green-600 "><?= pll__('Our studio is all about'); ?></div>
            <div class="text-4xl lg:text-5xl leading-[48px] lg:leading-[58px] font-bold montserrat liner-text"><?= pll__('products that people love'); ?></div>
        </h1>
        <div class="pt-10 lg:pt-0">
            <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-green-500 hover:bg-green-600 focus:bg-green-500 focus:shadow-2xl transition duration-300 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo get_page_link($contact_page_link); ?>"><?= pll__("Let's talk"); ?></a>
        </div>

        <div class="pt-16 lg:pt-0">

            <?php

            echo '<h2 class="text-[32px] lg:text-4xl leading-[39px] lg:leading-[48px] px-4 text-center lg:text-left  lg:max-w-[1062px] font-bold montserrat liner-blue-green-text ">';
            echo carbon_get_post_meta(get_the_ID(), 'hometop_subtitle');
            echo '</h2>';
            ?>
            <?php get_template_part('parts/partners-gallery'); ?>


        </div>



    </div>
</header>