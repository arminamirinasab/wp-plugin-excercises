<?php
/*
 * Plugin Name:       Learn Tab
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       This plugin adds a reference to <a href="https://learn.wordpress.org/">learn.wordpress.org</a> tutorials to the Help section of your WordPress dashboard.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * Text Domain:       learn-tab
 * Domain Path:       /languages
 */

define('LEARN_TAB_HELP', plugin_dir_path(__FILE__) . "admin/help.php");

// Add Help Tab
add_action("load-index.php", function () {
    $DashboardScreen = get_current_screen();
    $DashboardScreen->add_help_tab([
        "title" => "Learn WordPress",
        "id" => "learn-tab",
        "priority" => 15,
        "callback" => function () {
            include LEARN_TAB_HELP;
        }
    ]);
});

// Add Help Sidebar
add_action("admin_head-index.php", function() {
    $DashboardScreen = get_current_screen();
    $DashboardScreen->set_help_sidebar($DashboardScreen->get_help_sidebar() . "<p><a href='https://learn.wordpress.org/'>Learn.wordpress.org</a></p>");
});