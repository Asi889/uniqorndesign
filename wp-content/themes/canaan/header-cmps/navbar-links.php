<?php
?>

<div class="flex gap-x-3 -ml-6 items-center  ">
    <?php

    $secondary_links = carbon_get_theme_option('misc_main_link');
    $reversed_links = array_reverse($secondary_links, true);
    foreach ($reversed_links as $key => $logo) {

        echo '<a href="' . $logo['href'] . '" class="text-[#424242] hover:text-black px-2 py-2" target="_blank" rel="noopener noreferrer grid ">';
        if (str_contains($logo['title'], 'facebook')) get_template_part('static/svgs/nav-bar-logos/facebook');
        if (str_contains($logo['title'], 'codepen')) get_template_part('static/svgs/nav-bar-logos/codepen');
        if (str_contains($logo['title'], 'basketball')) get_template_part('static/svgs/nav-bar-logos/dribble');
        if (str_contains($logo['title'], 'mic')) get_template_part('static/svgs/nav-bar-logos/medium');

        echo '</a>';
        if(str_contains($logo['title'], 'academy')){
            echo '<a href="' . $logo['href'] . '" class="text-[#424242] hidden lg:block hover:text-black pr-4 pl-2 py-2" target="_blank" rel="noopener noreferrer grid ">';
            echo get_template_part('static/svgs/nav-bar-logos/academy');
            echo '</a>';
        }
    }

    ?>

</div>