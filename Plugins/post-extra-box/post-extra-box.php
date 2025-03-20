<?php
/*
 * Plugin Name:       Post Extra Box
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises
 * Description:       Adds a custom meta box to posts, allowing authors to enter an additional title and text. Perfect for adding extra details, summaries, or notes.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       post-extra-box
 * Domain Path:       /languages
 */

define("POST_EXTRA_BOX_ADMIN_PATH", plugin_dir_path(__FILE__) . "admin/");

// Add Extra Meta Box
add_action("add_meta_boxes", function () {
    add_meta_box(
        "post-extra-box",
        "Post Extra Box",
        function ($post) {
            $postExtraBoxTitle = get_post_meta($post->ID, "post_extra_box_title", true);
            $postExtraBoxDescription = get_post_meta($post->ID, "post_extra_box_description", true);

            include POST_EXTRA_BOX_ADMIN_PATH . "metabox/extra-box.php";
        },
        "post",
        "side",
        "high",
    );
});

// Save Extra MetaBox
add_action("save_post", function ($post_id, $post, $update) {
    if ($_POST['post-extra-box-title'] != '' && $_POST['post-extra-box-description'] != '' && $update === true) {
        update_post_meta($post_id, "post_extra_box_title", $_POST['post-extra-box-title']);
        update_post_meta($post_id, "post_extra_box_description", $_POST['post-extra-box-description']);
    }
}, 10, 3);

// Show ExtraBox 
add_filter("the_content", function ($content) {
    $postExtraBoxTitle = get_post_meta(get_the_ID(), "post_extra_box_title", true);
    $postExtraBoxDescription = get_post_meta(get_the_ID(), "post_extra_box_description", true);

    if ($postExtraBoxDescription || $postExtraBoxTitle) {
        $content .=  "
        <style>
        div.post-extra-box {
        padding: 20px;
        border: dashed 2px #CCC;
        border-radius: 10px;
        box-sizing: border-box;
        }

        div.post-extra-box > span {
        font-size: 24px;
        font-weight: bold;
        }
        </style>

        <p>
        <div class='post-extra-box'>
        <span>$postExtraBoxTitle</span>
        <p>$postExtraBoxDescription</p>
        </div>
        </p>";
    }
    return $content;
});
