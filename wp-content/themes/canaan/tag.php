<?php
defined('ABSPATH') || die();
global $wp_query, $posts;
$term = get_queried_object();

wp_redirect(get_post_type_archive_link('project') . '?taxonomies='.$term->term_id);
die();

$term_data = carbon_get_term_meta($term->term_id, $term->name, $container_id = '');
$projects = (array) get_posts([
    'post_type' => 'project',
    // 'posts_per_page'      => 4,
    'orderby'        => 'rand',
]);


get_header();

?>

<div id="primary" class="content-area montserrat ">
    <main id="main" class="site-main max-w-[1420px] montserrat mx-5 xl:mx-auto">

        <div class="">

            <header class="lg:grid-cols-2 gap-x-[110px]   py-8 lg:py-20">
                <h1 class="text-superDark text-4xl lg:text-[68px] lg:leading-[82px] font-bold">
                    <span>
                        <?= pll__("Let's talk about"); ?>
                    </span>
                    <span class="cats-and-terms-gardient">
                        <?= $term->name ?>
                    </span>
            </header>
            <?php
            the_archive_description('<article class="term-description mb-[32px]  max-w-[730px]  montserrat">', '</article>');
            ?>
        </div>


        <!-- <section class="mb-20 max-w-[1420px] mx-auto grid grid-cols-1 xl:grid-cols-2"> -->
        <section class="mb-20 max-w-[1420px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-x-0 lg:gap-x-8  gap-y-9 lg:gap-y-[60px] ">
            <?php
            
            foreach ($projects as $key => $_post) {
                
                // print_r($_post);
                // die;
                echo project_prev_cmp($_post,$term->name,true);
            //    echo  project_prev_cmp_filterd($_post,$term->name );
            }
            ?>

        </section>


    </main><!-- #main -->

    <?php get_template_part('parts/testimonials'); ?>
    <?php get_template_part('parts/partners-static'); ?>
    <?php get_template_part('parts/lets-talk'); ?>
</div><!-- #primary -->

<?php
get_footer();
