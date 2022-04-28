<?php
if (!defined('ABSPATH')) {
    die();
}
global $post;
// $name = $args['name'];
// echo $name;


$prefix = 'project_';
$mainObj = new canaan_post($post);
$url = $mainObj->get_url();
$pid = $mainObj->get_ID();

// echo $url;
echo "this is the url:" . $url;
?>

<div class="hidden md:flex justify-around">
    <div class="flex gap-x-6 items-center">
        <?php get_template_part('static/svgs/logo'); ?>

        <div class="flex">
            <?php
            $header_links = canaan_get_menu_array('primary');
            foreach ($header_links as $key => $value) {

                
                echo '<a class="font-semibold text-base text-[#424242] hover:text-green-500  px-2 py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
                // echo '<a class="' .  str_contains($url, "project") && $value['title'] === "work" || str_contains($url, $value['title']) ? "link-active" :  "hh" . 'font-semibold text-base text-[#424242] hover:text-green-500  px-2 py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
            }
            ?>
        </div>
    </div>
    <div class="flex gap-x-4 items-center ">
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
</div>