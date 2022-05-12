<?php
?>

<div class="px-5 lg:px-[250px] montserrat text-[#424242] pt-[60px] lg:pt-1">

    <h1 class="text-4xl lg:text-5xl font-bold ">Our Values</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 pt-[52px] pb-8  lg:pt-[61px] lg:pb-[50px] gap-x-5 gap-y-4 lg:gap-y-10 ">
        <?php
        $values = carbon_get_the_post_meta('page-aboutour_values');
        foreach ($values as $key => $v) {
            
            echo '<div class="container px-[2px] lg:px-12 py-[2px] lg:py-12 max-w-[700px]  ">';
            echo '<div class="pt-[10px]  pb-[15px] pl-[9px] pr-4">';
            echo get_img_html($v['image']); 
            echo '</div>';
            echo '<h4 class="text-2xl lg:text-4xl font-bold  pt-4 lg:pt-6">'. $v['title'] .'</h4>';
            echo '<p class="text-base lg:text-2xl font  pt-2 lg:pt-4">'. $v['text'] .'</p>';
            echo '</div>';
        }
        ?>
    </div>

</div>