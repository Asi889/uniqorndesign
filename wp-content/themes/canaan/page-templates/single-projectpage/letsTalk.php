<?php
?>

<div class="w-full  mt-10">
    <div class="letsTalkGardient mx-10 relative pt-16 pb-16">
        <div class="absolute -left-[7%] top-[13%] ">
            <!-- <div class="absolute -left-[10%] top-[13%] rotate-[326deg]"> -->
            <?php get_template_part('static/svgs/single-project-page/ellips27'); ?>
        </div>
        <div class="text-center px-28">
            <h1 class="text-4xl leading-[48px] font-bold letsTalkTitle ">
                <?php
                $text = carbon_get_the_post_meta('project_bottom_link');
                echo $text;
                ?>
            </h1>
        </div>
        <div class="grid justify-center mt-10">
            <a class="rounded-md text-white font-semibold text-2xl montserrat bg-purple-500 px-6 py-3 " href="">Let's talk</a>
        </div>
        <div class="absolute right-[2%] top-[30%]">
            <?php get_template_part('static/svgs/single-project-page/ellips26'); ?>
        </div>
        <div class="absolute right-[-7%] bottom-[5%] ">
            <?php get_template_part('static/svgs/single-project-page/ellips29'); ?>
        </div>
        <div class="absolute bottom-[15%]">
            <?php get_template_part('static/svgs/single-project-page/ellips28'); ?>
        </div>
    </div>
</div>