<?php
/*
 * Plugin Name:       Pineapple Is Delicious on Pizza
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       This plugin adds the famous "Pineapple is delicious on pizza" checkbox to the WordPress login page.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pineapple-is-delicious-on-pizza
 * Domain Path:       /languages
 */

add_action("login_form", function () {
include_once plugin_dir_path(__FILE__) . "view/pineapple-login.php";
});
