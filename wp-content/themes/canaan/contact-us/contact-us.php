<?php
$message_sent_text = carbon_get_the_post_meta('page-contactmessage_sent');
?>

<div class="  ">
    <h2 class="text-2xl lg:text-[32px] lg:leading-10 font-bold ">
        <?= pll__('Hey'); ?>!👋<br>
        <?= pll__("Let's break the ice"); ?>
    </h2>

    <form id="contact-us-form" action="" name='form' class="contact-form-js pt-12 lg:pt-10 w-full  " method="POST">
       
        <div class="form-group">

            <div class=" text-purple-600 montserrat form-wraper">
                <div class="flex flex-col lg:flex-row justify-between gap-y-6 ">
                    <div class="w-auto lg:w-[340px] grid gap-y-6">

                        <label class="w-full  block ">
                            <h3><?= pll__('Name'); ?></h3>
                            <input class="form-control border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px] transiton duration-300" type="text" id=" " class="" type="text" 
                            placeholder="<?= pll__('John Cohen') ;?>"
                            name="full-name" required>
                        </label>
                        <label class="w-full block ">
                            <h3><?= pll__('Email') ;?></h3>
                            <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 form-mail w-full h-[52px] transiton duration-300" type="email" placeholder="Email" name="email" required>
                        </label>
                    </div>
                    <div class="w-auto lg:w-[340px] grid gap-y-6">

                        <label class=" w-full block">
                            <h3><?= pll__('Company Name'); ?></h3>
                            <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px] transiton duration-300" type="text" placeholder="Company Name" name="company-name">
                        </label>
                        <label class="w-full block">
                            <h3><?= pll__('Phone'); ?></h3>
                            <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px] transiton duration-300" type="tel" placeholder="Phone" name="phone" required>
                        </label>
                    </div>
                </div>
                <div class="mt-6">
                    <h3><?= pll__('Tell us more') ;?></h3>
                    <textarea name="message" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full min-h-[127px] lg:min-h-[52px] transiton duration-300 pt-[15px]" name="" id="" cols="" rows="1" placeholder="Drop a message"></textarea>
                    <!-- <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2" type="email" placeholder="Drop a message..." name="full-name" required> -->
                </div>
                <div>
                </div>
            </div>
            <button class="px-4 lg:px-6 py-2 lg:py-3 text-[#BB51FC] text-base lg:text-2xl border-2 lg:border-[1px] border-[#BB51FC] rounded-md font-bold mt-6 hover:bg-purple-100 focus:bg-white montserrat"><?= pll__('Send') ;?></button>
        </div>
        <div class="message_box">

        </div>

        <div class="hidden messege-sent montserrat  pb-36">
            <!-- <h1 class="lp-section8-title my-5">ההודעה נשלחה בהצלחה!</h1> -->
            <p class="lp_sec8_form-message-text">
            <?=  pll__($message_sent) ;?>
            </p>

        </div>

    </form>

</div>