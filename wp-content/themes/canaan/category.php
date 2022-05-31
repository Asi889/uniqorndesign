<?php
defined('ABSPATH') || die();
global $wp_query, $posts;

$term = get_queried_object();



get_header();

?>

<div id="primary" class="content-area montserrat ">
	<main id="main" class="site-main max-w-[1420px] montserrat mx-5 xl:mx-auto px-5 2xl:px-0">

		<div class="">

			<header class="lg:grid-cols-2 gap-x-[110px]   py-8 lg:py-20">
				<h1 class="text-superDark text-4xl lg:text-[68px] lg:leading-[82px] font-bold">
					<span>
						<?= pll__("Let's talk about"); ?>
					</span>
					<span class="cats-and-terms-gardient">
						<?= $term->name ?>
					</span>
			</header>
			<?php
			the_archive_description('<article class=" term-description mb-[32px]  max-w-[730px]  montserrat">', '</article>');
			?>
		</div>


		<!-- <section class="mb-20 max-w-[1420px] mx-auto grid  lg:flex gap-x-0 lg:gap-x-8  gap-y-9 lg:gap-y-[60px] "> -->
		<section class="mb-20 max-w-[1420px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-x-0 lg:gap-x-8  gap-y-9 lg:gap-y-[60px] ">

			<?php
			foreach ($posts as $key => $_post) {
				echo project_prev_cmp($_post,$term->name,true);
			}
			?>

		</section>


	</main><!-- #main -->

	<?php get_template_part('parts/testimonials'); ?>
	<?php get_template_part('parts/partners-static'); ?>
	<?php get_template_part('parts/lets-talk'); ?>
</div><!-- #primary -->

<?php
get_footer();
