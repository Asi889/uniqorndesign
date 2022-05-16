<?php
defined('ABSPATH') || die();

global $post;
$what_is = carbon_get_the_post_meta('datatags_what_is');
$more_info = carbon_get_the_post_meta('datatags_subject_projects_info');
print_r($values);
// $prefix = 'tag_';
// $mainObj = new canaan_post($post);
// $url = $mainObj->get_url();
// $pid = $mainObj->get_ID();

// echo $url;



get_header();

?>

<main>
    <div>
       <div class="w-full bg-[#FAFAFA]">
           <div class="max-w-">

           </div>

       </div>
    </div>
</main>








<?php

get_footer();