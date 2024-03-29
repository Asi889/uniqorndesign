<?php

// $academy_link = carbon_get_theme_option('misc_academy_link');
$link = carbon_get_theme_option('misc_join_us__link');
$top_text = carbon_get_theme_option('misc_joun_us_top_text');
$bottom_text = carbon_get_theme_option('misc_joun_us_bottom_text');
?>

<div class="grid py-20 px-5 gap-y-12 bg-[#FAFAFA]">

    <div class="grid justify-center">

    
        <div class="block lg:hidden">
            <?php get_template_part('static/svgs/group63-logo-mobile'); ?>
        </div>

    </div>

    <div class="flex justify-center relative">
            <img loading="lazy" width="88" class="hidden lg:block object-contain  -scale-x-150 max-w-[140px] flex-grow" src="<?php echo get_template_directory_uri() . '/static/images/icecream.png'; ?>" alt="Ice Cream marker">

        <div class="grid text-center">

            <h3 class="montserrat text-2xl lg:text-4xl font-bold text-superDark">
                <?= pll__($top_text); ?>

            </h3>
            <h3 class="montserrat text-2xl lg:text-4xl font-bold text-superDark extra2-light  text-center mx-auto px-6 mt-1 py-2">
                <?= pll__($bottom_text); ?>
            </h3>
            <a class="border max-w-xs border-Burgundy-400 py-4 px-6 text-Burgundy-400 text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center mt-10 hover:bg-Burgundy-200/30 transition active:bg-Burgundy-200 active:border-Burgundy-200 active:text-white" href="<?= $link; ?>" target="_blank">
                <?= pll__('Join us'); ?>
            </a>

        </div>
    </div>
</div>