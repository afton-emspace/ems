<?php
function blanktheme_theme_styles() {
	wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Raleway:400,500,300' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'blanktheme_theme_styles' );

add_theme_support( 'post-thumbnails' ); 
?>