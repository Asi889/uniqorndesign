<?php
$post_type = get_post_type();
$projects = (array) get_posts([
    'post_type' => $post_type,
    'posts_per_page'      => 2,
    'orderby'        => 'rand',
]);
?>

<div class="hidden lg:flex w-full  flex-col gap-y-5 px-4">
    <h2 class="text-blue-400 text-5xl font-bold montserrat mb-28"><?= pll__('See more projects'); ?></h2>
    <!-- <div class="max-w-[1396px]"> -->
    <div class="flex  justify-center gap-x-3 gap-y-5 mt-5 mb-5 max-w-[1396px]">
        <?php
        foreach ($projects as $key => $p) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');
            echo '<div class="w-full  h-[340px] bg-red-50 border border-[#F5F5F5] rounded-2xl overflow-hidden">';
            echo get_img_html($image, true, 'full', 'w-full h-full object-cover');
            echo '</div>';
        }
        ?>

    </div>
    <!-- </div> -->
    <a class="border max-w-xs border-blue-400 mt-8 py-3 px-3 text-blue-400 text-2xl font-semibold montserrat rounded-md self-center" href=""><?= pll__('All'); ?> <?= $post_type;?>s</a>
</div>