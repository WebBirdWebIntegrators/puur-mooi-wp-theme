<?php

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support( 'menus' );
add_theme_support( 'woocommerce' );

load_theme_textdomain( 'eagle', get_template_directory_uri() .'/languages' );

if ( ! isset( $content_width ) )
	$content_width = 600;

/*
function editor_style() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'editor_style' );
*/

function eagle_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/css/wordpress.css' );
}
add_action( 'login_enqueue_scripts', 'eagle_login_stylesheet' );

function eagle_login_logo_url() {
    return 'http://www.webbird.be';
}
add_filter( 'login_headerurl', 'eagle_login_logo_url' );

function eagle_login_logo_url_title() {
    return 'WEBBIRD | Website & webshop architects';
}
add_filter( 'login_headertitle', 'eagle_login_logo_url_title' );

/*
define ('PARENT',get_template_directory_uri());
define ('CHILD',get_stylesheet_directory_uri());

function eagle_child_enqueue_scripts(){
	wp_register_style('parent-style',PARENT.'/css/styles.css','','all');
	wp_register_style('child-style', CHILD.'/css/styles.css','','all');

	wp_enqueue_style('parent-style');
	wp_enqueue_style('child-style');
}

add_action('wp_enqueue_scripts','eagle_child_enqueue_scripts');
*/


add_action('wp_enqueue_scripts', 'eagle_scripts');

function eagle_scripts() {
	wp_enqueue_script('jquery');

	wp_register_style( 'eagle-styles', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style('eagle-styles');

	wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style('fontawesome');

	wp_register_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script('flexslider');
}

//require_once('functions-inc/wordpress-dashboard.php'); // WordPress dashboard settings
//require_once('functions-inc/woocommerce.php'); // WooCommerce functions
//require_once('functions-inc/breadcrumbs.php'); // Breadcrumbs functions
//require_once('functions-inc/plugins/gravity-forms.php'); // Gravity Forms settings
//require_once('functions-inc/plugins/wpml.php'); // WPML settings

function eagle_editor_manage_users() {
    $role_editor = get_role('editor');
    $role_editor->add_cap('create_users');
    $role_editor->add_cap('edit_users');
    $role_editor->add_cap('delete_users');
    $role_editor->remove_cap('edit_theme_options');
}
add_action('admin_init','eagle_editor_manage_users');




function webbird_arrangements() {
	register_post_type('arrangements', array(
		'labels' => array(
			'name' => __( 'Arrangementen' ),
			'singular_name' => __( 'Arrangement' ),
			'add_new' => __( 'Add' ),
			'edit_item' => __( 'Edit' )
		),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => false,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'arrangementen' ),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			//'custom-fields',
			'excerpt',
			'thumbnail',
			'page-attributes',)
		)
	);
}

add_action( 'init', 'webbird_arrangements' );

function webbird_massages() {
	register_post_type('massages', array(
		'labels' => array(
			'name' => __( 'Massages' ),
			'singular_name' => __( 'Massage' ),
			'add_new' => __( 'Add' ),
			'edit_item' => __( 'Edit' )
		),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => false,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'massages' ),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			//'custom-fields',
			'excerpt',
			'thumbnail',
			'page-attributes',)
		)
	);
}

add_action( 'init', 'webbird_massages' );

function webbird_treatments() {
	register_post_type('treatments', array(
		'labels' => array(
			'name' => __( 'Behandelingen' ),
			'singular_name' => __( 'Behandeling' ),
			'add_new' => __( 'Add' ),
			'edit_item' => __( 'Edit' )
		),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => false,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'treatments' ),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			//'custom-fields',
			'excerpt',
			'thumbnail',
			'page-attributes',)
		)
	);
}

add_action( 'init', 'webbird_treatments' );

add_action( 'init', 'webbird_taxonomies_treatments', 0 );

function webbird_taxonomies_treatments() {
	$labels = array(
		'name'              => _x( 'Categories', '' ),
		'singular_name'     => _x( 'Category', '' ),
		'search_items'      => __( 'Search' ),
		'all_items'         => __( 'All' ),
		'parent_item'       => __( 'Categories' ),
		'parent_item_colon' => __( 'Categories' ),
		'edit_item'         => __( 'Edit' ),
		'update_item'       => __( 'Update' ),
		'add_new_item'      => __( 'Add' ),
		'new_item_name'     => __( 'New' ),
		'menu_name'         => __( 'Categories' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type-treatment' ),
	);
	register_taxonomy( 'webbird_taxonomies_treatments', 'treatments' , $args );
}

add_action( 'init', 'webbird_cures' );

function webbird_cures() {
	register_post_type('cures', array(
		'labels' => array(
			'name' => __( 'Kuren' ),
			'singular_name' => __( 'Kuur' ),
			'add_new' => __( 'Add' ),
			'edit_item' => __( 'Edit' )
		),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => false,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array( 'slug' => 'cures' ),
		'query_var' => true,
		'supports' => array(
			'title',
			'editor',
			//'custom-fields',
			'excerpt',
			'thumbnail',
			'page-attributes',)
		)
	);
}

add_action( 'init', 'webbird_taxonomies_cures', 0 );

function webbird_taxonomies_cures() {
	$labels = array(
		'name'              => _x( 'Categories', '' ),
		'singular_name'     => _x( 'Category', '' ),
		'search_items'      => __( 'Search' ),
		'all_items'         => __( 'All' ),
		'parent_item'       => __( 'Categories' ),
		'parent_item_colon' => __( 'Categories' ),
		'edit_item'         => __( 'Edit' ),
		'update_item'       => __( 'Update' ),
		'add_new_item'      => __( 'Add' ),
		'new_item_name'     => __( 'New' ),
		'menu_name'         => __( 'Categories' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'type-cure' ),
	);
	register_taxonomy( 'webbird_taxonomies_cures', 'cures' , $args );
}

if ( ! function_exists('webbird_epilaties') ) {

// Register Custom Post Type
function webbird_epilaties() {

	$labels = array(
		'name'                => _x( 'Epilaties', 'Post Type General Name', 'puurmooi' ),
		'singular_name'       => _x( 'Epilatie', 'Post Type Singular Name', 'puurmooi' ),
		'menu_name'           => __( 'Epilaties', 'puurmooi' ),
		'name_admin_bar'      => __( 'Epilaties', 'puurmooi' ),
		'parent_item_colon'   => __( 'Parent Item:', 'puurmooi' ),
		'all_items'           => __( 'All Items', 'puurmooi' ),
		'add_new_item'        => __( 'Add New Item', 'puurmooi' ),
		'add_new'             => __( 'Add New', 'puurmooi' ),
		'new_item'            => __( 'New Item', 'puurmooi' ),
		'edit_item'           => __( 'Edit Item', 'puurmooi' ),
		'update_item'         => __( 'Update Item', 'puurmooi' ),
		'view_item'           => __( 'View Item', 'puurmooi' ),
		'search_items'        => __( 'Search Item', 'puurmooi' ),
		'not_found'           => __( 'Not found', 'puurmooi' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'puurmooi' ),
	);
	$rewrite = array(
		'slug'                => 'epilatie',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Epilatie', 'puurmooi' ),
		'description'         => __( 'Epilaties', 'puurmooi' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'epilatie', $args );

}
add_action( 'init', 'webbird_epilaties', 0 );

}

if ( ! function_exists('webbird_handverzorgingen') ) {

// Register Custom Post Type
function webbird_handverzorgingen() {

	$labels = array(
		'name'                => _x( 'Handverzorgingen', 'Post Type General Name', 'puurmooi' ),
		'singular_name'       => _x( 'Handverzorging', 'Post Type Singular Name', 'puurmooi' ),
		'menu_name'           => __( 'Handverzorgingen', 'puurmooi' ),
		'name_admin_bar'      => __( 'Handverzorgingn', 'puurmooi' ),
		'parent_item_colon'   => __( 'Parent Item:', 'puurmooi' ),
		'all_items'           => __( 'All Items', 'puurmooi' ),
		'add_new_item'        => __( 'Add New Item', 'puurmooi' ),
		'add_new'             => __( 'Add New', 'puurmooi' ),
		'new_item'            => __( 'New Item', 'puurmooi' ),
		'edit_item'           => __( 'Edit Item', 'puurmooi' ),
		'update_item'         => __( 'Update Item', 'puurmooi' ),
		'view_item'           => __( 'View Item', 'puurmooi' ),
		'search_items'        => __( 'Search Item', 'puurmooi' ),
		'not_found'           => __( 'Not found', 'puurmooi' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'puurmooi' ),
	);
	$rewrite = array(
		'slug'                => 'handverzorging',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Handverzorging', 'puurmooi' ),
		'description'         => __( 'Handverzorgingen', 'puurmooi' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'handverzorging', $args );

}
add_action( 'init', 'webbird_handverzorgingen', 0 );

}

if ( ! function_exists('webbird_voetverzorgingen') ) {

// Register Custom Post Type
function webbird_voetverzorgingen() {

	$labels = array(
		'name'                => _x( 'Voetverzorgingen', 'Post Type General Name', 'puurmooi' ),
		'singular_name'       => _x( 'Voetverzorging', 'Post Type Singular Name', 'puurmooi' ),
		'menu_name'           => __( 'Voetverzorgingen', 'puurmooi' ),
		'name_admin_bar'      => __( 'Voetverzorgingn', 'puurmooi' ),
		'parent_item_colon'   => __( 'Parent Item:', 'puurmooi' ),
		'all_items'           => __( 'All Items', 'puurmooi' ),
		'add_new_item'        => __( 'Add New Item', 'puurmooi' ),
		'add_new'             => __( 'Add New', 'puurmooi' ),
		'new_item'            => __( 'New Item', 'puurmooi' ),
		'edit_item'           => __( 'Edit Item', 'puurmooi' ),
		'update_item'         => __( 'Update Item', 'puurmooi' ),
		'view_item'           => __( 'View Item', 'puurmooi' ),
		'search_items'        => __( 'Search Item', 'puurmooi' ),
		'not_found'           => __( 'Not found', 'puurmooi' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'puurmooi' ),
	);
	$rewrite = array(
		'slug'                => 'voetverzorging',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'Voetverzorging', 'puurmooi' ),
		'description'         => __( 'Voetverzorgingen', 'puurmooi' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'voetverzorging', $args );

}
add_action( 'init', 'webbird_voetverzorgingen', 0 );

}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Options',
		'menu_title'	=> 'Options',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

?>
