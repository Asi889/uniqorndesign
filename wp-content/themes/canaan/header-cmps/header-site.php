<?php
if (!defined('ABSPATH')) {
    die();
}
global $post;

$prefix = 'project_';
$mainObj = new canaan_post($post);
$url = $mainObj->get_url();
$pid = $mainObj->get_ID();

?>

<div class="hidden md:flex justify-around">
    <div class="flex gap-x-6 items-center">
        <?php get_template_part('static/svgs/logo'); ?>

        <div class="flex">
            <?php
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {

                echo '<a class="font-semibold text-base text-[#424242] hover:text-green-500  px-4 py-2 montserrat ' . implode(' ', $value['classes']) . '" href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
        </div>
    </div>
        <?php get_template_part('header-cmps/navbar-links'); ?>
</div>