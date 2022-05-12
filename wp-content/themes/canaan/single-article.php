hell marry single artical
<?php
defined('ABSPATH') || die();

global $post;

$prefix = 'article_';
$mainObj=new canaan_post($post);
$url=$mainObj->get_url();
$pid=$mainObj->get_ID();


 

get_header();

?>
<main class=" grid">
    <div class="max-w-7xl mx-auto">

        <?php get_template_part('page-templates/single-projectpage/projectTitle'); ?>
        <article>
            <!-- <?php the_content(); ?> -->
        </article>
        <?php get_template_part('page-templates/single-article/build-security-article'); ?>
        
        
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

