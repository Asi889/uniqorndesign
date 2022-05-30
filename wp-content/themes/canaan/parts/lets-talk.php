<?php
global $posts;
$contact_page_link = get_permalink('134');
$link = carbon_get_theme_option('misc_lets_talk_link');
$text = carbon_get_theme_option('misc_lets_talk_text');
// if(!$link){
//     return;
// }

?>
<!-- //mt-10 4px -->



<!-- mx-auto max-w-[355px] lg:max-w-full -->

<div class="max-w-[1420px] px-[18px] relative mx-auto my-14  montserrat">
    <img class="hidden lg:block top-[56px] right-[50px] absolute w-full" src="<?php echo get_template_directory_uri() . '/static/images/lets-talk-blob.png'; ?>" alt="">
    <img class="block lg:hidden absolute left-0 z-10" src="<?php echo get_template_directory_uri() . '/static/images/archive-project-mobile-blob.png'; ?>" alt="">

    <div class="letsTalkGardient relative py-[90px] lg:py-[60px] max-w-[1280px]">
        <div class="text-center px-4 lg:px-28">
            <div class="text-2xl lg:text-4xl leading-[30px] lg:leading-[48px] font-bold letsTalkTitle ">
                <?php
                echo wpautop($text);
                ?>
            </div>
        </div>
        <div class="grid justify-center mt-10">
            <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-500 px-4 lg:px-6 py-2 lg:py-3 hover:bg-purple-600 active:bg-purple-500" href="<?php echo $contact_page_link; ?>"><?= pll__("Let's talk") ;?></a>
        </div>
    </div>
</div>