<?php
$projects = get_posts([
    'post_type' => 'project',
    'numberposts'      => 4,
    'orderby'        => 'rand',
]);
?>

<div class="max-w-[1420px] mx-auto px-5 lg:px-0">
    <div class="py-[60px] lg:py20 px-5 lg:px-0">
        <h1 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] font-bold text-blue-400">
            Featured work
        </h1>
    </div>
    <div class="grid lg:flex flex-wrap justify-between gap-y-5 lg:gap-y-10 gap-x-10 py-[60px] lg:py-8">
        <?php
        foreach ($projects as $key => $p) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');
            echo '<div class="grid max-w-[335px] lg:max-w-[690px] px-0 py-0 lg:px-6 lg:py-6">';
            echo '<img class="w-full h-full" src="' . $image[0] . '" alt="tumb" />';
            // echo get_img_html($p['image']);
            echo '</div>';
         }
        ?>

    </div>
    <div class="text-center pt-10 pb-8 lg:pb-[60px]">
    <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-400 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $contact_page_link->guid; ?>">I want to see more</a>
    </div>
    

</div>