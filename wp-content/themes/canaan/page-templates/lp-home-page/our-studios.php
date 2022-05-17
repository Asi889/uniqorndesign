<?php
$contact_page_link = get_page_by_path('/contact');
?>

<div class="max-w-[1420px] mx-auto px-5 lg:px-0">
    <div class="py-9 lg:py-20">

        <h1 class="text-4xl lg:text-5xl leading-[48px] lg:leading-[58px] font-bold montserrat text-green-600 ">Our studio is all about</h1>
        <h1 class="text-4xl lg:text-5xl leading-[48px] lg:leading-[58px] font-bold montserrat liner-text">products that people love</h1>
    </div>
    <div class="">
        <a class="rounded-md text-white font-semibold text-base lg:text-2xl montserrat bg-green-500 px-4 lg:px-6 py-2 lg:py-3 " href="<?php echo $contact_page_link->guid; ?>">Let's talk</a>
    </div>

    <div class="mt-8 lg:mt-[46px] py-8 lg:py-[120px]">

        <?php

        $product_hover_img = carbon_get_post_meta(get_the_ID(), 'hometop_subtitle');
        echo '<h1 class="text-[32px] lg:text-4xl leading-[39px] lg:leading-[48px] text-center lg:text-left max-w-[335px] lg:max-w-[1062px] font-bold montserrat liner-blue-green-text ">';
        echo $product_hover_img;
        echo '</h1>';
        ?>
        <div class="flex items-center  mt-0 lg:mt-20 flex-wrap px-8 py-8 lg:py-20 lg:px-0 max-w-auto lg:max-w-[1879px] mx-auto   gap-y-8 gap-x-[62px] lg:gap-x-[72px] justify-center">
			<?php get_template_part('page-templates/archive-project-page/partners'); ?>
		</div>

        
    </div>



</div>