<?php
$contact_page_link = get_page_by_path( '/contact' );

?>

<div class="max-w-7xl mx-auto mt-10">
    <div class="letsTalkGardient mx-5 px-3 relative py-[90px] lg:py-[60px]">
        <div class="absolute -left-[30%] lg:-left-[7%] top-[50%] lg:top-[13%] ">
            <?php get_template_part('static/svgs/single-project-page/ellips27'); ?>
        </div>
        <div class="text-center px-4 lg:px-28">
            <h1 class="text-2xl lg:text-4xl leading-[30px] lg:leading-[48px] font-bold letsTalkTitle ">
                <?php
                $text = carbon_get_theme_option('misc_lets_talk_link');
                echo $text;
                ?>
            </h1>
        </div>
        <div class="grid justify-center mt-10">
            <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-500 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $contact_page_link->guid; ?>">Let's talk</a>
        </div>
        <div class="hidden lg:absolute right-[2%] top-[30%]">
            <?php get_template_part('static/svgs/single-project-page/ellips26'); ?>
        </div>
        <div class="hidden lg:absolute right-[-7%] bottom-[5%] ">
            <?php get_template_part('static/svgs/single-project-page/ellips29'); ?>
        </div>
        <div class="absolute lg:hidden left-[17%] bottom-[3%]">

            <?php get_template_part('static/svgs/archive-project-page/ellips28-mobile'); ?>
        </div>
        <div class="hidden lg:absolute bottom-[15%]">
            <?php get_template_part('static/svgs/single-project-page/ellips28'); ?>
        </div>
    </div>
</div>