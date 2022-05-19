<?php
defined('ABSPATH') || die();

/**
 * Template Name: Contact 
 *
 */


get_header();
?>

<div id="primary" class="content-area">
    <main class=" montserrat bg-[#FFF6FA] overflow-hidden" id="main" >
        <div class="grid bg-[#FFF6FA] pb-8 lg:pb-[60px] pt-9 lg:pt-20 px-4 max-w-[1420px] mx-auto   relative">

            <?php
            echo '<div class=" py-5 lg:py-20 px-0">';
            echo '<h1 class=" text-4xl lg:text-[68px]    font-bold">' . get_the_title() . '</h1>';
            echo '</div>';
            ?>
            <div class="px-0 lg:px-1 max-w-[1180px] lg:mx-auto mt-8 lg:mt-[60px] ">
                <div class="px-4 lg:px-[120px] py-8 lg:py-[60px] bg-[#FFFFFF] ">
                    <?php get_template_part('page-templates/contact-page/contact-us'); ?>
                    <?php get_template_part('page-templates/contact-page/lets-chat'); ?>
    
                </div>
            </div>

        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
