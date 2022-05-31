<?php
$logos = carbon_get_theme_option('misc_partners_logo');

if (!$logos || empty($logos)) {
    return;
}
?>

<div class="swiper partners-gallery-swiper-js" >

    <ul class="swiper-wrapper flex items-center  mt-0 lg:mt-20 px-8 py-8 lg:py-20 lg:px-0 justify-center">
        <?php
        foreach ($logos as $key => $l) {
            if (!$l['logo']) {
                continue;
            }
            echo '<li class="swiper-slide max-w-[130px] h-[34px] mr-6">';
            if ($l['href'])   echo '<a target="_blank" rel="noopener noreferrer"  href="' . $l['href'] . '" class="h-full block hover:opacity-75 transition"> ';
            echo get_img_html($l['logo'], true, 'full', 'h-full object-contain object-center');
            if ($l['href'])   echo '</a> ';
            echo '</li>';
        }
        ?>
    </ul>

</div>