<?php
/*
Plugin Name: Dynamic Shortcodes
Description: Dynamic shortcode handler split into frontend/backend. Use the shortcode [dynamic_shortcode_X] to display dynamic content.
Version: 1.0
Author: Milla Wynn
Author URI: https://github.com/millaw/dynamic-shortcodes
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dynamic-shortcodes
*/

// Prevent direct access
if (!defined('ABSPATH')) exit;

// Load component files
require_once plugin_dir_path(__FILE__) . 'includes/frontend.php';
require_once plugin_dir_path(__FILE__) . 'includes/backend.php';