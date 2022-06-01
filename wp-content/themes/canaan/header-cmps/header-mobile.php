<?php
if (!defined('ABSPATH')) {
    die();
}
?>
<div class="border-b-2 border-[#E0E0E0] block lg:hidden anim ">
    <div class="flex justify-between    px-4 py-[22px]">

        <a class="logo-white" href="<?php echo home_url(); ?>">

            <?php get_template_part('static/svgs/logo-mobile'); ?>
        </a>

        <button class="flex items-center justify-center w-[30px] h-[20px]  hamburger p2 box-border hamburger-js">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.625" y="9.0625" width="18.75" height="1.875" fill="#424242" />
                <rect x="0.625" y="4.0625" width="18.75" height="1.875" fill="#424242" />
                <rect x="0.625" y="14.0625" width="18.75" height="1.875" fill="#424242" />
            </svg>

        </button>
        <!-- CLOSE HAMBUERR  -->
        <button class="items-center justify-center  h-[20px]  hamburger1 p2 box-border ">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1308 8.82751L4.36016 3L3 4.37357L8.77061 10.2011L3.39825 15.6264L4.75841 17L10.1308 11.5747L15.2415 16.7357L16.6016 15.3622L11.4909 10.2011L16.9999 4.63783L15.6397 3.26426L10.1308 8.82751Z" fill="#212121" />
            </svg>

        </button>
    </div>
    <div class="w-full h-[calc(100vh-52px)]  portfolioDisc mx-auto  bg-white overflow-hidden">
        <div class="grid justify-self-center gap-y-3">
            <?php
            $academy_link = carbon_get_theme_option('misc_academy_link');
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {

                echo '<a class=" mobile-text font-semibold text-2xl text-[#424242] hover:text-blue-400 lg:hover:text-green-500  px-6 py-3 montserrat ' . implode(' ', $value['classes']) . '" href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
            <div class="w-full mx-auto ">

                <a class="grid justify-center pr-[15px] mobile-text text-[#424242] hover:text-blue-400" href="<?php echo $academy_link; ?>">

                    <?php get_template_part('static/svgs/nav-bar-logos/academy-mobile'); ?>
                </a>
            </div>
        </div>
        <div class="mt-8 relative">

            <?php get_template_part('header-cmps/navbar-links'); ?>

            <div class="">
                <img class="mx-auto" src="<?php echo get_template_directory_uri() . '/static/images/header-blob.png'; ?>" alt="">
            </div>

        </div>
    </div>

</div>