<?php

/******************************
* css
******************************/

function cz_stylesheet() {   
    // For either a plugin or a theme, you can then enqueue the style:  
    wp_enqueue_style( 'cz-styles', plugin_dir_url(__FILE__)  . 'css/style.css');  
}  
add_action( 'wp_enqueue_scripts', 'cz_stylesheet' );

?>