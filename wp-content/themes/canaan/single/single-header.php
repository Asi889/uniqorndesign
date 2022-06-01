<?php
defined('ABSPATH') || die();

$subtitle = carbon_get_post_meta(get_the_ID(), 'project_name');
?>
<div class="max-w-7xl mx-auto py-8 lg:py-20  px-5 lg:px-0 montserrat">

    <h1 class="text-superDark lg:text-blue-600 text-[36px] lg:text-[68px] font-bold leading-[48px] lg:leading-[83px]  "><?= get_the_title(); ?></h1>
    <?php if ($subtitle) { ?>
        <h2 class="text-superDark lg:text-blue-600 text-base lg:text-2xl font-normal lg:font-bold pt-4 lg:pt-11"><?= $subtitle; ?></h2>
    <?php } ?>
</div>