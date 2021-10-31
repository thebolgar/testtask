<?php


add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );




function add_scripts_and_styles() {

    wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/assets/css/normalize.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );


	wp_deregister_script( 'jquery' );
	wp_register_script ( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
	wp_enqueue_script( 'jquery' );


	wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(jquery), null, true);
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(jquery), null, true);



}



