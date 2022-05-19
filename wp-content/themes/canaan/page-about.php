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
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-x-[110px] px-5 lg:px-4  py-8 lg:py-0">
			<div class="grid montserrat">
				<?php
				$content = carbon_get_the_post_meta('page-aboutmain_content');

				echo '<h1 class=" text-superDark text-4xl lg:text-[68px] lg:leading-[82px] font-bold ">' . get_the_title() . '</h1>';
				echo '<div>';
				echo '<p class="text-2xl lg:text-[32px] lg:leading-10 text-[#424242] font-bold pt-8 lg:pt-0">';
				echo $content[0]['title'];
				echo '</p>';
				echo '<p class="text-base lg:text-2xl text-[#616161] pt-4">';
				echo $content[0]['text'];
				echo '</p>';
				echo '</div>';
				?>
			</div>

			<div class="hidden lg:grid justify-end">
				<?php
				$product_hover_img = carbon_get_post_meta(get_the_ID(), 'page-aboutproduct_hover');
				echo get_img_html($product_hover_img);
				?>
			</div>

		</div>

		<?php get_template_part('page-templates/about-page/our-values'); ?>
		<?php get_template_part('page-templates/about-page/meet-team'); ?>
		<?php get_template_part('page-templates/archive-project-page/join-us'); ?>
        <?php get_template_part('parts/lets-talk'); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
