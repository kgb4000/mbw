<?php

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' ); 

function register_theme_menus() {

	register_nav_menus(
		array(
					'primary-menu' => ( 'Primary Menu' )
			)
		);
}

add_action( 'init', 'register_theme_menus' );

function mbw_theme_styles() {

	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css');

	wp_enqueue_style( 'more_css', get_template_directory_uri() . '/css/main.css');

	wp_enqueue_style( 'lightbox_css', get_template_directory_uri() . '/css/lightbox.css');

	wp_enqueue_style( 'google_css', 'http://fonts.googleapis.com/css?family=Open+Sans' );

	wp_enqueue_style( 'quicksand_css', 'https://fonts.googleapis.com/css?family=Quicksand:400,300,700' );

	wp_enqueue_style( 'great-vibes_css', 'https://fonts.googleapis.com/css?family=Great+Vibes' );

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}

add_action( 'wp_enqueue_scripts', 'mbw_theme_styles');

function mbw_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', '', '', false);

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);

	wp_enqueue_script( 'plugins_js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '', true);

	wp_enqueue_script( 'packery_js', get_template_directory_uri() . '/js/packery.min.js', array('jquery'), '', true);

}

add_action( 'wp_enqueue_scripts', 'mbw_theme_js');

?>