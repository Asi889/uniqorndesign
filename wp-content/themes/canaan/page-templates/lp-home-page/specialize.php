<?php
$content = carbon_get_the_post_meta('homespecialize_in');
$tags = get_posts([
    'post_type' => 'datatags',
    'numberposts'      => 4,
    'orderby'        => 'rand',
]);
$what_is = carbon_get_post_meta($tags[0]->ID, 'datatags_what_is');



?>

<div>
    <h1 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] py-[60px] lg:py-20 font-bold">
        We specialize in
    </h1>
    <div class="grid gap-y-0 lg:gap-y-[60px] montserrat ">
        <?php
        foreach ($tags as $key => $c) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($c->ID), 'thumbnail');
            // if($key % 2 == 0){

                // echo '<div class="grid lg:flex  justify-between">';
                echo '<div class="grid lg:flex ' . (($key % 2 == 0) ? " flex-row-reverse " : " " ). '  justify-between">';
    
                echo '<div class="max-w-[580px]">';
                echo '<h4 class="text-8 leading-[39px] lg:text-4xl lg:leading-[48px] text-superDark font-bold">' . $c->post_title . '</h4>';
                echo '<p class="text-2xl  mt-5 lg:mt-4 text-[#424242] ">' . $what_is[0]['text'] . '</p>';
                echo '<a href="" class=" " target="_blank" rel="noopener noreferrer grid ">';
                echo '<p class="text-superDark text-2xl font-semibold mt-5 ">See all projects</p>';
                echo '</a>';
                echo '</div>';
    
                echo '<div class="relative">';
                echo '<div class="absolute -right-[124px] top-6 -z-10">';
                get_template_part('static/svgs/green-blobs/big-blob');
                echo '</div>';
                echo '<div class="absolute -right-[113px] top-[170px] -z-10">';
                get_template_part('static/svgs/green-blobs/small-blob');
                echo '</div>';
                echo '<div class="absolute -left-[110px] top-36 -z-10">';
                get_template_part('static/svgs/green-blobs/medium-blob');
                echo '</div>';
    
                echo '<img class="w-full max-w-[533px] lg:max-w-[272px] h-full" src="' . $image[0] . '" alt="tumb" />';
                echo '</div>';
    
                echo '</div>';
            // }else{
            //     echo '<div class="grid lg:flex  justify-between">';
    
            //     echo '<div class="relative">';
            //     echo '<div class="absolute -right-[124px] top-6 -z-10">';
            //     get_template_part('static/svgs/green-blobs/big-blob');
            //     echo '</div>';
            //     echo '<div class="absolute -right-[113px] top-[170px] -z-10">';
            //     get_template_part('static/svgs/green-blobs/small-blob');
            //     echo '</div>';
            //     echo '<div class="absolute -left-[110px] top-36 -z-10">';
            //     get_template_part('static/svgs/green-blobs/medium-blob');
            //     echo '</div>';
    
            //     echo '<img class="w-full max-w-[533px] lg:max-w-[272px] h-full" src="' . $image[0] . '" alt="tumb" />';
            //     echo '</div>';

            //     echo '<div class="max-w-[580px]">';
            //     echo '<h4 class="text-8 leading-[39px] lg:text-4xl lg:leading-[48px] text-superDark font-bold">' . $c->post_title . '</h4>';
            //     echo '<p class="text-2xl  mt-5 lg:mt-4 text-[#424242] ">' . $what_is[0]['text'] . '</p>';
            //     echo '<a href="" class=" " target="_blank" rel="noopener noreferrer grid ">';
            //     echo '<p class="text-superDark text-2xl font-semibold mt-5 ">See all projects</p>';
            //     echo '</a>';
            //     echo '</div>';
    
            //     echo '</div>';
            // }

        }
        ?>


    </div>
    <a href=""></a>
</div>