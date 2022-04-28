<?php
?>

<div class="hidden md:flex justify-around mt-14 py-5">
    <div class="grid gap-y-6">
        <div>
            <?php get_template_part('static/svgs/logo'); ?>
        </div>
        <div class="flex">
            <?php
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {
                echo '<a class="font-semibold text-base text-[#424242] hover:text-green-500  px-2 py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
        </div>
    </div>

    <div class="grid gap-y-6 text-right">
        <div class="flex items-center justify-between">
            <?php
            $secondary_links = carbon_get_theme_option('misc_main_link');
            $reversed_links = array_reverse($secondary_links, true);
            foreach ($reversed_links as $key => $logo) {
                echo '<a href="' . $logo['href'] . '" class=" " target="_blank" rel="noopener noreferrer grid ">';
                echo get_img_html($logo['image']);
                echo '</a>';
            }
            ?>
        </div>
        <div class="grid">
            <h4>TLV based ❤️</h4>
            <h4>© 2022 Uniqorn. All rights reserved</h4>
        </div>
    </div>
</div>