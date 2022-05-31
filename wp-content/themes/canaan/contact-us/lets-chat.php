<?php
$phone = carbon_get_the_post_meta('page-contactphone_number');
$mail = carbon_get_post_meta(get_the_ID(),'page-contactemail');
$whatsup =  carbon_get_post_meta(get_the_ID(),'page-contactwhatsup');
?>

<div class="grid md:flex gap-x-[340px] justify-between  border-t-[1px] border-[#EEEEEE] mt-8 lg:mt-10 pt-8 lg:pt-10 ">
    <div class="grid gap-y-4">
        <h2 class="text-xl lg:text-2xl leading-[29px] font-bold text-superDark">
            <?= pll__("Let's chat") ;?>
        </h2>
        <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsup; ?>" class="flex items-center px-4 lg:px-6 py-2 lg:py-3 bg-green-400 hover:bg-green-500 focus:shadow-2xl transition duration-500 pt-4 rounded-md w-fit lg:w-auto" target="_blank" rel="noopener noreferrer">
            <div class="hidden lg:block">
                <?php get_template_part('static/svgs/contact-page/whatsapp-icon'); ?>
            </div>

            <div class="block lg:hidden">
                <?php get_template_part('static/svgs/contact-page/whatsapp-mobile-icon'); ?>
            </div>

            <p class="text-base lg:text-2xl font-semibold pl-[10px] text-[#FFF6FA] montserrat"><?= pll__('Whatsapp'); ?></p>
        </a>
        <a class="flex items-center hover:opacity-75 transition duration-500 focus:opacity-20" href="tel:<?php echo $phone; ?>">
            <div class="hidden lg:flex items-center pt-2 lg:pt-4  ">
                <?php get_template_part('static/svgs/contact-page/phone-icon'); ?>
                <p class="text-base lg:text-2xl text-superDark  pl-[10px] montserrat"><?php echo $phone; ?></p>
            </div>
            <div class="flex items-center lg:hidden pt-2 lg:pt-4">
                <?php get_template_part('static/svgs/contact-page/phone-mobile-icon'); ?>
                <p class="text-base lg:text-2xl text-superDark  pl-[10px] montserrat "><?php echo $phone; ?></p>
            </div>
        </a>
    </div>
    <div class="">
        <h2 class="text-xl lg:text-2xl font-bold text-superDark pb-4 pt-6 lg:pt-0 montserrat hover:opacity-90 focus:opacity-75">
           <?= pll__('Email us') ;?>
        </h2>
        <a class="flex items-center hover:opacity-75 transition duration-500 focus:opacity-20" href="mailto:<?php echo $mail; ?>">
            <div class="hidden lg:flex items-center ">
                <?php get_template_part('static/svgs/contact-page/letter-icon'); ?>
                <p class="text-base lg:text-2xl text-superDark pl-[10px] montserrat "><?php echo $mail; ?></p>
            </div>
            <div class="flex items-center lg:hidden ">
                <?php get_template_part('static/svgs/contact-page/letter-mobile-icon'); ?>
                <p class="text-base lg:text-2xl text-superDark pl-[10px] montserrat ">><?php echo $mail; ?></p>
            </div>
        </a>

    </div>


</div>