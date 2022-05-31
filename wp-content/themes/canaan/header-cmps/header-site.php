<?php
if (!defined('ABSPATH')) {
    die();
}

?>

<div class="hidden lg:flex justify-between h-full items-center px-4 max-w-[1440px] mx-auto">
    <div class="flex items-center">
        <a class="hover:animate-pulse mr-6 xl:mr-[72px]" href="<?php echo home_url(); ?>">
            <?php get_template_part('static/svgs/logo'); ?>
            <span class="sr-only"><?= bloginfo();?></span>
        </a>
        <nav role="navigation">

            <ul class="flex gap-x-4">
                <?php
                $header_links = canaan_get_menu_array('primary');
                foreach ($header_links as $key => $value) {

                    echo '<li><a class="font-semibold text-base mobile-text text-[#424242] hover:text-blue-400 lg:hover:text-green-500  px-4 py-2 montserrat ' . implode(' ', $value['classes']) . '" href="' . $value['url'] . '" >' . $value['title'] . '</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>
    <?php get_template_part('header-cmps/navbar-links'); ?>
</div>