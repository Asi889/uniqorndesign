<?php
defined('ABSPATH') || die();

global $wp_query, $posts;
$term = get_queried_object();
$term_data = carbon_get_term_meta($term->term_id, $term->name, $container_id = '');


// print_r($);
// die;
// $prefix = 'tag_';

// $contnet = carbon_get_term_meta($tag_id, $prefix . 'content');

get_header();

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <div class="max-w-[1280px] mx-auto">

            <header class=" lg:grid-cols-2 gap-x-[110px] px-5 lg:px-4  py-8 lg:py-20">
                <h1 class="  px-11 xl:px-0 text-superDark text-4xl lg:text-[68px] lg:leading-[82px] font-bold">
                    <span>
                        <?= pll__("Let's talk about"); ?>
                    </span>
                    <span>
                        <?= $term->name ?>
                    </span>
            </header><!-- .page-header -->
            <?php
            the_archive_description('<article class="archive-description prose  py-16 mr-auto">', '</article>');
            ?>
        </div>


        <section class="mb-20 max-w-[1420px] mx-auto grid grid-cols-1 xl:grid-cols-2">

            <?php

            foreach ($posts as $key => $_post) {
                echo project_prev_cmp($_post);
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
