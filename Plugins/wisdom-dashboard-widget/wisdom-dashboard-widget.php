<?php
/*
 * Plugin Name:       Wisdom Dashboard Widget
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       Display a random inspirational quote on your dashboard.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wisdom-dashboard-widget
 * Domain Path:       /languages
 */

define("WISDOM_WIDGET_VIEW", plugin_dir_path(__FILE__) . "admin/widget.php");
add_action("wp_dashboard_setup", function () {
    // Add Widget
    wp_add_dashboard_widget(
        "wisdom-widget",
        "Today Wisdom",
        function () {
            include WISDOM_WIDGET_VIEW;
        },
        null,
        "normal",
        "high"
    );
});
