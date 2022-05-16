
<?php
defined('ABSPATH') || die();

global $post;

$prefix = 'home';
$mainObj=new canaan_post($post);
$url=$mainObj->get_url();
$pid=$mainObj->get_ID();


 

get_header();

?>

<main>
    <div>
        helllllkkkkkk
    </div>
</main>




<?php 

get_footer();