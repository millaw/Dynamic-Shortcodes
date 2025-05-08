<?php
if (!function_exists('dynamic_shortcode_handler')) {
    function dynamic_shortcode_handler($atts) {
        $atts = shortcode_atts(['id' => '0'], $atts);
        return sprintf(
            '<div class="dynamic-shortcode">This is the content from the shortcode %s</div>',
            esc_html($atts['id'])
        );
    }
}