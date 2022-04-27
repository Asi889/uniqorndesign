<?php

?>
<div class="w-full grid justify-center py-1 my-2">
    <div>

        <?php
        $img_id = carbon_get_post_meta(get_the_ID(), 'project_firstimage'); 
      
        // die;
        echo get_img_html($img_id);
        ?>
        <?php include_once(dirname(__FILE__) . '/tags.php'); ?>
    </div>

</div>