<?php
?>

<div class="block lg:flex justify-around md:pt-[54px]  md:pb-[45px] pt-8 pb-10 px-5 xl:px-0">
    <div class="grid gap-y-6">
        <div class="">
            <a href="<?php echo home_url(); ?>">
                <?php get_template_part('static/svgs/logo'); ?>
                <span class="sr-only"><?= bloginfo(); ?></span>
            </a>
        </div>
        <ul class="flex gap-x-6 md:items-end flex-col md:flex-row gap-y-3 mb-10 md:mb-0">
            <?php
            $header_links = canaan_get_menu_array('primary');
            // print_r($header_links);
            // die;
            foreach ($header_links as $key => $value) {
                echo '<li><a class=" text-base text-superDark hover:text-green-500 montserrat " href="' . $value['url'] . '" >' . $value['title'] . '</a></li>';
            }
            $academy_link = carbon_get_theme_option('misc_academy_link');
            if($academy_link){
            ?>
            <li>
                <a class=" text-base text-superDark hover:text-green-500 montserrat flex items-center gap-x-2" href="<?php echo $academy_link; ?>">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.97749 1.02114C7.92039 0.992952 7.85319 0.992952 7.79609 1.02114L1.11212 4.32142C0.970455 4.39137 0.961018 4.58751 1.09533 4.67041L7.7793 8.79576C7.84507 8.83635 7.92852 8.83635 7.99428 8.79576L14.6783 4.67041C14.8126 4.58751 14.8031 4.39137 14.6615 4.32142L7.97749 1.02114ZM14.3054 12.338C14.2382 12.2508 14.2566 12.1277 14.3264 12.0426C14.3738 11.9847 14.4138 11.9209 14.4451 11.8526C14.504 11.724 14.5305 11.5833 14.5225 11.4424C14.5146 11.3016 14.4722 11.1647 14.3992 11.0434C14.3453 10.9541 14.276 10.8752 14.1946 10.8102C14.1402 10.7667 14.1027 10.7039 14.1024 10.6348L14.0829 6.01974C14.0822 5.85963 13.901 5.76499 13.7666 5.85458L13.2858 6.17507C13.2297 6.21245 13.1962 6.27497 13.1965 6.34177L13.2117 10.6366C13.2119 10.7055 13.1752 10.7683 13.1215 10.8122C13.0416 10.8775 12.9737 10.9562 12.9211 11.0451C12.8495 11.1659 12.8083 11.3018 12.8008 11.4415C12.7933 11.5813 12.8198 11.7207 12.878 11.8483C12.9091 11.9165 12.9488 11.9802 12.996 12.038C13.0648 12.1224 13.0832 12.2439 13.0175 12.3307L12.8016 12.6158C12.5047 12.9916 12.3411 13.4534 12.336 13.93L12.3391 14.8004C12.3395 14.911 12.4306 15.0004 12.5426 15L13.0629 14.9982C13.2357 14.9976 13.6662 14.9952 13.6707 14.9952L14.1137 14.9936L14.1141 14.9946L14.7979 14.9922C14.9099 14.9918 15.0004 14.9019 15 14.7912L14.997 13.9313C14.9885 13.4523 14.8203 12.9894 14.5185 12.6143L14.3054 12.338ZM7.77425 9.66444C7.84234 9.70923 7.93101 9.70923 7.9991 9.66444L12.0078 7.02799C12.1426 6.93934 12.323 7.03476 12.323 7.19469V8.21992C12.323 8.28234 12.2943 8.34065 12.2439 8.37825C11.3546 9.04114 8.60135 10.9864 8.00244 11.4091C7.93195 11.4588 7.84141 11.4588 7.77092 11.4091C7.17213 10.9863 4.41971 9.04114 3.52956 8.37826C3.47906 8.34066 3.45035 8.2823 3.45035 8.21985V7.19469C3.45035 7.03476 3.6308 6.93934 3.76559 7.02799L7.77425 9.66444Z" fill="currentColor" />
                    </svg>
                    <span><?= pll__('Academy'); ?></span>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>

    <div class="grid gap-y-6 md:text-right">
        <div class="grid montserrat text-superDark">
            <div><?= pll__('TLV based'); ?> ❤️</div>
            <div>© <?= date('Y'); ?> Uniqorn. All rights reserved</div>
        </div>

        <div class="row-start-2 lg:row-start-1 flex items-center lg:justify-end gap-x-5">
            <?php get_template_part('header-cmps/navbar-links'); ?>

        </div>
    </div>
</div>