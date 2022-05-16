<?php
$projects = get_posts([
    'post_type' => 'project',
    'numberposts'      => 4,
    'orderby'        => 'rand',
]);
?>

<div class="bg-[#FFF6FA] pb-[60px]">

    <h1 class="text-4xl lg:text-[68px]  font-bold text-Burgundy-400 montserrat py-20 pl-4 lg:pl-64 ">
        Articles
    </h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-4 lg:gap-y-11  px-4 max-w-[1204px] mx-auto">
        <?php

        function str_limit($value, $limit = 200, $end = '...')
        {
            $limit = $limit - mb_strlen($end); // Take into account $end string into the limit
            $valuelen = mb_strlen($value);
            return $limit < $valuelen ? mb_substr($value, 0, mb_strrpos($value, ' ', $limit - $valuelen)) . $end : $value;
        }



        foreach ($projects as $key => $p) {

            $texons = get_the_terms($p->ID, 'writer');
            // print_r($texons);
            // die;
            // $img = get_term_meta($texons[0]->term_id);
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');

            echo '<div class="w-full  grid  justify-center px-6 lg:px-8 py-8 bg-[#FFFFFF]   rounded-lg hover:drop-shadow-2xl"> ';
            echo '<h2 class="font-bold text-xl lg:text-2xl text-[#424242] pb-2 montserrat">' . $p->post_title . '</h2>';
            echo '<div class="flex gap-x-4 pt-2 pb-3">';
            echo '<h4 class="text-Burgundy-400 grid content-center bg-[#FFF6FA] text-sm px-[10px] py-[2px] rounded-full montserrat">';
            echo 'Design';
            echo '</h4>';
            echo '<h4 class="text-[#9E9E9E]  text-sm  ">';
            if (countMinutesToRead($p->post_content) === "less") {
                echo 'less then 1 min read';
            } else {
                echo countMinutesToRead($p->post_content);
                echo ' min read';
            }
            echo '</h4>';
            echo '</div>';
            echo '<div class="text-base montserrat text-[#616161]">';
            echo str_limit($p->post_excerpt);
            echo '</div>';
            echo '<div class="flex gap-x-4 pt-4 items-center">';
            // echo get_img_html($img['_writer_image'][0]);
            echo '<p class="text-base text-[#616161] montserrat ">';
            echo $texons[0]->name;
            echo '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
    <div class="text-center mt-10">
        <a class="max-w-[111px]  py-4 px-4 bg-Burgundy-400 text-[#FFF6FA] text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center " href="">See more</a>
    </div>
</div>