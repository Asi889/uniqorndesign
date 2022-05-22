<?php
defined('ABSPATH') || die();
global $posts;
/**
 * Template Name: About
 *
 */


get_header();
?>

<div id="primary" class="content-area">
	<main class="grid mt-8 lg:mt-20 max-w-[1476px] mx-auto" id="main" class="site-main">
	<!-- <main class="grid mt-8 lg:mt-20" id="main" class="site-main"> -->
		<header class="grid grid-cols-1 lg:grid-cols-2 gap-x-[110px] px-5 lg:px-4  py-8 lg:py-0">
			<div class="flex flex-col montserrat">
				
				<h1 class=" text-superDark text-4xl lg:text-[68px] lg:leading-[82px] font-bold ">
					<?= get_the_title(); ?>
				</h1>
				<article class="prose lg:mt-[140px] max-w-none prose-img:rounded-xl prose-headings:font-bold prose-a:text-blue-600 hover:prose-a:text-blue-500">
				<?php the_content(); ?>
				</article>
			</div>

			<div class="hidden lg:grid ">
				<?php
				$product_hover_img = carbon_get_post_meta(get_the_ID(), 'page-aboutproduct_hover');
				echo get_img_html($product_hover_img);
				?>
			</div>

		</header>

		<?php get_template_part('about-page/our-values'); ?>
		<?php get_template_part('about-page/meet-team'); ?>
		<?php get_template_part('parts/join-us'); ?>
        <?php get_template_part('parts/lets-talk'); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
