<?php
global $posts;
$visions = carbon_get_the_post_meta('homevision');
$contact_page_link = get_page_by_path('/about');

if (!$visions) return;
// if(!$visions || !$empty($visions)) return;
?>

<section class="max-w-[1420px] mx-auto px-5 2xl:px-0 2xl:px-0 montserrat">
    <div class="py-[60px]">
        <h2 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] font-bold text-purple-600 montserrat">
            <!-- You have a vision, we have your back -->
            <?=  carbon_get_the_post_meta('homevision_title'); ?>
        </h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 justify-center lg:justify-between gap-y-[31px] lg:gap-y-0 py-[60px] mx-auto lg:mx-0 lg:py-8">
        <?php
        foreach ($visions as $key => $v) {
            echo '<div class="grid max-w-[460px] py-y lg:px-6 lg:py-6  ">';
            echo get_img_html($v['image']);
            echo '<h3 class="text-[32px] leading-[39px] lg:text-4xl lg:leading-[48px] text-purple-600 font-bold pt-[12px] lg:pt-[6px]">' . $v['title'] . '</h3>';
            echo '<p class="text-2xl text-[#424242] leading-[36px] pt-5 lg:pt-3">' . $v['text'] . '</p>';
            echo '</div>';
        }
        ?>

    </div>
    <div class="text-center pt-10 pb-8 lg:pb-[60px]">
        <a class="rounded-lg text-white font-semibold text-base lg:text-2xl montserrat bg-purple-400 px-4 lg:px-6 py-2 lg:py-3 hover:bg-purple-500 focus:bg-purple-400 focus:shadow-2xl transition duration-300" href="<?= get_page_link($contact_page_link); ?>">
            <?= pll__('See more'); ?>
        </a>
    </div>


</section>