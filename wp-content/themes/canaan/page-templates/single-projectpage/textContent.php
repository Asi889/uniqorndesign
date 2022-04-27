<?php
?>

<div class="grid gap-y-4 py-1 my-2 w-full h-full">
    <?php

    $contents = carbon_get_the_post_meta('project_content');

    foreach ($contents as $key => $value) {
        # code...
        echo '<div class="grid py-2 text-[#424242]">';
        echo '<h2 class="text-2xl py-1 my-2">' . $value['title'] .' </h2>';
        echo '<p class="text-xl py-1 my-2">' . $value['text'] .' </p>';
        echo '</div>';
    }
    ?>
</div>