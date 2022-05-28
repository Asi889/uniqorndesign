<?php
global $posts;
$contact_page_link = get_permalink('134');
$link = carbon_get_theme_option('misc_lets_talk_link');
$text = carbon_get_theme_option('misc_lets_talk_text');
// if(!$link){
//     return;
// }

?>

<div class="letsTalkGardient-archive  montserrat relative overflow-hidden ">
    <img class="hidden lg:block top-[100px] absolute w-full" src="<?php echo get_template_directory_uri() . '/static/images/archive-project-blob.png'; ?>" alt="">
    <img class="block lg:hidden absolute" src="<?php echo get_template_directory_uri() . '/static/images/archive-project-mobile-blob.png'; ?>" alt="">
    <div class=" relative pt-[60px] pb-[120px] lg:py-[120px] max-w-[1062px] mx-auto">
        <div class="text-center ">
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