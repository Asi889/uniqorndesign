<?php
$visions = carbon_get_the_post_meta('about');
$contact_page_link = get_page_by_path('/about');
if(!$visions || !$empty($visions)) return;
?>

<section class="max-w-[1420px] mx-auto px-5 lg:px-0">
    <div class="py-[60px] lg:py20 px-5 lg:px-0">
        <h2 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] font-bold text-purple-600">
            <?= pll__('You have a vision, we have your back') ;?>
        </h2>
    </div>
    <div class="grid lg:flex flex-wrap justify-between py-[60px] lg:py-8">
        <?php
        foreach ($visions as $key => $v) {
            echo '<div class="grid max-w-[412px] px-0 py-0 lg:px-6 lg:py-6">';
            echo get_img_html($v['image']);
            echo '<h4 class="text[32px] leading-[39px] lg:text-4xl lg:leading-[48px] text-purple-600 font-bold">' . $v['title'] . '</h4>';
            echo '<p class="text-2xl text-[#424242] leading-[36px]">' . $v['text'] . '</p>';
            echo '</div>';
        }
        ?>

    </div>
    <div class="text-center pt-10 pb-8 lg:pb-[60px]">
        <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-purple-400 px-4 lg:px-6 py-2 lg:py-3 " href="<?= get_page_link($contact_page_link); ?>">See more</a>
    </div>


</section>