<?php
defined('ABSPATH') || die();

global $post;
get_header();

?>
<main >
    <div class="max-w-7xl mx-auto">

        <?php get_template_part('single/single-header'); ?>
        <?php get_template_part('single/tags-and-image'); ?>

        <article class="prose min-h-[30vh] max-w-none prose-img:rounded-xl prose-headings:font-bold prose-a:text-blue-600 hover:prose-a:text-blue-500 px-2 lg:px-0">
           <?php the_content(); ?> 
        </article>


        <?php get_template_part('single/more-projects'); ?>
    </div>
    <div class="hidden md:block">

        <?php get_template_part('parts/lets-talk'); ?>
    </div>

    <aside>

    </aside>
</main>



<?php

get_footer();
