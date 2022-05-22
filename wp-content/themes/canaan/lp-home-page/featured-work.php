<?php
$projects = get_posts([
    'post_type' => 'project',
    'numberposts'      => 4,
    'orderby'        => 'menu_order',
]);

if (!$projects || empty($projects)) {
    return;
}

$project_archive_link = get_post_type_archive_link('project');
?>

<div class="max-w-[1420px] mx-auto px-5 lg:px-0">
    <header class="py-[60px] lg:py20 px-5 lg:px-0">
        <h2 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] font-bold md:text-blue-400 text-center md:text-left">
            <?= pll__('Featured work'); ?>
        </h2>
    </header>
    <ul class="grid lg:flex flex-wrap justify-between gap-y-5 lg:gap-y-10 gap-x-10 py-[60px] lg:py-8">
        <?php
        foreach ($projects as $key => $p) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');
            echo '<li class="grid max-w-[335px] lg:max-w-[690px] px-0 py-0 lg:px-6 lg:py-6 h-[800px] bg-gray-50 w-full">';
            // echo '<img class="w-full h-full" src="' . $image[0] . '" alt="tumb" />';
            echo get_img_html($image);
            echo '</li>';
        }
        ?>

    </ul>
    <div class="text-center pt-10 pb-8 lg:pb-[60px]">
        <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-400 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $project_archive_link; ?>">
            <?= pll__('I want to see more'); ?>
        </a>
    </div>


</div>