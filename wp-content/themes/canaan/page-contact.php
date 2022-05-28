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
?>

<div id="primary" class="content-area">
    <main class=" bg-[#FFF6FA] overflow-hidden relative" id="main">
        <img class="hidden md:block top-[53%] absolute w-full" src="<?php echo get_template_directory_uri() . '/static/images/contact-page-blob.png'; ?>" alt="">
        <div class="grid bg-[#FFF6FA] pb-8 lg:pb-[60px]  px-4 max-w-[1420px] mx-auto   relative">
            <img class="block md:hidden top-[23%] right-0 absolute " src="<?php echo get_template_directory_uri() . '/static/images/contact-samll-blob.png'; ?>" alt="">

            <header class="text-4xl lg:text-[68px]  font-bold xl:py-20 py-14 ">
                <h1 class="max-w-[1280px] mx-auto px-11 xl:px-0 montserrat">
                    <?= get_the_title(); ?>
                </h1>
            </header>
            <article class="px-0 lg:px-1 max-w-[1180px] lg:mx-auto mt-8 lg:mt-[60px] z-10">
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
