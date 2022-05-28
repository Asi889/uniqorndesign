<?php
$logos = carbon_get_theme_option('misc_partners_logo');
if(!$logos || empty($logos)){
    return;
}
?>
<!-- <div>

</div> -->
<?php get_template_part('static/svgs/archive-project-page/gray-blob-mobile'); ?>
<div class="w-full bg-[#F5F5F5] ">

    <ul class="flex items-center flex-wrap px-8 py-8 lg:py-20 lg:px-0 max-w-auto lg:max-w-[1179px] mx-auto gap-y-8 gap-x-[62px] lg:gap-x-[72px]  justify-center">
    
        <?php
        foreach ($logos as $key => $l) {
            if(!$l['logo']){
                continue;
            }
            //     # code...
            //     echo '<div class="swiper-slide ssswiper">';
            echo '<li class="max-w-[130px] h-[34px]">';
            if($l['href'])   echo '<a target="_blank" rel="noopener noreferrer"  href="' . $l['href'] . '" class="h-full block hover:opacity-75 transition"> ';
            echo get_img_html($l['logo'], true, 'full', 'h-full object-contain object-center');
            if($l['href'])   echo '</a> ';
            echo '</li>';
            //     echo '</a>';
            //     echo '</div>';
        }
    
    
        ?>
    
    </ul>

</div>

