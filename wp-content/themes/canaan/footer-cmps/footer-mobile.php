<?php
?>

<div class="grid gap-y-3 lg:hidden pl-5 pt-8 ">
    <div class="pb-6">

        <?php
        get_template_part('static/svgs/logo');
        get_template_part('static/svgs/logo-mobile');
        ?>
    </div>
    <?php
    $header_links = canaan_get_menu_array('primary');
    foreach ($header_links as $key => $value) {

        echo '<a class=" text-base text-[#424242] hover:text-green-500  montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
    }
    ?>

    <div class="grid gap-y-2 montserrat text-[#212121] pt-4">
        <h4>TLV based ❤️</h4>
        <h4>© 2022 Uniqorn. All rights reserved</h4>

        <div class="flex items-center justify-between ">
            <?php get_template_part('header-cmps/navbar-links'); ?>

        </div>

    </div>

</div>