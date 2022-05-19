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

						$posttags = get_the_tags($p->ID);
						$posttagsid = [];
						foreach ($posttags as $tag) {
							$posttagsid[] = $tag->term_id;
						}


						$image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');

						echo '<div data-post-tags="[' . implode(',', $posttagsid) . ']" class="project-card w-full grid max-w-[335px] lg:max-w-[436px] px-0 lg:px-3 py-0 lg:py-3 rounded-lg hover:drop-shadow-2xl"> ';
						echo '<div class=" bg-[#F9F2FF] max-h-[436px]">';
						echo get_img_html($image, true, 'full', 'h-full');
						echo '</div>';
						echo '<div class="pt-4 lg:pt-5">';
						echo '<h2 class="font-bold text-xl lg:text-2xl text-[#424242]  montserrat">' . $p->post_title . '</h2>';
						echo '<div class="flex gap-x-4 pt-3">';
						if ($posttags) {
							foreach ($posttags as $key => $tag) {
								echo '<div class="text-Burgundy-400 grid content-center bg-[#FFF6FA] text-sm px-[10px] py-[2px] rounded-full montserrat max-h-8">';
								echo $tag->name;
								echo '</div>';
							}
						}
						echo '</div>';
						echo '</div>';
						echo '</div>';
					}
					?>
				</div>
				<a class=" block lg:hidden max-w-[111px] ml-4  py-4 px-4 bg-Burgundy-400 text-[#FFF6FA] text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center mt-10" href="">See more</a>
			</div>


		</div>

			
			<?php get_template_part('parts/testimonials'); ?>

		<div class="flex items-center flex-wrap px-8 py-8 lg:py-20 lg:px-0 max-w-auto lg:max-w-[1879px] mx-auto   gap-y-8 gap-x-[62px] lg:gap-x-[72px] bg-[#F5F5F5] justify-center">
			<?php get_template_part('page-templates/archive-project-page/partners'); ?>
		</div>
		<?php get_template_part('parts/lets-talk'); ?>


	</main>
</div>
<?php
get_footer();
