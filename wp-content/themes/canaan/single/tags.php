<?php

$posttags = get_the_tags();
$categories = get_the_category();

?>
<ul class="flex gap-x-3 mt-4 lg:mt-8 px-4 montserrat">
    <?php
    echo get_uniqorns_tags_and_cats($posttags, $categories);
    ?>

</ul>
<?php