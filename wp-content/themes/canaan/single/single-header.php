<?php
defined('ABSPATH') || die();

$subtitle= carbon_get_post_meta(get_the_ID(), 'subtitle');
?>
<header class="max-w-7xl mx-auto px-4 xl:px-0 montserrat">

    <h1 class="text-superDark lg:text-blue-600 text-[36px] lg:text-[69px] font-bold leading-[48px] lg:leading-[83px] py-2 my-2 "><?= get_the_title();?></h1>
    <?php if($subtitle) { ?>
        <h2 class="text-superDark lg:text-blue-600 text-base lg:text-2xl font-normal "><?= $subtitle ;?></h2>
    <?php } ?>
</header>