<?php
$projects = get_posts([
    'post_type' => 'project',
    'posts_per_page'      => 4,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
]);
if (!$projects || empty($projects)) {
    return;
}

$project_archive_link = get_post_type_archive_link('project');
?>

<section class="max-w-[1420px] mx-auto px-5 2xl:px-0">
    <header class="py-[60px] lg:py20">
        <h2 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] font-bold md:text-blue-400 text-center montserrat  lg:text-left">
            <?= pll__('Featured work'); ?>
        </h2>
    </header>
    <ul class="grid md:grid-cols-2 gap-y-5 lg:gap-y-10 gap-x-0 lg:gap-x-10 py-[60px] lg:py-8">
        <?php
        foreach ($projects as $key => $p) {
            $image = get_post_thumbnail_id($p->ID);
            echo '<li class="lg:max-w-[690px]  h-[434px] lg:h-[800px]  w-full mx-auto hover:shadow rounded-2xl border border-[#F5F5F5] transition duration-300 overflow-hidden">';
            echo '<a class="block w-full h-full" href="'.get_the_permalink($p).'" title="'.$p->post_title.'">';
            echo get_img_html($image, true, 'full', 'w-full h-full object-cover');
            echo '<span class="sr-only">'.$p->post_title.'</span>';
            echo '</a>';
            echo '</li>';
        }
        ?>

    </ul>
    <div class="text-center pt-10 pb-8 lg:pb-[60px]">
        <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-blue-400 hover:bg-blue-500 focus:bg-blue-400 focus:shadow-2xl transition ease-in-out duration-300 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $project_archive_link; ?>">
            <?= pll__('I want to see more'); ?>
        </a>
    </div>


</section>