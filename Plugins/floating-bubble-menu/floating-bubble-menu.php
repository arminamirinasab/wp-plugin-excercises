<?php
/*
 * Plugin Name:       Floating Bubble Menu
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       Simple ways to communicate with our beautiful floating bubble menu plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       floating-bubble-menu
 * Domain Path:       /languages
 */

// Constant variables
define("FLOATING_BUBBLE_MENU_CSS", plugin_dir_url(__FILE__) . "assets/css/menu.css");
define("FLOATING_BUBBLE_MENU_ADMIN_JS", plugin_dir_url(__FILE__) . "admin/assets/js/admin.js");
define("FLOATING_BUBBLE_MENU_ADMIN_CSS", plugin_dir_url(__FILE__) . "admin/assets/css/admin.css");
define("FLOATING_BUBBLE_MENU_VIEW", plugin_dir_path(__FILE__) . "view/menu.php");
define("FLOATING_BUBBLE_MENU_PAGE", plugin_dir_path(__FILE__) . "admin/admin.php");

define("PLUGIN_VERSION", "1.0.0");

// Add plugin menu
add_action("admin_menu", function () {
    add_menu_page("Bubble Menu", "Bubble Menu", "manage_options", "floating-bubble-menu", function () {
        include FLOATING_BUBBLE_MENU_PAGE;
    }, "dashicons-image-filter");
});

// Bubble menu
function bubble_menu_render()
{
    include FLOATING_BUBBLE_MENU_VIEW;
}
add_action("wp_footer", "bubble_menu_render");

// Enqueue bubble menu styles
add_action("wp_enqueue_scripts", function () {
    wp_enqueue_style("floating_bubble_menu", FLOATING_BUBBLE_MENU_CSS, [], PLUGIN_VERSION);
});

// Enqueue plugin menu scripts and styles
add_action("admin_enqueue_scripts", function () {
    wp_enqueue_script("floating_bubble_menu_admin", FLOATING_BUBBLE_MENU_ADMIN_JS, ["wp-color-picker"], PLUGIN_VERSION);
    wp_enqueue_style("floating_bubble_menu_admin", FLOATING_BUBBLE_MENU_ADMIN_CSS, ["wp-color-picker"], PLUGIN_VERSION);
    $codeMirrorOptions = wp_enqueue_code_editor([
        "type" => "text/html",
        "codemirror" => [
            "lint" => false
        ]
    ]);
    wp_localize_script("floating_bubble_menu_admin", "myData", json_encode($codeMirrorOptions));
});
