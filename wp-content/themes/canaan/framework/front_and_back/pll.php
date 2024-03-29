<?php
defined('ABSPATH') || die();


if (function_exists('pll_register_string')) {
    $content = file_get_contents(__DIR__.'/en.json');
    $json = (array) json_decode($content, true);
   
    $strings = $json;
    $strings[] = '';
    $strings[] = '';

    foreach ($strings as $v) {
        pll_register_string($v, $v);
    }

}


if(!function_exists('pll_register_string')){
    function pll_register_string($string, $string1){
        return $string;
    }
}
if(!function_exists('pll_get_post')){
    function pll_get_post($post){
        return $post;
    }
}
if(!function_exists('pll__')){
    function pll__($str){
        return $str;
    }
}
if(!function_exists('pll_e')){
    function pll_e($str){
        echo $str;
    }
}

if(!function_exists('pll_current_language')){
    function pll_current_language(){
        return 'he';
    }
}
if(!function_exists('pll_the_languages')){
    function pll_the_languages($args){
        return [
            [
                'id'=>'99999999',
                'slug'=>'he',
                'name'=>'he',
                'url'=> home_url(),
                'flag'=>'99999999',
                'current_lang'=>false,
                'no_translation'=>false
            ]
        ];
    }
}
