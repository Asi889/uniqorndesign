<?php

?>
<div class="w-full grid justify-center py-1 my-2">
    <div>

        <?php
        $img_id = carbon_get_post_meta(get_the_ID(), 'project_firstimage'); 
    //   print_r($img_id);
    //     die;
        echo get_img_html($img_id);
        ?>
        <?php get_template_part('page-templates/single-projectpage/tags'); ?>

    </div>

</div>