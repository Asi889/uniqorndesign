<?php
defined('ABSPATH') || die();


function get_img_html($p, $lazy = true, $size = 'full', $class = '')
{

    $img = new canaan_image($p, $size);

    if (!$img || !$img->isValid()) return;
    if ($lazy) {
        // return '<img loading="lazy" data-src="'.$img->get_sized_url().'" class="lazyload" width="'.$img->get_width().'" height="'.$img->get_height().'" alt="'.esc_attr( $img->get_alt()).'">';
        return $img->get_img_html($size, $lazy, $class);
    } else {
        return '<img  src="' . $img->get_sized_url($size) . '" alt="' . esc_attr($img->get_alt()) . '"  title="' . esc_attr($img->get_caption()) . '" class=" ' . $class . '">';
    }
}
function get_img_src($id, $size = 'full')
{

    $img = new canaan_image($id, $size);
    if (!$img || !$img->isValid()) return;
    return $img->get_url($size);
}

class canaan_image
{
    private $ID = false;
    private $src_full = false;
    private $width_full = false;
    private $height_full = false;
    private $title = false;
    private $caption = false;
    private $is_pdf = false;
    private $metaData = false;
    private $attachData = false;
    private $isValid = true;

    function __construct($img_id, $size = 'full')
    {

        $img_id = (int)$img_id;
        if (is_numeric($img_id)) {
            $img_ind = (int)$img_id;
            if ($img_ind <= 0) {
                $this->isValid = false;

                return;
            }

            $this->ID = $img_id;

            $img = wp_get_attachment_image_src($this->ID, $size);
            if ($img === false) {
                $pst = get_post($img_id);
                if ($pst && $pst->post_type == 'attachment' && $pst->post_mime_type == 'application/pdf') {
                    $this->src_full = wp_get_attachment_url($img_id);
                }
                if ($this->src_full !== false) {
                    $this->is_pdf = true;
                }
            }
            if (!$this->is_pdf) {
                if ($img === false || !is_array($img)) {
                    return false;
                }

                $this->src_full = $img[0];
                $this->width_full = $img[1];
                $this->height_full = $img[2];
            }

            $cc_s = get_post($this->ID);

            $this->title = $cc_s->post_title;
            if (empty($this->title)) {
                $this->title = false;
            }

            $this->caption = $cc_s->post_excerpt;
            if (empty($this->caption)) {
                $this->caption = false;
            }

            $this->metaData = get_post_custom($this->ID);
            if (key_exists('_wp_attachment_metadata', $this->metaData)) {
                $this->attachData = unserialize($this->metaData['_wp_attachment_metadata'][0]);
            }
        } else {
            $this->isValid = false;
        }
    }

    public function get_url($size)
    {

        return $this->src_full;
    }
    public function get_sized_url($width = false, $height = false)
    {
        if ($this->src_full == false || empty($this->src_full)) {
            return false;
        }

        if ($height === false && $width == false) {
            return $this->src_full;
        }

        if ($height === false) {
            $height = intval($this->height_full * $width / $this->width_full);
        }

        if ($width === false) {
            $width = intval($this->width_full * $height / $this->height_full);
        }

        if (preg_match('/(.*).(jpg|png)\z/', $this->src_full, $matches) && count($matches) == 3) {
            return $matches[1] . '_wo_' . $width . '_' . $height . '.' . $matches[2];
        }

        return $this->src_full;
    }

    public function isValid()
    {
        return $this->isValid;
    }

    public function get_ratio()
    {
        return $this->width_full / $this->height_full;
    }

    public function is_acceptable_ratio($ratio)
    {
        return abs($this->get_ratio() - $ratio) < 0.05;
    }

    public function get_width()
    {
        return $this->width_full;
    }

    public function is_pdf()
    {
        return $this->is_pdf;
    }

    public function get_height()
    {
        return $this->height_full;
    }

    public function get_title()
    {
        return $this->title;
    }

    public function get_caption()
    {
        return $this->caption;
    }

    public function get_alt()
    {
        if (is_array($this->metaData) && key_exists('_wp_attachment_image_alt', $this->metaData)) {
            return $this->metaData['_wp_attachment_image_alt'][0];
        }
        if (isset($this->title) && $this->title) {
            return $this->title;
        }

        return false;
    }
    public function get_url_originalImage()
    {
        return $this->src_full;
    }

    public function get_img_tag_by_size($size_slug, $lazy = true)
    {

        $img = wp_get_attachment_image_src($this->ID, $size_slug);

        if ($img === false || !is_array($img))
            $url = $this->src_full;
        else
            $url = $img[0];


        if ($url == false) {
            return false;
        }

        $alt = $this->get_alt();
        $title = $this->get_title();

        $html = '<img ' . ($lazy ? 'loading="lazy" ' : '') . ' src="' . esc_attr($url) . '" ';
        if (!empty($addClass)) {
            $html .= ' class="' . $addClass . '" ';
        }

        if ($alt != false && !empty($alt)) {
            $html .= ' alt="' . esc_attr($alt) . '" ';
        }


        $html .= ' />';

        return $html;
    }

    public function get_img_tag_sized($width = false, $height = false, $addClass = '', $islazey = false)
    {

        $url = $this->get_sized_url($width, $height);

        if ($url == false) {
            return false;
        }

        $alt = $this->get_alt();
        $title = $this->get_title();

        $html = '<img src="' . esc_attr($url) . '" ';
        if (!empty($addClass)) {
            $html .= ' class="' . $addClass . '" ';
        }

        if ($alt != false && !empty($alt)) {
            $html .= ' alt="' . esc_attr($alt) . '" ';
        }

        $html .= ' ' . ($islazey ? 'loading="lazy" ' : '') . ' />';

        return $html;
    }

    public function get_img_html($size_slug = 'full', $lazy = true, $class = '')
    {
        $img = wp_get_attachment_image_src($this->ID, $size_slug);

        if ($img === false || !is_array($img)) {
            $url = $this->src_full;
        } else {
            $url = $img[0];
        }

        $is_gif = str_ends_with(basename($url), '.gif');
        if ($is_gif) {
            $img = wp_get_attachment_image_src($this->ID, 'full');
            $url = $img[0];
        }



        $alt = $this->get_alt();
        $title = $this->get_title();
        $caption = $this->get_caption();

        $html = '';
        $html .= '<img src="' . esc_attr($url) . '" ';
        if ($alt != false && !empty($alt)) {
            $html .= ' alt="' . esc_attr($alt) . '" ';
        } else {
            $html .= ' alt="' . esc_attr($title) . '" ';
        }

        $html .= ' width="' . $this->get_width() . '" height="' . $this->get_height() . '"';

        $html .= ' title="' . esc_attr($caption) . '"';
        $html .= ' class=" ' . $class . '"';
        $html .= ' ' . ($lazy ? 'loading="lazy" ' : '') . ' />';



        return $html;
    }
    public function get_html_sized_wcaption($size_slug = null, $addClass = '', $islazey = false)
    {

        $img = wp_get_attachment_image_src($this->ID, $size_slug);

        if ($img === false || !is_array($img)) {
            $url = $this->src_full;
        } else {
            $url = $img[0];
        }

        $alt = $this->get_alt();
        $title = $this->get_title();
        $caption = $this->get_caption();

        $html = '';
        if (mb_strlen($caption)) {
            $html .= '<div class="img_w_caption">';
        }

        $html .= '<img src="' . esc_attr($url) . '" ';
        if (!empty($addClass)) {
            $html .= ' class="' . $addClass . '" ';
        }

        if ($alt != false && !empty($alt)) {
            $html .= ' alt="' . esc_attr($alt) . '" ';
        }


        $html .= ' ' . ($islazey ? 'loading="lazy" ' : '') . ' />';

        $html .= ' />';


        if (mb_strlen($caption)) {
            $html .= '<p class="img_caption_gen">' . $caption . '</p></div>';
        }


        return $html;
    }
}


function canaan_add_image_sizes()
{
    add_theme_support('post-thumbnails');
    // add_image_size('1920X580', 1920, 580, true);
    $images = [
        ['name' => '424X250', 'crop' => false],
        ['name' => '445X256', 'crop' => false]
    ];
    foreach ($images as $key => $img) {
        $sizes = explode('X', $img['name']);
        add_image_size($img['name'], $sizes[0], $sizes[1], $img['crop']);
    }
}
add_action('after_setup_theme', 'canaan_add_image_sizes');




/*
 * Allow SVG uploads
 */
function add_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_mime_types');
// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );