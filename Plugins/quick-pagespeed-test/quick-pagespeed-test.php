<?php
/*
 * Plugin Name:       Quick PageSpeed Test 
 * Plugin URI:        https://github.com/arminamirinasab/wp-plugin-excercises
 * Description:       A user-friendly plugin that enables you to effortlessly test the page speed of any URL directly from the admin bar for each individual page and URL.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Armin Amiri Nasab
 * Author URI:        https://github.com/arminamirinasab/
 * Text Domain:       quick-pagespeed-test
 * Domain Path:       /languages
 */

function qpst_add_menu($wp_admin_bar)
{
  // Generate URL
  $qpst_link = "https://pagespeed.web.dev/analysis?url=";
  if (is_admin()) {
    $qpst_link .= home_url();
  } else {
    $qpst_link .= get_the_permalink();
  }
  // Add to admin bar
  $wp_admin_bar->add_menu([
    'id' => 'qpst-test',
    'title' => 'Quick Page Speed ​​Test ⚡',
    'href' => $qpst_link,
    'meta' => [
      'target' => '_blank'
    ]
  ]);
}
add_action("admin_bar_menu", "qpst_add_menu", 1000);
