<?php
?>

<div class="block lg:flex justify-around md:pt-[54px]  md:pb-[45px] pt-8 pb-10 px-5 xl:px-0">
    <div class="grid gap-y-6">
        <div class="">
            <a href="<?php echo home_url(); ?>">
                <?php get_template_part('static/svgs/logo'); ?>
                <span class="sr-only"><?= bloginfo(); ?></span>
            </a>
        </div>
        <ul class="flex gap-x-6 md:items-end flex-col md:flex-row gap-y-3 mb-10 md:mb-0">
            <?php
            $header_links = canaan_get_menu_array('primary');
            // print_r($header_links);
            // die;
            foreach ($header_links as $key => $value) {
                echo '<li><a class=" text-base text-superDark hover:text-green-500   py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <div class="grid gap-y-6 md:text-right">
        <div class="grid montserrat text-superDark">
            <div><?= pll__('TLV based'); ?> ❤️</div>
            <div>© <?= date('Y'); ?> Uniqorn. All rights reserved</div>
        </div>

        <div class="row-start-2 lg:row-start-1 flex items-center lg:justify-end gap-x-5">
            <?php get_template_part('header-cmps/navbar-links'); ?>

        </div>
    </div>
</div>