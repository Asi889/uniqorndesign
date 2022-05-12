<?php
?>

<div class="px-5 lg:px-[250px] montserrat mt-[60px] lg:mt-20">
    <h1 class="text-4xl lg:text-5xl font-bold text-[#424242] ">Meet the team</h1>
    <div class="grid lg:flex justify-center lg:justify-start  lg:gap-x-[140px] gap-y-8 lg:gap-y-14 mt-[60px] lg:mt-20">
    <?php
        $values = carbon_get_the_post_meta('page-aboutmeet_team');
        foreach ($values as $key => $v) {
            
            echo '<div class="container grid  ">';
            echo '<div class="px-5 py-5 w-[194px] h-[180px]">';
            echo get_img_html($v['image']); 
            echo '</div>';
            echo '<h4 class="text-[#616161] text-2xl ">'. $v['name'] .'</h4>';
            echo '<p class="text-[#616161] text-2xl font-bold ">'. $v['text'] .'</p>';
            echo '</div>';
        }
        ?>

    </div>


</div>