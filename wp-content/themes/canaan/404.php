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
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
			<h1 class="text-center ">404</h1>
		
		
		</div>
		
		<div class="contant_box_404">
		<h3 class="h2">
		Look like you're lost
		</h3>
		
		<p>the page you are looking for not avaible!</p>
		
		<a href="<?php echo get_home_url(); ?>" class="link_404">Go to Home</a>
	</div>
		</div>
		</div>
		</div>
	</div>
</section>



<?php
get_footer();
