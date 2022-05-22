<?php
defined('ABSPATH') || die();

$prefix = 'project_';
global $posts;
$projects = $posts;

$misc = 'misc_';

$title = carbon_get_theme_option($misc . 'archive_project_title');
$subtitle = carbon_get_theme_option($misc . 'archive_project_subtitle');
get_header();
?>

<div id="primary " class="content-area archive-project-wrapper">
	<main id="main" class="site-main">
		<div class="flex flex-col max-w-[1378px] mx-auto  px-5 lg:px-3">
			<!-- <div class="grid   pb-10 px-4 lg:px-[250px]"> -->
			<div class="grid pb-[60px]">
				<header>
					<h1 class="text-4xl lg:text-[68px] lg:leading-[82px]  font-bold text-superDark montserrat mt-20 mb-10  ">
						<?= $title; ?>
					</h1>
					<p class="text-2xl montserrat text-[#424242] max-w-[952px]">
						<?= $subtitle; ?>
					</p>
				</header>

				<div class="flex gap-x-2 lg:gap-x-4 gap-y-3 lg:gap-y-6 flex-wrap pt-5 lg:pt-10 mb-0 lg:mb-[112px]">
					<?php
					$terms = get_terms(array(
						'taxonomy' => 'post_tag',
						// 'hide_empty' => false,
					));
					foreach ($terms as $key => $t) {
						// print_r($t);
						// die;
						// $all_tags = get_the_tags($pp->ID);


						// print_r($t->name);
						echo '<button data-tag-id="' . $t->term_id . '" href="" class="project-btn text-Burgundy-400 grid content-center border-1 border-solid  border-Burgundy-400 active:bg-blue-400  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full montserrat">';
						echo $t->name;
						echo '</button>';
					}
					?>
				</div>


				<div class=" flex flex-wrap gap-x-5  mt-5 lg:mt-5">
					<!-- <div class=" grid grid-cols-1 lg:grid-cols-3 gap-x-10 gap-y-10 lg:gap-y-20 px-0 lg:px-3 pt-5 lg:pt-5 mt-5 lg:mt-5"> -->
					<?php


					foreach ($projects as $key => $p) {

						echo project_prev_cmp($p);
					}
					?>
				</div>
				<a class=" block lg:hidden max-w-[111px] ml-4  py-4 px-4 bg-Burgundy-400 text-[#FFF6FA] text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center mt-10" href="">See more</a>
			</div>


		</div>


		<?php get_template_part('parts/testimonials'); ?>
		<?php get_template_part('parts/partners-static'); ?>
		<?php get_template_part('parts/lets-talk'); ?>


	</main>
</div>
<?php
get_footer();
