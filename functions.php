<?php
    
function my_theme_enqueue_styles() {
    
    // Add based CSS of the theme
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css');

    // Add main CSS
    wp_enqueue_style( 'child-style.css', get_stylesheet_directory_uri() . '/css/child-style.css');

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');

?>
