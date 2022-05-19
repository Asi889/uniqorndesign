<?php
?>

<div class="grid lg:flex gap-x-[340px] justify-between  border-t-[1px] border-[#EEEEEE] mt-8 lg:mt-10 pt-8 lg:pt-10 ">
    <div class="grid gap-y-4">
        <h2 class="text-xl lg:text-2xl font-bold text-superDark py-[2px]">Let's chat</h1>
            <a href="" class="flex items-center px-4 lg:px-6 py-2 lg:py-3 bg-green-400 pt-4 rounded-md w-fit lg:w-auto">
                <div class="hidden lg:block">
                    <?php get_template_part('static/svgs/contact-page/whatsapp-icon'); ?>
                </div>

                <div class="block lg:hidden">
                    <?php get_template_part('static/svgs/contact-page/whatsapp-mobile-icon'); ?>
                </div>

                <p class="text-base lg:text-2xl font-semibold pl-[10px] text-[#FFF6FA]">Whatsapp</p>
            </a>
            <a class="flex items-center" href="">
                <div class="hidden lg:flex items-center pt-2 lg:pt-4">
                    <?php get_template_part('static/svgs/contact-page/phone-icon'); ?>
                    <p class="text-base lg:text-2xl text-superDark  pl-[10px]">+9725200000</p>
                </div>
                <div class="flex items-center lg:hidden pt-2 lg:pt-4">
                    <?php get_template_part('static/svgs/contact-page/phone-mobile-icon'); ?>
                    <p class="text-base lg:text-2xl text-superDark  pl-[10px]">+9725200000</p>
                </div>
            </a>
    </div>
    <div>
        <h2 class="text-xl lg:text-2xl font-bold text-superDark pb-4 pt-6 lg:pt-0">Email Us</h1>
            <a class="flex items-center" href="">
                <div class="hidden lg:flex items-center ">
                    <?php get_template_part('static/svgs/contact-page/letter-icon'); ?>
                    <p class="text-base lg:text-2xl text-superDark pl-[10px]">adam@uniqorn.design</p>
                </div>
                <div class="flex items-center lg:hidden">
                    <?php get_template_part('static/svgs/contact-page/letter-mobile-icon'); ?>
                    <p class="text-base lg:text-2xl text-superDark pl-[10px]">adam@uniqorn.design</p>
                </div>
            </a>

    </div>


</div>