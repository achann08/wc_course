<?php

/**
 * Kreasi Nusantara functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kreasi Nusantara
 */

function kreasi_nusantara_scripts(){
    wp_enqueue_style('kreasi-nusantara-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all');
}
add_action('wp_enqueue_scripts', 'kreasi_nusantara_scripts');