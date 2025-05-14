<?php
/*
Plugin Name: Reliable Scroll to Top
Plugin URI: https://github.com/webcristal10/reliable-scroll-to-top
Description: A lightweight and styled plugin that adds a smooth "Scroll to Top" button on every page.
Version: 1.0
Author: Sadab Nafi
Author URI: https://github.com/webcristal10
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: reliable-scroll-to-top
*/

defined('ABSPATH') or die('No script kiddies please!');

// Enqueue Scripts and Styles
function reliable_scroll_to_top_enqueue() {
    wp_enqueue_script('reliable-scroll-to-top', plugin_dir_url(__FILE__) . 'scroll-to-top.js', array(), '1.0', true);
    wp_enqueue_style('reliable-scroll-to-top-style', plugin_dir_url(__FILE__) . 'style.css');
}
add_action('wp_enqueue_scripts', 'reliable_scroll_to_top_enqueue');

// Add Scroll to Top Button
function reliable_scroll_to_top_button() {
    echo '<div id="reliable-scroll-to-top" title="Scroll to top">&#8679;</div>';
}
add_action('wp_footer', 'reliable_scroll_to_top_button');
