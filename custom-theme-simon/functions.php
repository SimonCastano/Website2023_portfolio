<?php
// Agregar estilos y scripts
function custom_theme_enqueue_scripts() {
    // Estilos
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css');
    
    // Scripts
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');

