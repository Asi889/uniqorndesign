<?php
defined('ABSPATH') || die();

/**
 * Template Name: Contact 
 *
 */


get_header();
?>

<div id="primary" class="content-area">
    <main class=" bg-[#FFF6FA] overflow-hidden" id="main">
        <div class="grid bg-[#FFF6FA] pb-8 lg:pb-[60px]  px-4 max-w-[1420px] mx-auto   relative">

            <header class="text-4xl lg:text-[68px]  font-bold xl:py-20 py-14 ">
                <h1 class="max-w-[1280px] mx-auto px-11 xl:px-0">
                    <?= get_the_title(); ?>
                </h1>
            </header>
            <article class="px-0 lg:px-1 max-w-[1180px] lg:mx-auto mt-8 lg:mt-[60px] ">
                <div class="px-4 lg:px-[120px] py-8 lg:py-[60px] bg-[#FFFFFF] ">
                    <?php get_template_part('contact-us/contact-us'); ?>
                    <?php get_template_part('contact-us/lets-chat'); ?>

                </div>
            </article>

        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
