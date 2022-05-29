<?php
defined('ABSPATH') || die();

global $wp_query, $posts;
$term = get_queried_object();
$term_data = carbon_get_term_meta($term->term_id, $term->name, $container_id = '');
$projects = (array) get_posts([
    'post_type' => 'project',
    'posts_per_page'      => 4,
    'orderby'        => 'rand',
]);


get_header();

?>

<div id="primary" class="content-area montserrat ">
    <main id="main" class="site-main">

        <div class="max-w-[1280px] mx-auto">

            <header class=" lg:grid-cols-2 gap-x-[110px] px-5 lg:px-4  py-8 lg:py-20">
                <h1 class="  px-11 xl:px-0 text-superDark text-4xl lg:text-[68px] lg:leading-[82px] font-bold">
                    <span>
                        <?= pll__("Let's talk about"); ?>
                    </span>
                    <span class="cats-and-terms-gardient">
                        <?= $term->name ?>
                    </span>
            </header><!-- .page-header -->
            <?php
            the_archive_description('<article class="archive-description prose  py-16 mr-auto">', '</article>');
            ?>
        </div>


        <section class="mb-20 max-w-[1420px] mx-auto grid grid-cols-1 xl:grid-cols-2">

            <?php
            
            foreach ($projects as $key => $_post) {
                
                // print_r($_post);
                // die;
                echo project_prev_cmp($_post,$term->name);
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
