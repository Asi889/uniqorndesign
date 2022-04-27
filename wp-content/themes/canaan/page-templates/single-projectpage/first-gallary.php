<?php

?>


<div class="grid w-full h-full">

    <?php
    $images = carbon_get_the_post_meta('project_first_image_gallary');
    foreach ($images as $key => $value) {
        echo get_img_html($value['image']);
    }

    ?>

</div>