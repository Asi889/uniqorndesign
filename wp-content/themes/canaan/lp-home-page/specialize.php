<?php
$terms = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);
// $archive_project_page_link = get_permalink('60');

$contact_page_link = get_page_by_path('/archive-project');




function term_cmp(WP_Term $term, $is_odd)
{
    $prefix = 'category_';
    // print_r($term);
    // die;
    echo '<li class="grid md:flex ' . (($is_odd) ? " flex-row-reverse " : " ") . '  justify-between">';

    echo '<div class="max-w-[580px]">';
    echo '<a href="' . get_term_link($term) . '" rel="noopener noreferrer" class="grid  hover:opacity-60 transition-opacity">';
    echo '<h4 class="text-[32px] leading-[39px] lg:text-4xl lg:leading-[48px] text-superDark font-bold">' . $term->name . '</h4>';
    echo '<p class="text-2xl  mt-5 lg:mt-4 text-[#424242] ">' . $term->description . '</p>';
    echo '</a>';
    echo '<a href="' . get_permalink('64') . '" rel="noopener noreferrer" class="grid text-superDark text-2xl font-semibold mt-5 hover:opacity-60 transition-opacity">';
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
            // print_r(carbon_get_term_meta($term->term_id, 'category'));
            // die;
            term_cmp($c, $key % 2);
        }
        ?>
    </ol>
</section>