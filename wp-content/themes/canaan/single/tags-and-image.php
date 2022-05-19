<?php
defined('ABSPATH') || die();

$image = carbon_get_post_meta(get_the_ID(), 'firstimage');

if (!$image) {
    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}

$tags = get_the_tags();
?>

<section class="mt-16 mb-14 max-w-[1180px] mx-auto px-6 lg:px-0">
    <?php
    if ($image) {
        echo '<div class="w-full mb-8 rounded-2xl border border-[#eeeeee]">';
        echo get_img_html($image);
        echo '</div>';
    }
    get_template_part('single/tags');

    ?>
</section>