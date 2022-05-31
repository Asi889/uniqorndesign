<?php
defined('ABSPATH') || die();
global $wp_query, $posts;

$term = get_queried_object();



get_header();

?>

<!-- <div>
    <h1>

    </h1>
    4040 hello world
    <div class="flex">

        <img class="spin-gear-fast w-[50px] h-[50px]" src="<?php echo get_template_directory_uri() . '/static/images/gear.png'; ?>" alt="">
        <img class="spin-gear-faster w-[30px] h-[30px]" src="<?php echo get_template_directory_uri() . '/static/images/gear.png'; ?>" alt="">
    </div>

</div> -->
<section class="page_404">
	<div class="container_404">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
			<h1 class="text-center error-four">404</h1>
		
		
		</div>
		
		<div class="contant_box_404">
		<h3 class="text-3xl font-bold">
		Look like you're lost
		</h3>
		
		<p>the page you are looking for not avaible!</p>
		
		<a class="border error_link max-w-xs border-blue-400 mt-8 py-3 px-3  text-2xl font-semibold montserrat rounded-md self-center inline-block hover:bg-shadow-2xl focus:outline-none focus:ring focus:ring-blue-300 " href="<?php echo get_home_url(); ?>" >Go to Home</a>
	</div>
		</div>
		</div>
		</div>
	</div>


	<!-- <h1 class="zoom-area">404 Error</h1>
	<h1 class="zoom-area">Look like you're lost</h1>
	<p class="zoom-area"> the page you are looking for is not avaible! </p>
	<section class="error-container">
		<span>4</span>
		<span><span class="screen-reader-text">0</span></span>
		<span>4</span>
	</section>
	<div class="link-container">
		<a target="_blank" href="<?php echo get_home_url(); ?>" class="more-link">Go To Home</a>
	</div> -->
</section>



<?php
get_footer();
