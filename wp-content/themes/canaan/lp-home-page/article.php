<?php
$projects = get_posts([
    'post_type' => 'project',
    'posts_per_page'      => 2,
    'orderby'        => 'menu_order',
]);
?>

<section class="bg-[#FFF6FA] pb-[60px]">

    <h2 class="text-4xl lg:text-[68px]  font-bold text-Burgundy-400 montserrat py-20 pl-4 lg:pl-64 ">
        <?= pll__('Articles') ;?>
    </h2>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-4 lg:gap-y-11  px-4 max-w-[1204px] mx-auto">
        <?php


        foreach ($projects as $key => $p) {

            echo article_prev_cmp($p);
        }
        ?>
    </div>
    <div class="text-center mt-10">
        <a class="max-w-[111px]  py-4 px-4 bg-Burgundy-400 hover:bg-Burgundy-500 focus:bg-Burgundy-400 focus:shadow-2xl transition duration-300 text-[#FFF6FA] text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center " href="">See more</a>
    </div>
</section>