<?php
if (!defined('ABSPATH')) {
    die();
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?= boolval($_ENV['IS_DEV']) ? 'axe-is-dev' : ''; ?>">

<head>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <?php // get_template_part('parts/favicon'); 
    ?>
    <?php get_template_part('parts/ga-tracking'); ?>
    <?php
    get_template_part('parts/font-loader');
    ?>
    <script>
        var __mainData = {
            nonce: '<?php echo wp_create_nonce('register_user'); ?>',
            isHP: <?php echo (is_front_page() ? 'true' : 'false'); ?>,
            homeUrl: '<?php echo home_url(); ?>',
            ajaxUrl: '<?php echo admin_url('admin-ajax.php'); ?>',
            isRtl: <?php echo is_rtl() ? 'true' : 'false' ?>,
            loadMore: false,
            postsPerPage: <?php echo get_option('posts_per_page'); ?>,
            offset: <?php echo get_option('posts_per_page'); ?>,
        }
    </script>
    <!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script> -->
    <!-- <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->
    <!-- <script src="/path/to/isotope.pkgd.min.js"></script> -->

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="generator" content="Naaman Frenkel using WordPress">

    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <div id="app">
        <div class="sticky-footer">
            <div class="header-placeholder h-16 lg:h-[80px] "></div>
            <header class="header-wraper fixed h-16 lg:h-[80px] top-0 inset-0 bg-white z-50">
                <?php
                get_template_part('header-cmps/header-site', null, ['name' => '']);
                get_template_part('header-cmps/header-mobile', null, []);
                ?>
            </header>