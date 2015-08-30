<?php

add_theme_support( 'post-thumbnails' );

// Load the CSS files
function theme_styles() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
}

// Load the JS files, this is where you add more that will show up in the header
function theme_js() {
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js');
  wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/app.js');
}

add_action( 'wp_enqueue_scripts', 'theme_js' );
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>