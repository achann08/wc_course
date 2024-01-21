<?php

/**
 * Kreasi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kreasi
 */

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

 function kreasi_scripts(){
	wp_enqueue_script('kreasi_enqueue_scripts', get_template_directory_uri() . '/build/index.js', array('jquery'), '1.0', true);
	wp_enqueue_style('kreasi_enqueue_style', get_template_directory_uri() . '/build/style-index.css');
//hello world
	if( !wp_script_is('jquery')){
        wp_enqueue_script('jquery');
    }

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '5.0.2', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.0.2', 'all' );
	wp_enqueue_style( 'kreasi-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
 }
 add_action( 'wp_enqueue_scripts', 'kreasi_scripts' );

 function kreasi_config(){
	register_nav_menus(
		array(
			'kreasi_main_menu' => 'Kreasi Main Menu',
			'kreasi_footer_menu' => 'Kreasi Footer Menu'
		)
	);

	add_theme_support( 'custom-logo', array(
		'height' 		=> 85,
		'width'			=> 160,
		'flex_height'	=> true,
		'flex_width'	=> true,
	) );

 }
 add_action( 'after_setup_theme', 'kreasi_config', 0 );