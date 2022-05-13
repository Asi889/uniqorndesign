<?php
defined('ABSPATH') || die();

$prefix = 'project_';
global $posts;
$projects = $posts;
get_header();
?>

<div id="primary " class="content-area archive-project-wrapper" >
	<main id="main" class="site-main">
		<div class="grid  pb-10 px-4 lg:px-[250px]">
			<div class="grid pb-[60px]">
				<div>

					<h1 class="text-4xl lg:text-[68px] lg:leading-[82px]  font-bold text-[#212121] montserrat pt-20 pb-10  ">
						Simple work flows allows us to solve complex problems together
					</h1>
				</div>
				<div>
					<p class="text-2xl montserrat text-[#424242] max-w-[952px]">
						Subtitle about our strategic design methodology to help businesses get the most from their projects and teams. up to 2 sentences.
					</p>
				</div>
				<div class="flex gap-x-2 lg:gap-x-4 gap-y-3 lg:gap-y-6 flex-wrap pt-5 lg:pt-10 mb-0 lg:mb-[112px]">
					<a href="" class="text-[#212121] flex items-center gap-x-[7px] content-center bg-[#EEEEEE] text-sm lg:text-2xl px-[20px] py-[8px] rounded-full montserrat">
						<span>✔</span>
						<span>All</span>
						
					</a>
					<?php
					$terms = get_terms( array(
						'taxonomy' => 'post_tag',
						'hide_empty' => false,
					) );
					foreach ($terms as $key => $t) {
						// print_r($t);
						// die;
						// $all_tags = get_the_tags($pp->ID);
						
						
							// print_r($t->name);
								echo '<button data-tag-id="'.$t->term_id.'" href="" class="project-btn text-Burgundy-400 grid content-center border-1 border-solid  border-Burgundy-400 active:bg-blue-400  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full montserrat">';
								echo $t->name;
								echo '</button>';
						
					}		
					?>
				</div>


				<div class=" grid grid-cols-1 lg:grid-cols-3 gap-x-10 gap-y-10 lg:gap-y-20 px-0 lg:px-3 pt-5 lg:pt-5 mt-5 lg:mt-5">
					<?php


					foreach ($projects as $key => $p) {

						$posttags = get_the_tags($p->ID);
						$posttagsid =[];
						foreach ($posttags as $tag){
							$posttagsid[] = $tag->term_id;
						}
						

						$image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');

						echo '<div id="'.++$key.'" data-post-tags="['.implode(',', $posttagsid).']" class="project-card w-full grid  py-0 lg:py-3 px-0 lg:px-3  min-h-[547px] max-h-[547px]   rounded-lg hover:drop-shadow-2xl "> ';
						echo '<div class="px-0 lg:px-4 bg-[#F9F2FF]  max-h-[436px]">';
						echo '<img class="w-full min-h-[340px] max-h-[341px]" src="' . $image[0] . '" alt="tumb" />';
						echo '</div>';
						echo '<div class="pt-4 lg:pt-5">';
						echo '<h2 class="font-bold text-xl lg:text-2xl text-[#424242]  montserrat">' . $p->post_title . '</h2>';
						echo '<div class="flex gap-x-4 pt-3 pb-3">';
						if ($posttags) {
							foreach ($posttags as $key => $tag) {
								echo '<h4 class="text-Burgundy-400 grid content-center bg-[#FFF6FA] text-sm px-[10px] py-[2px] rounded-full montserrat max-h-8">';
								echo $tag->name;
								echo '</h4>';
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
		<div class=" bg-[#F4FFF7]  pb-8 lg:pb-[60px] ">

			<?php get_template_part('page-templates/archive-project-page/testimonials'); ?>
		</div>
		<?php get_template_part('page-templates/archive-project-page/partners'); ?>
		<?php get_template_part('page-templates/archive-project-page/letsTalk-archive'); ?>


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
