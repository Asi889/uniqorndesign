<?php
$logos = carbon_get_theme_option('misc_partners_logo');

?>


    <?php
    foreach ($logos as $key => $l) {

        //     # code...
        //     echo '<div class="swiper-slide ssswiper">';
        //     echo '<a target="_blank" rel="noopener noreferrer" class=" topBarFontSize-slidepop-top lp_header_middle text-center  block px-2 py-2 navlinks closeNav-js"   href="' . $value['href'] . '" > ';
        echo '<div class="">';
        echo get_img_html($l['image']);
        echo '</div>';
        //     echo '</a>';
        //     echo '</div>';
    }


    ?>

    

