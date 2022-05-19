<?php

$posttags = get_the_tags();
$categories = get_the_category();

?>
<ul class="flex gap-x-3 mt-4 lg:mt-8 px-4 montserrat">
    <?php
        foreach ((array) $posttags as $key => $tag) {
            echo '<li class="bg-blue-200 rounded-2xl">';
            echo '<a href="TODO: MISSING LINK" class="text-sm text-blue-500 px-2 rounded-2xl leading-[30px]">';
            echo $tag->name;
            echo '</a>';
            echo '</li>';
        }
        foreach ((array) $categories as $key => $tag) {
            echo '<li class="bg-purple-100 rounded-2xl">';
            echo '<a href="TODO: MISSING LINK" class="text-sm text-purple-500 px-2 rounded-2xl leading-[30px]">';
            echo $tag->name;
            echo '</a>';
            echo '</li>';
        }
        ?>

</ul>
<?php