<?php
/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/

// Site URL
// Usage: [url]
function landair_shortcode_site_url($atts, $content = null) {
 return get_bloginfo('url');
}
add_shortcode('url', 'landair_shortcode_site_url');

// Theme URL
// Usage: [theme]
function landair_shortcode_theme_url($atts, $content = null) {
 return get_bloginfo('template_url');
}
add_shortcode('theme', 'landair_shortcode_theme_url');

// Permalink
// Usage: [permalink id=49]
function landair_permalink($atts) {
 extract(shortcode_atts(array(
     'id' => 1,
     'text' => ""
 ), $atts));

 if ($text) {
     $url = get_permalink($id);
     return "<a href='$url'>$text</a>";
 } else {
     return get_permalink($id);
 }
}
add_shortcode('permalink', 'landair_permalink');
