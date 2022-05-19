<?php
?>

<ul class="flex gap-x-3 -ml-6 items-center  justify-center">
    <?php

    $secondary_links = carbon_get_theme_option('misc_main_link');
    $academy_link = carbon_get_theme_option('misc_academy_link');
    $reversed_links = array_reverse($secondary_links, true);
    if($academy_link){
        echo '<li class="mr-1"><a href="' . $academy_link . '" class="text-[#424242] mobile-text hover:text-green-500 hidden lg:block " target="_blank" rel="noopener noreferrer grid ">';
        echo get_template_part('static/svgs/nav-bar-logos/academy');
        echo '<span class="sr-only">uniqorn academy</span>';
        echo '</a></li>';
    }
    foreach ($reversed_links as $key => $logo) {
        
        echo '<li><a href="' . $logo['href'] . '" class="text-[#424242] mobile-text  hover:text-green-500 w-8 h-8 grid place-items-center transition" target="_blank" rel="noopener noreferrer grid ">';
        if (str_contains($logo['href'], 'facebook')) {
            echo '<span class="sr-only">Facebook</span>';
            get_template_part('static/svgs/nav-bar-logos/facebook');
        }elseif (str_contains($logo['href'], 'codepen')){
            echo '<span class="sr-only">codepen</span>';
            get_template_part('static/svgs/nav-bar-logos/codepen');
        } elseif (str_contains($logo['href'], 'dribbble')) {
            echo '<span class="sr-only">dribbble</span>';
            get_template_part('static/svgs/nav-bar-logos/dribble');
        }elseif (str_contains($logo['href'], 'medium')) {
            echo '<span class="sr-only">medium</span>';
            get_template_part('static/svgs/nav-bar-logos/medium');
        }elseif (str_contains($logo['href'], 'linkedin')) {
            echo '<span class="sr-only">linkedin</span>';
            echo get_svg('linkedin');
        } else{
            echo '<span class="sr-only">link</span>';
            echo get_svg('link');
        }

        echo '</a></li>';
    }
    
  

    ?>

</ul>