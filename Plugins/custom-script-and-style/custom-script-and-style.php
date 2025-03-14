<?php
/*
 * Plugin Name:       Custom Script & Style
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       A plugin to add CSS and JavaScript code to your WordPress website.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * Text Domain:       csas
 * Domain Path:       /languages
 */

define("CSAS_PATH", plugin_dir_path(__FILE__));

// Add menu and include page
add_action("admin_menu", function () {
    add_menu_page("Custom CSS / JS", "Custom CSS / JS", "manage_options", "csas", function () {
        include CSAS_PATH . "/view/admin.php";
    }, "dashicons-editor-code");
});

// Add styles to front
if (get_option('csas-style')) {
    add_action("wp_head", function () {
        echo "<style>" . get_option('csas-style')  . "</style>";
    });
}

// Add scripts to front
if (get_option('csas-script')) {
    add_action("wp_footer", function () {
        echo "<script>" . get_option('csas-script')  . "</script>";
    });
}