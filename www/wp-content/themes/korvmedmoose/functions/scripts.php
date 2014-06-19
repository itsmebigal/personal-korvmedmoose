<?php
function parhaggstrom_scripts() {
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true); 
 
    if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', XC1_THEME_STATIC_URI . 'assets/javascripts/plugins/jquery-1.8.1.min.js');
		wp_enqueue_script( 'jquery' );
		
		wp_register_script( 'modernizr', XC1_THEME_STATIC_URI . 'assets/javascripts/plugins/modernizr.custom.20465.js');
		
		wp_enqueue_script('jquery-xc1', XC1_THEME_STATIC_URI . 'assets/javascripts/main.js',array('modernizr', 'jquery'),'',true);
    }
}