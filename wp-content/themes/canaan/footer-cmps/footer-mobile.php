<?php
?>

<div class="grid md:hidden pl-5 ">
    <?php
    get_template_part('static/svgs/logo');

    $header_links = canaan_get_menu_array('primary');
    foreach ($header_links as $key => $value) {

        echo '<a class=" text-base text-[#424242] hover:text-green-500   py-2 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a>';
    }
    ?>

</div>