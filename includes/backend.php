<?php
// Process content before rendering
add_filter('the_content', 'process_dynamic_shortcodes', 5);

// Register main shortcode
add_shortcode('dynamic_shortcode', 'dynamic_shortcode_handler');

if (!function_exists('process_dynamic_shortcodes')) {
    function process_dynamic_shortcodes($content) {
        return preg_replace_callback(
            '/\[dynamic_shortcode_(\d+)\]/i',
            function($matches) {
                return '[dynamic_shortcode id="' . $matches[1] . '"]';
            },
            $content
        );
    }
}