<?php
?>

<div class="hidden md:flex justify-around mt-14 py-5">
    <div class="grid gap-y-6">
        <div class="pt-6">
            <a href="<?php echo home_url(); ?>">

                <?php get_template_part('static/svgs/logo'); ?>
            </a>
        </div>
        <div class="flex gap-x-6 items-end">
            <?php
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {
                echo '<a class="font-semibold text-base text-[#212121] hover:text-green-500   py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
        </div>
    </div>

    <div class="grid gap-y-6 text-right">
        <div class="flex items-center justify-between gap-x-5">
            <?php get_template_part('header-cmps/navbar-links'); ?>

        </div>
        <div class="grid montserrat text-[#212121] pb-3">
            <h4>TLV based ❤️</h4>
            <h4>© 2022 Uniqorn. All rights reserved</h4>
        </div>
    </div>
</div>