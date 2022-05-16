<?php
$contact_page_link = get_page_by_path( '/contact' );

?>
<!-- //mt-10 4px -->
<div class="montserrat">
    <div class="letsTalkGardient-archive relative py-[90px] lg:py-[60px] overflow-hidden">
        <div class="absolute -left-[30%] lg:-left-[7%] top-[50%] lg:top-[13%] ">
            <?php get_template_part('static/svgs/archive-project-page/ellips27'); ?>
        </div>
        <div class="text-center  px-5 lg:px-0 montserrat">
            <h1 class="text-2xl max-w-[1062px] mx-auto lg:text-4xl leading-[30px] lg:leading-[48px] font-bold letsTalkTitle ">
                <?php
                $text = carbon_get_theme_option('misc_lets_talk_link');
                echo $text;
                ?>
                
            </h1>
        </div>
        <div class="grid justify-center mt-10">
            <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-500 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $contact_page_link->guid; ?>">Let's talk</a>
        </div>
        <div class="hidden lg:block absolute right-[2%] top-[30%]">
            <?php get_template_part('static/svgs/single-project-page/ellips26'); ?>
        </div>
        <div class="hidden lg:block absolute right-[-7%] bottom-[5%] ">
            <?php get_template_part('static/svgs/single-project-page/ellips29'); ?>
        </div>
        <div class="absolute block lg:hidden left-[17%] bottom-[3%]">

            <?php get_template_part('static/svgs/archive-project-page/ellips28-mobile'); ?>
        </div>
        <div class="hidden lg:block absolute bottom-[15px] archive-ellips28">
            <?php get_template_part('static/svgs/archive-project-page/ellips28'); ?>
        </div>
    </div>
</div>