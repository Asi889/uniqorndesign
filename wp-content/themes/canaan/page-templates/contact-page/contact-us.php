<?php
?>

<div class="  ">
    <h2 class="text-2xl lg:text-[32px] lg:leading-10 font-bold "> Hey!👋<br>Lets break the ice</h2>

    <form id="contact-us-form" action="" name='form' class="contact-form-js pt-12 lg:pt-10 w-full  " method="POST">
        <div class="absolute -left-[30%] bottom-[25%] 27">
            <?php get_template_part('static/svgs/single-project-page/ellips27'); ?>
        </div>
        <div class="absolute -right-[18%] bottom-[27%] 26">
            <?php get_template_part('static/svgs/single-project-page/ellips26'); ?>
        </div>
        <div class="absolute -left-[20%] bottom-[18%] 28">
            <?php get_template_part('static/svgs/single-project-page/ellips28'); ?>
        </div>
        <!-- <div class=" absolute -right-[10px] bottom-0 29 overflow-hidden"> -->
        <div class="absolute -right-[30%] bottom-[17%] 29 ">
            <?php get_template_part('static/svgs/single-project-page/ellips29'); ?>
        </div>
        <div class="form-group">

            <div class=" text-purple-600 montserrat form-wraper">
                <div class="flex flex-col lg:flex-row justify-between gap-y-6 ">
                    <div class="w-auto lg:w-[340px]">

                        <div class="w-full ">
                            <h3>Name</h3>
                            <input class="form-control border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px]" type="text" id=" " class="" type="text" placeholder="Name..." name="full-name" required>
                        </div>
                        <div class="w-full">
                            <h3>Email</h3>
                            <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 form-mail w-full h-[52px]" type="email" placeholder="Email..." name="form-mail" required>
                        </div>
                    </div>
                    <div class="w-auto lg:w-[340px]">

                        <div class=" w-full">
                            <h3>Company Name</h3>
                            <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px]" type="text" placeholder="Company Name..." name="full-name" required>
                        </div>
                        <div class="w-full">
                            <h3>Phone</h3>
                            <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px]" type="tel" placeholder="Phone..." name="full-name" required>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <h3>Tell us more</h3>
                    <textarea class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2 w-full h-[52px]" name="" id="" cols="" rows="1"></textarea>
                    <!-- <input id="" class="border-[1px] border-[#EEEEEE]  focus:ring-[#9E9E9E] focus:ring-0 hover:border-[#9E9E9E] rounded text-[#424242] placeholder:text-[#9E9E9E] mt-2" type="email" placeholder="Drop a message..." name="full-name" required> -->
                </div>
                <div>
                </div>
            </div>
            <button class="px-4 lg:px-6 py-2 lg:py-3 text-[#BB51FC] text-base lg:text-2xl border-2 lg:border-1 border-[#BB51FC] rounded-md font-bold mt-6">Send</button>
        </div>
        <div class="message_box">

        </div>

        <div class="hidden messege-sent montserrat  pb-36">
            <!-- <h1 class="lp-section8-title my-5">ההודעה נשלחה בהצלחה!</h1> -->
            <p class="lp_sec8_form-message-text">
                Thank you! <br> We received your message and we'll be in touch soon 😍
            </p>

        </div>

    </form>

</div>