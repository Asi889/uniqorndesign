<?php
?>

<div class="hidden lg:flex w-full  flex-col gap-y-5 px-4">
    <h2 class="text-blue-400 text-5xl font-bold montserrat mb-28">See more projects</h2>
    <div class="flex gap-x-[44px] w-full mt-5 mb-5">

        <?php
        $projects = get_posts([
            'post_type' => 'project',
            'numberposts'      => 2,
            'orderby'        => 'rand',
        ]);

        foreach ($projects as $key => $p) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');
            if ($key === 0) {
                echo '<div class=" w-full h-full px-4 pt-10 bg-[#FFF7FA] grid justify-center rounded-md"> ';
            } else {
                echo '<div class="w-full h-full  px-4 pt-10 bg-[#F9F2FF] grid justify-center rounded-md"> ';
            }
            echo '<img class="w-full min-h-[340px]" src="' . $image[0] . '" alt="tumb" />';
            echo '</div>';
        }
        ?>

    </div>
    <a class="border max-w-xs border-blue-400 mt-8 py-3 px-3 text-blue-400 text-2xl font-semibold montserrat rounded-md self-center"href="">Back to all projects</a>
</div>