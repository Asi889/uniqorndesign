<?php
$values = carbon_get_the_post_meta('page-aboutmeet_team');

if (empty($values)) {
    return;
}
?>

<div class="px-5 lg:px-4 montserrat mt-[60px] lg:mt-20">
    <h1 class="text-4xl lg:text-5xl font-bold text-[#424242] "><?= pll__('Meet the team'); ?></h1>
    <div class="flex flex-wrap justify-center max-w-[1476px]  lg:gap-x-[140px] gap-y-8 lg:gap-y-14 mt-[60px] lg:mt-20">
        <?php
        foreach ($values as $key => $v) {

            echo '<div class="container grid lg:w-[220px] ] text-[#616161] mb-6 lg:mb-6">';
            echo '<div class="w-[180px] h-[180px] mb-9 mx-auto">';
            echo get_img_html($v['image'],true, 'full', 'w-full h-full object-contain mb-16');
            // echo '<svg class="h-[110%]">';
            // echo '    <path opacity="" d="M158.439 99.146c-1.372 12.361-6.403 23.062-15.092 32.104-8.69 9.042-18.465 16.424-29.327 22.147-10.862 5.723-22.296 7.726-34.301 6.009-12.005-1.717-23.268-4.979-33.787-9.786-10.519-4.807-19.494-11.789-26.926-20.945-7.432-9.156-12.748-19.457-15.95-30.903C-.145 86.327-.83 74.538.998 62.406c1.83-12.132 6.975-22.605 15.436-31.418 8.46-8.813 18.122-15.394 28.984-19.743C56.28 6.895 67.77 3.462 79.89.945c12.12-2.519 23.096 0 32.929 7.553 9.833 7.554 18.408 15.795 25.726 24.722 7.317 8.928 12.805 19.057 16.464 30.388 3.659 11.33 4.802 23.177 3.43 35.538Z" fill="url(#img1' . $key . ')" />';
            // echo    '<defs>';
            // echo        '<pattern class="" id="img1' . $key . '" patternContentUnits="objectBoundingBox"  width="100%" height="100%" preserveAspectRatio="xMidYMid slice" viewBox="0 0 1 1">';
            // echo            '<image height="1" width="1"   href="' . wp_get_attachment_image_src($v['image'])[0] . '" alt="" />';
            // echo        '</pattern>';
            // echo    '</defs>';
            // echo '</svg>';
            echo '</div>';
            echo '<h4 class="text-[#616161] text-2xl mb-1">' . $v['name'] . '</h4>';
            echo '<p class="text-[#616161] text-2xl font-bold ">' . $v['text'] . '</p>';
            echo '</div>';
        }
        ?>
        <!-- <div class="w-auto h-auto"> -->

        <!-- <?php get_template_part('static/svgs/profile-blob'); ?> -->
        <!-- </div> -->
    </div>


</div>