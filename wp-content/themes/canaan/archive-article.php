<?php
defined('ABSPATH') || die();

$prefix = 'article_';
global $posts;
get_header();
?>

<main id="archive-article-wrapper" class="">
	<div class="grid  pb-10">
		<div class="bg-[#FFF6FA] pb-[60px]">

			<header class="text-4xl lg:text-[68px]  font-bold text-Burgundy-400 montserrat xl:py-20 py-14 ">
				<h1 class="max-w-[1280px] mx-auto px-11 xl:px-0">
					<?= pll__('Articles') ;?>
				</h1>
			</header>

			<article class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 gap-y-4 lg:gap-y-11  px-4 max-w-[1204px] mx-auto lg:py-14 py-10">
				<?php

				$projects = $posts;
				foreach ($projects as $key => $p) {
					echo article_prev_cmp($p);
				
				}
				?>
			</article>
			<!-- <a class=" block lg:hidden max-w-[111px] ml-4  py-4 px-4 bg-Burgundy-400 text-[#FFF6FA] text-base lg:text-2xl font-semibold montserrat rounded-md justify-self-center mt-10" href="">See more</a> -->
		</div>

		<div>

			<?php get_template_part('parts/join-us'); ?>
			<?php get_template_part('parts/lets-talk'); ?>
		</div>

	</div>

</main>

<?php
get_footer();
