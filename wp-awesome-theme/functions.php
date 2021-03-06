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
add_theme_support('widgets');

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

//custom image sizes
add_image_size('blog-large', 800, 350, true);
add_image_size('blog-small', 300, 200, true);


//customize the next & prev button
add_filter('next_posts_link_attributes', 'next_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'prev_posts_link_attributes');

function next_posts_link_attributes() {
  return 'class="btn btn-secondary btn-sm"';
}

function prev_posts_link_attributes() {
	return 'class="btn btn-secondary btn-sm right"';
}

// creates a custom post type projects
add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
    register_post_type( 'projects',
    array(
		'labels' => array(
			'name' => __( 'Projects' ),
			'singular_name' => __( 'Project' ),
			'add_new' => __( 'Add New Project' ),
			'add_new_item' => __( 'Add New Project' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Project' ),
			'new_item' => __( 'New Project' ),
			'view' => __( 'View Project' ),
			'view_item' => __( 'View Project' ),
			'search_items' => __( 'Search Projects' ),
			'not_found' => __( 'No projects found' ),
			'not_found_in_trash' => __( 'No projects found in Trash' ),
			'parent' => __( 'Parent Project' ),
		),
		'public' => true,
		'show_ui' => true,
		'has_archive'=>true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-images-alt',
		// 'menu_icon' => get_stylesheet_directory_uri() . '/img/nrt-shows.png',
		'query_var' => true,
		'can_export' => true,
		'supports' => array(
			'post-thumbnails',
			'excerpts',
			'comments',
			'revisions',
			'title',
			'editor',
			'page-attributes',
			'custom-fields')
		)
    );
}


//register a taxonomy project type and attach it to post type projects
function project_type_taxonomy(){
	$args = array(
		'labels' => array(
			'name' => 'Modes' ,
			'singular_name' => 'Mode',			
			'add_new' => __( 'Add New Mode' ),
			'add_new_item' => __( 'Add New Mode' ),
			'edit' => __( 'Edit' ),
			'edit_item' => __( 'Edit Mode' ),
			'new_item' => __( 'New Mode' ),
			'view' => __( 'View Mode' ),
			'view_item' => __( 'View Mode' ),
			'search_items' => __( 'Search Mode' ),
			'not_found' => __( 'No Modes found' ),
			'not_found_in_trash' => __( 'No Modes found in Trash' ),
			'parent' => __( 'Parent Mode' ),
		),
		'public' => true,
		'hierarchical' => true,
		

	);
	register_taxonomy('Modes', array('projects'), $args);
}
add_action('init', 'project_type_taxonomy');
// register side bar

function my_sidebars(){
	register_sidebar(
		array(
			'name'=>'Page Sidebar',
			'id'=>'page_sidebar',
			'before_title'=>'<h4 class="widget-title">',
			'after_title'=>'</h4 >'
		)
	);
	register_sidebar(
		array(
			'name'=>'Blog Sidebar',
			'id'=>'blog_sidebar',
			'before_title'=>'<h4 class="widget-title">',
			'after_title'=>'</h4 >'
		)
	);
}

add_action('widgets_init', 'my_sidebars');