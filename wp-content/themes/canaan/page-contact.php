<?php
defined('ABSPATH') || die();

/**
 * Template Name: About
 *
 */


get_header();
?>

<div id="primary" class="content-area">
    <main class="grid montserrat" id="main" class="site-main">
        <div class="grid bg-[#FFF6FA] pb-8 lg:pb-[60px] pt-9 lg:pt-20 px-4 lg:px-[250px]">

            <?php
            echo '<h1 class=" text-4xl lg:text-[68px] py-5 lg-py-[250px] font-bold">' . get_the_title() . '</h1>';
            ?>
            <div class="px-0 lg:px-[120px] mt-8 lg:mt-[140px]">
                <div class="px-4 lg:px-[120px] py-8 lg:py-[60px] bg-[#FFFFFF]">
                    <?php get_template_part('page-templates/contact-page/contact-us'); ?>
                    <?php get_template_part('page-templates/contact-page/lets-chat'); ?>
    
                </div>
            </div>

        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
