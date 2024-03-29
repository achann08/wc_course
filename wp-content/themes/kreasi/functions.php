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

	if( !wp_script_is('jquery')){
        wp_enqueue_script('jquery');
    }

	wp_enqueue_style( 'dashicons' );

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


 add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args, $depth ) {
    // Cek jika menu item memiliki submenu

    if ( in_array( 'menu-item-has-children', $item->classes ) ) {
		$args->before = '<div class="btn-group" style="flex-direction: row-reverse;">';
		// $args->before .= '<a href="'.$item->url.'" class="nav-link">'.$item->title.'</a>';
        $atts['class'] .= ' dropdown-toggle dropdown-toggle-split';
		// Tambahkan data-toggle dan aria-haspopup ke atribut
		$atts['data-toggle'] = 'dropdown';
		$atts['aria-haspopup'] = 'true';
    }
    // Kembalikan array $atts yang telah dimodifikasi
    return $atts;
}, 10, 4 );

add_filter( 'nav_menu_item_title', function( $title, $item, $args, $depth ) {
    // Cek jika menu item memiliki submenu
    if ( in_array( 'menu-item-has-children', $item->classes ) ) {
        // Bungkus judul dengan elemen <span> yang memiliki class visually-hidden
        $title = '<span class="visually-hidden">' . esc_html__( 'Toggle Dropdown', 'your-text-domain' ) . '</span>';
        // Tambahkan elemen <a> untuk tautan menu
        $title .= '<a href="' . esc_url( $item->url ) . '" class="nav-link">' . esc_html( $item->title ) . '</a>';
        // Tambahkan div penutup untuk btn-group
        $args->after = '</div>';
    }
    // Kembalikan judul yang telah dimodifikasi
    return $title;
}, 10, 4 );
