<?php
/*
 * Plugin Name:       Last User Login Tracker
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises/
 * Description:       A simple plugin to track the last login time of users on your WordPress site, To view the last login date, visit the user edit page.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       last-user-login-tracker
 * Domain Path:       /languages
 */

// Show user last login
function add_last_login_field($user)
{
    $lastUserLogin = get_user_meta($user->ID, "last_user_login", true);
    echo "
    <table class='form-table'>
    <hr>
    <tbody>
    <tr>
    <th>Last Login: </th>
    <td><b>$lastUserLogin</b></td>
    </tr>
    </tbody>
    </table>
    <hr>
    ";
}
add_action("personal_options", "add_last_login_field");

// Save user last login
add_action("wp_login", function ($username, $user) {
    update_user_meta($user->ID, "last_user_login", wp_date(get_option( 'date_format' ) . " " . get_option( 'time_format' )));
}, 10, 2);
