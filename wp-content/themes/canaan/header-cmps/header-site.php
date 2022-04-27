<?php
if (!defined('ABSPATH')) {
    die();
}
global $post;
$name = $args['name'];
echo $name;
?>

<div class="hidden md:flex justify-around">
    <div class="flex gap-x-6 items-center">
        <?php get_template_part('static/svgs/logo'); ?>

        <div class="flex">
            <?php
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {
                # code...
                echo '<a class="font-semibold text-base text-[#424242]  px-2 py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
        </div>
    </div>
    <div class="flex items-center ">
        <?php
        $secondary_links = carbon_get_theme_option('misc_main_link');
        foreach ($secondary_links as $key => $logo) {
            echo '<a href="' . $logo['href'] . '" class=" " target="_blank" rel="noopener noreferrer grid ">';
            echo get_img_html($logo['image']);
            echo '</a>';
        }
        ?>
    </div>
</div>