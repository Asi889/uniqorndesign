<?php
defined('ABSPATH') || die();
$values = carbon_get_the_post_meta('page-aboutour_values');

if (empty($values)) {
    return;
}
?>

<div class="px-5 lg:px-4 montserrat text-[#424242] pt-[60px] lg:pt-1">

    <h2 class="text-4xl lg:text-5xl font-bold "><?= pll__('Our Values'); ?></h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 pt-[52px] pb-8  lg:pt-[61px] lg:pb-[50px] gap-x-5 gap-y-4 lg:gap-y-10 ">
        <?php
        foreach ($values as $key => $v) {

            echo '<div class="container px-[2px] lg:px-12 py-[2px] lg:py-12 max-w-[700px]  ">';
            echo '<div class="w-16 h-16">';
            echo get_img_html($v['image']);
            echo '</div>';
            echo '<h4 class="text-2xl lg:text-4xl font-bold  pt-4 lg:pt-6">' . $v['title'] . '</h4>';
            echo '<p class="text-base lg:text-2xl font pt-3">' . wpautop($v['text']) . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</div>