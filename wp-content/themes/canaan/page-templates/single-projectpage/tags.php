<?php

?>
<div class="flex gap-x-3 mt-4 lg:mt-8 px-4">
    <?php
    $posttags = get_the_tags();
    foreach ($posttags as $key => $tag) {
        echo '<div class="bg-blue-200 h-[30px] rounded-2xl">';
        echo '<h4 class=" text-blue-500 h-[30px] px-2 py-1 rounded-2xl">';
        echo $tag->name;
        echo '</h4>';
        echo '</div>';
    }
    ?>

</div>