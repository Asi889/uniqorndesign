<?php
defined('ABSPATH') || die();
// print_r(get_template_directory_uri());
// die();
$prefix = 'project_';
global $posts;
$projects = $posts;

// get_option()
// print_r(get_option($posts[0]->ID));
// $ff = get_permalink();

$misc = 'misc_';

$title = carbon_get_theme_option($misc . 'archive_project_title');
$subtitle = carbon_get_theme_option($misc . 'archive_project_subtitle');
get_header();
?>

<div id="primary " class="content-area archive-project-wrapper magic-filter-wrapper">
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

				<div class="flex gap-x-2 lg:gap-x-4 gap-y-3 lg:gap-y-6 flex-wrap pt-5 lg:pt-10 mb-0 lg:mb-[112px] button-group filters-button-group">
					<button class="flex items-center project-btn magic-b border-1 border-solid text-sm lg:text-2xl  border-[#212121] rounded-full px-2 py-1 lg:px-4 lg:py-2 montserrat all-btn-active allButton" data-division="allbuttons" data-filter="*" type="button">
						<img class="img-check-mark" src="http://uniqorn-design.test:8080/wp-content/themes/canaan/static/images/black-checkmark.png" >
						All
					</button>
					<?php
					$terms = get_terms(array(
						'taxonomy' => 'post_tag',
					));
					$cats = get_terms(array(
						'taxonomy' => 'category',
					));
					foreach ($terms as $key => $t) {
						echo '<button type="button" data-tag-id="' . $t->term_id . '" data-typer="term"  data-filter="iso-' . $t->term_id . '" class="project-btn magic-b term-project-btn text-blue-500 flex gap-x-[7px] items-center border-1 border-solid  border-blue-500 active:bg-blue-400  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full montserrat">';
						echo '<img class=" check-mark-remove" src="' .  get_template_directory_uri() . '/static/images/blue-checkmark.png" >';
						echo $t->name;
						echo '</button>';
					}
					foreach ($cats as $key => $t) {
						echo '<button type="button" data-tag-id="' . $t->term_id . '" data-typer="category"  data-filter="iso-' . $t->term_id . '"  class="project-btn magic-b  items category-project-btn text-purple-500 flex gap-x-[7px] items-center border-1 border-solid border-purple-500 active:bg-blue-400  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full montserrat">';
						echo '<img class=" check-mark-remove" src="' .  get_template_directory_uri() . '/static/images/purple-checkmark.png" >';
						echo $t->name;
						echo '</button>';
					}
					?>
				</div>

				<section class="load-more-project-js flex flex-col">

					<div class="grid lg:flex lg:flex-wrap gap-x-5 gap-y-20  mt-5 lg:mt-5  lg:grid-cols-12 data-project-grid-js" data-project-grid="true ">

						<?php
						foreach ($projects as $key => $p) {
							echo project_prev_cmp($p, $key);
							// print_r($p);
						}
						// die;
						?>

					</div>
					<button data-project-button="true" class=" w-auto mx-auto  py-4 px-4 bg-blue-400 hover:bg-blue-600 transition active:bg-blue-200 text-white text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center mt-10">
						<?= pll__('See more'); ?>
					</button>
				</section>

			</div>


		</div>


		<?php get_template_part('parts/testimonials'); ?>
		<?php get_template_part('parts/partners-static'); ?>
		<?php get_template_part('parts/lets-talk-full'); ?>


	</main>
</div>
<?php

echo '<script>__mainData.loadMore= true;;__mainData.postType="' . $post->post_type . '"</script>';

get_footer();
