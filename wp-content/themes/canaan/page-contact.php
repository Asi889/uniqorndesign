<?php
defined('ABSPATH') || die();

/**
 * Template Name: Contact 
 *
 */
// global $post;
// print_r($post);
// die;


get_header();
// contact-samll-blob
?>

<div id="primary" class="content-area">
    <main class=" bg-[#FFF6FA] overflow-hidden relative bg-no-repeat bg-center bg-contain px-4" id="main"
    style="background-image:url(<?= get_template_directory_uri() . '/static/images/contact-page-blob.png';?>);"
    >

            <header class="text-4xl lg:text-[68px]  font-bold xl:py-20 py-14  mx-auto">
                <h1 class="max-w-[1280px] w-full mx-auto px-11 xl:px-0 montserrat">
                    <?= get_the_title(); ?>
                </h1>
            </header>
                <div class="px-4 lg:px-[120px] py-8 lg:py-[60px] bg-white max-w-[1180px] mx-auto mb-16">
                    <?php get_template_part('contact-us/contact-us'); ?>
                    <?php get_template_part('contact-us/lets-chat'); ?>

            </article>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
