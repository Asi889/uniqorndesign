<?php
if (!defined('ABSPATH')) {
die();
}
function get_svg($name, $is_return = true)
{
$r = '';
switch ($name) {
    case 'link':
        $r = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
      </svg>';
    break;
    case 'arrow-left':
        $r = '<svg class="rotate-180" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.42501 4.13428C8.24214 4.13428 8.0591 4.20417 7.9195 4.34378C7.64011 4.62316 7.64011 5.07558 7.9195 5.35479L14.564 11.9993L7.9195 18.6438C7.64011 18.9232 7.64011 19.3756 7.9195 19.6548C8.19889 19.934 8.6513 19.9342 8.93051 19.6548L16.0805 12.5048C16.3599 12.2254 16.3599 11.773 16.0805 11.4938L8.93051 4.34378C8.79091 4.20417 8.60787 4.13428 8.42501 4.13428Z" fill="#13471E"/>
        </svg>
        ';
    break;
    case 'arrow-right':
        $r = '<svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.42501 4.13428C8.24214 4.13428 8.0591 4.20417 7.9195 4.34378C7.64011 4.62316 7.64011 5.07558 7.9195 5.35479L14.564 11.9993L7.9195 18.6438C7.64011 18.9232 7.64011 19.3756 7.9195 19.6548C8.19889 19.934 8.6513 19.9342 8.93051 19.6548L16.0805 12.5048C16.3599 12.2254 16.3599 11.773 16.0805 11.4938L8.93051 4.34378C8.79091 4.20417 8.60787 4.13428 8.42501 4.13428Z" fill="#13471E"/>
        </svg>
        ';
    break;
    case '':
        $r = '';
    break;
    default:
        $r =$name ;
    break;
}
if($is_return) return $r;
echo $r;
}
