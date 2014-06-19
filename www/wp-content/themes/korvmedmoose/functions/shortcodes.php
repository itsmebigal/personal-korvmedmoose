<?php

//////////////////////////////////////////////////////////////
// Column Shortcodes
/////////////////////////////////////////////////////////////

function ttrust_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode(wpautop($content)) . '</div>';
}
add_shortcode('one_third', 'ttrust_one_third');

function ttrust_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode(wpautop($content)) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_third_last', 'ttrust_one_third_last');

function ttrust_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode(wpautop($content)) . '</div>';
}
add_shortcode('two_third', 'ttrust_two_third');

function ttrust_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode(wpautop($content)) . '</div><div class="clearboth"></div>';
}
add_shortcode('two_third_last', 'ttrust_two_third_last');

function ttrust_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode(wpautop($content)) . '</div>';
}
add_shortcode('one_half', 'ttrust_one_half');

function ttrust_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode(wpautop($content)) . '</div><div class="clearboth"></div>';
}
add_shortcode('one_half_last', 'ttrust_one_half_last');


?>