<?php
defined('ABSPATH') || die();

function remove_editor()
{

    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);

        switch ($template) {
            case 'page-contact.php':
            case 'page-templates/home.php':
                remove_post_type_support('page', 'editor');
                add_post_type_support('page', 'excerpt');
                break;
            default:
                break;
        }
    }
}
add_action('init', 'remove_editor');


// CATEGORY TEXT EDITOR --- START
if (is_admin()) {
    // LETS REMOVE THE HTML FILTERING
    remove_filter('pre_term_description', 'wp_filter_kses');
    remove_filter('term_description', 'wp_kses_data');
    // LETS ADD OUR NEW CAT DESCRIPTION BOX
    add_filter('post_tag_edit_form_fields', 'filter_wordpress_category_editor');
    add_filter('category_edit_form_fields', 'filter_wordpress_category_editor');
    function filter_wordpress_category_editor($tag)
    {
?>
<style>
    .form-field.term-description-wrap{
        display:none !important;
    }
</style>
        <table class="form-table">
            <tr class="form-field">
                <th scope="row" valign="top"><label for="description"><?php _ex('Description', 'Taxonomy Description'); ?></label></th>
                <td>
                    <?php
                    $settings = array('wpautop' => true, 'media_buttons' => true, 'quicktags' => true, 'textarea_rows' => '15', 'textarea_name' => 'description');
                    wp_editor(html_entity_decode($tag->description, ENT_QUOTES, 'UTF-8'), 'description1', $settings);
                    ?>
                    <br />
                    <span class="description"><?php _e('The description is not prominent by default; however, some themes may show it.'); ?></span>
                </td>
            </tr>
        </table>
        <?php
    }
    // HIDE THE DEFAULT CAT DESCRIPTION BOX USING JQUERY
    add_action('admin_head', 'remove_default_category_description');
    function remove_default_category_description()
    {
        global $current_screen;
        if ($current_screen->id == 'edit-category') {
        ?>
            <script type="text/javascript">
                jQuery(function($) {
                    $('textarea#description').closest('tr.form-field').remove();
                });
            </script>
<?php
        }
    }
}
    // CATEGORY TEXT EDITOR --- END