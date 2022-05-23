<?php
$terms = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);

function term_cmp(WP_Term $term, $is_odd)
{
    $prefix = 'category_';
    
    echo '<li class="grid lg:flex ' . (($is_odd) ? " flex-row-reverse " : " ") . '  justify-between">';

    echo '<div class="max-w-[580px]">';
    echo '<h4 class="text-8 leading-[39px] lg:text-4xl lg:leading-[48px] text-superDark font-bold">' . $term->name . '</h4>';
    echo '<p class="text-2xl  mt-5 lg:mt-4 text-[#424242] ">' . $term->description. '</p>';
    echo '<a href="'.get_term_link($term).'" rel="noopener noreferrer" class="grid text-superDark text-2xl font-semibold mt-5 hover:opacity-60 transition-opacity">';
    echo pll__('See all projects');
    echo '</a>';
    echo '</div>';

    echo '<div class="relative">';
    echo get_img_html(carbon_get_term_meta($term->term_id, $prefix . 'hp-image'), true, 'full', 'h-full object-contain object-center');
    echo '</div>';

    echo '</li>';
}

?>

<section class="py-16">
    <h2 class="text-4xl leading-[48px] lg:text-5xl lg:leading-[58px] py-[60px] lg:py-20 font-bold">
        <?= pll__('We specialize in'); ?>
    </h2>
    <ol class="grid gap-y-0 lg:gap-y-[60px] montserrat ">
        <?php
        foreach ($terms as $key => $c) {
            term_cmp($c, $key % 2);
        }
        ?>
    </ol>
</section>