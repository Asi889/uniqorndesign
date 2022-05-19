<?php
$link = carbon_get_theme_option('misc_lets_talk_link');
$text = carbon_get_theme_option('misc_lets_talk_text');
if(!$link){
    return;
}

?>
<!-- //mt-10 4px -->
<div class="max-w-[1420px] px-16 mx-auto my-14  montserrat">
    <div class="letsTalkGardient relative py-[90px] lg:py-[60px]">
        <div class="text-center px-4 lg:px-28">
            <div class="text-2xl lg:text-4xl leading-[30px] lg:leading-[48px] font-bold letsTalkTitle ">
                <?php
                echo wpautop($text);
                ?>
            </div>
        </div>
        <div class="grid justify-center mt-10">
            <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-500 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $link; ?>"><?= pll__("Let's talk") ;?></a>
        </div>
    </div>
</div>