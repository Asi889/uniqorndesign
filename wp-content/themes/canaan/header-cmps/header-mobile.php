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

        <button class="flex   items-center justify-center w-[30px] h-[20px]  hamburger p2 box-border hamburger-js">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <button class=" items-center justify-center w-[30px] h-[20px]  hamburger1 p2 box-border ">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="w-full h-[calc(100vh-52px)]  portfolioDisc mx-auto  bg-white overflow-hidden">
        <div class="grid justify-self-center gap-y-3">
            <?php
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {

                echo '<a class=" mobile-text font-semibold text-2xl text-[#424242] hover:text-blue-400 lg:hover:text-green-500  px-6 py-3 montserrat ' . implode(' ', $value['classes']) . '" href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
            <div class="w-full mx-auto ">

                <a class="grid justify-center pr-[15px] mobile-text text-[#424242] hover:text-blue-400" href="<?php echo home_url(); ?>">

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