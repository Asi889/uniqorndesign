<?php
defined('ABSPATH') || die();
get_header();

?>

<main class="page_404">
	<div class="container_404">
		<div class="row">
			<div class="col-sm-12 ">
				<div class="col-sm-10 col-sm-offset-1  text-center">
					<header class="four_zero_four_bg">
						<h1 class="text-center error-four">404</h1>
					</header>
					<div class="contant_box_404">
						<h2 class="text-3xl font-bold">
							<?= pll__("Look like you're lost"); ?>
						</h2>
						<article>
							<p><?= pll__('The page you are looking for not available!'); ?></p>
						</article>
						<footer>

							<a class="border max-w-xs border-blue-400 mt-8 py-3 px-3 text-blue-400 text-2xl font-semibold montserrat rounded-md self-center hover:bg-slate-100 focus:outline-none focus:ring focus:ring-blue-300 " href="<?php echo get_home_url(); ?>">
								<?= pll__('Back to Home'); ?>
							</a>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>



<?php
get_footer();
