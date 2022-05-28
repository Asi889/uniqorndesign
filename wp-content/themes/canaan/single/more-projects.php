<?php
$post_type = get_post_type();
$projects = (array) get_posts([
    'post_type' => $post_type,
    'posts_per_page'      => 2,
    'orderby'        => 'rand',
]);
?>

<div class="hidden lg:flex w-full  flex-col gap-y-5 px-4">
    <div class="py-20 ">

        <h2 class="text-blue-400 text-5xl font-bold montserrat "><?= pll__('See more projects'); ?></h2>
    </div>
    <!-- <div class="max-w-[1396px]"> -->
    <div class="flex  justify-center gap-x-3 gap-y-5 mt-5 mb-5 max-w-[1396px]">
        <?php
        foreach ($projects as $key => $p) {
            // 
            // $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');
            $image =get_post_thumbnail_id($p->ID);
            echo '<a class="w-full  h-[340px] hover:drop-shadow-2xl transition" href="'.get_the_permalink($p).'">';
            echo '<div class="w-full  h-[340px] bg-red-50 border border-[#F5F5F5] rounded-2xl overflow-hidden">';
            // echo '<img class="w-full h-full object-contain" src="' . $image[0] . '" alt="tumb" />';
            echo get_img_html($image, true, 'full', 'w-full h-full object-contain');
            echo '</div>';
            echo '</a>';
        }
        ?>

    </div>
    <!-- </div> -->
    <a class="border max-w-xs border-blue-400 mt-8 py-3 px-3 text-blue-400 text-2xl font-semibold montserrat rounded-md self-center hover:bg-slate-100 focus:outline-none focus:ring focus:ring-blue-300 " href="<?php echo get_post_type_archive_link($post_type)  ?> "><?= pll__('All'); ?> <?= $post_type; ?>s</a>
</div>