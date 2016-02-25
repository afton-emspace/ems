<?php
function emst_theme_styles() {
	wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Raleway:400,500,300' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'emst_theme_styles' );

function emst_theme_js() {
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );
}
//add_action( 'wp_enqueue_scripts', 'emst_theme_js' );


add_theme_support( 'post-thumbnails' ); 
?>