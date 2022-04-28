
<?php
defined('ABSPATH') || die();

global $post;

$prefix = 'project_';
$mainObj = new canaan_post($post);
$url = $mainObj->get_url();
$pid = $mainObj->get_ID();

// echo $url;



get_header();

?>
<main class=" grid">
    <div class="max-w-7xl mx-auto">

        <?php get_template_part('page-templates/single-projectpage/projectTitle'); ?>
        <article>
            <?php the_content(); ?>
        </article>
        <?php get_template_part('page-templates/single-projectpage/build-security'); ?>
        
        
        <!-- <?php get_template_part('page-templates/single-projectpage/textContent'); ?> -->
        <!-- <?php get_template_part('page-templates/single-projectpage/first-gallary'); ?> -->
        
        <?php get_template_part('page-templates/single-projectpage/moreProjects'); ?>
        <?php get_template_part('page-templates/single-projectpage/letsTalk'); ?>
    </div>

    <aside>

    </aside>
</main>



<?php

get_footer();
