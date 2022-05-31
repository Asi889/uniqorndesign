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

<div id="primary " class="content-area ">
	<main id="main" class="site-main">
		<header class="max-w-[1378px] mx-auto  px-5 lg:px-3">
			<h1 class="text-4xl lg:text-[68px] lg:leading-[82px]  font-bold text-superDark montserrat mt-20 mb-10  ">
				<?= $title; ?>
			</h1>
			<h2 class="text-2xl montserrat text-[#424242] max-w-[952px]">
				<?= $subtitle; ?>
			</h2>
		</header>
		<section class="flex flex-col max-w-[1378px] mx-auto  px-5 lg:px-3 magic-filter-wrapper">
			<!-- <div class="grid   pb-10 px-4 lg:px-[250px]"> -->
			<div class="grid pb-[60px]">

				<div class="flex gap-x-2 lg:gap-x-4 gap-y-3 lg:gap-y-6 flex-wrap pt-5 lg:pt-10 mb-0 lg:mb-[112px] button-group filters-button-group">
					<?php
					$buttonsJson =[];
					$terms = get_terms(array(
						'taxonomy' => 'post_tag',
					));
					$cats = get_terms(array(
						'taxonomy' => 'category',
					));
					foreach ($terms as $key => $t) {
						echo '<button type="button" data-tag-id="' . $t->term_id . '"  data-filter="iso-' . $t->term_id . '" class="project-btn magic-b term-project-btn text-blue-500 flex gap-x-[7px] items-center border border-solid  border-blue-500 active:bg-blue-200  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full">';
						echo '<img class=" check-mark-remove" src="' .  get_template_directory_uri() . '/static/images/blue-checkmark.png" >';
						echo $t->name;
						echo '</button>';
						$buttonsJson[] =[
							'id' => $t->term_id,
							'name' => $t->name,
							'taxonomy' => $t->taxonomy,
						];
					}
					foreach ($cats as $key => $t) {
						echo '<button type="button" data-tag-id="' . $t->term_id . '"   data-filter="iso-' . $t->term_id . '"  class="project-btn magic-b  items category-project-btn text-purple-500 flex gap-x-[7px] items-center border border-solid border-purple-500 active:bg-purple-200  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full">';
						echo '<img class=" check-mark-remove" src="' .  get_template_directory_uri() . '/static/images/purple-checkmark.png" >';
						echo $t->name;
						echo '</button>';
						$buttonsJson[] =[
							'id' => $t->term_id,
							'name' => $t->name,
							'taxonomy' => $t->taxonomy,
						];
					}
					?>
				</div>

				<section class="flex flex-col">

					<div class="grid lg:grid-cols-3 md:grid-cols-2  gap-x-5 gap-y-20  mt-5 lg:mt-5  data-project-grid-js" data-project-grid="true ">

						<?php
						$projectsJson = [];
						foreach ($projects as $key => $p) {
							$html= project_prev_cmp($p,false);
							$taxonomies = array_merge(
								wp_get_post_terms($p->ID, 'category', array('fields' => 'ids')),
								wp_get_post_terms($p->ID, 'post_tag', array('fields' => 'ids'))
							);
							$projectsJson[] = [
								'html' =>$html,
								'id' => $p->ID,
								'title' => $p->post_title,
								'content' => $p->post_content,
								'image' => get_the_post_thumbnail_url($p->ID),
								'link' => get_permalink($p->ID),
								'taxonomies' => $taxonomies
							];
							echo $html;
						}
						?>

					</div>
					<!-- <button data-project-button="true" class=" w-auto mx-auto  py-4 px-4 bg-blue-400 hover:bg-blue-600 transition active:bg-blue-200 text-white text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center mt-10">
						see more
					</button> -->
				</section>

			</div>


		</section>


		<?php get_template_part('parts/testimonials'); ?>
		<?php get_template_part('parts/partners-static'); ?>
		<?php get_template_part('parts/lets-talk-full'); ?>


	</main>
</div>
<?php

echo '<script>__mainData.filters=' . json_encode($buttonsJson) . ';__mainData.projects=' . json_encode($projectsJson) . '</script>';
// echo '<script>__mainData.loadMore= true;__mainData.postType="' . $post->post_type . '"</script>';

get_footer();
