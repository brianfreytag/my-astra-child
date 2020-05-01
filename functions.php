<?php
/**
 * BrianFreytag.com Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BrianFreytag.com
 * @since 1
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_BRIAN_CHILD_VERSION', '1' );

/**
 * Enqueue styles
 */
function brian_child_enqueue_styles() {

	wp_enqueue_style( 'brian-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_BRIAN_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'brian_child_enqueue_styles', 15 );
