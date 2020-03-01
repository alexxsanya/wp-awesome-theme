<?php

// function mat_assets() {
// 	wp_enqueue_style( 'wp-awesome-theme', get_stylesheet_uri() );
// }

// add_action( 'wp_enqueue_scripts', 'mat_assets' );

//Load stylesheets
function load_css() {
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');	

	wp_register_style('customstyle', get_template_directory_uri().'/css/custom.css', array(), false, 'all');
	wp_enqueue_style('customstyle');	
}
add_action( 'wp_enqueue_scripts', 'load_css' );

//Load Javascripts
function load_js() {
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');	
}
add_action( 'wp_enqueue_scripts', 'load_js' );

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
	)
);

// Register Custom Navigation Walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//Registering WP_Bootstrap_Navwalker as the default
// function prefix_modify_nav_menu_args( $args ) {
//     return array_merge( $args, array(
//         'walker' => WP_Bootstrap_Navwalker(),
//     ) );
// }
// add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );