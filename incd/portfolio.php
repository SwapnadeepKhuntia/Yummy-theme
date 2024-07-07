<?php

// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'yummy' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'yummy' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'yummy' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'yummy' ),
		'archives' => __( 'portfolio Archives', 'yummy' ),
		'attributes' => __( 'portfolio Attributes', 'yummy' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'yummy' ),
		'all_items' => __( 'All portfolios', 'yummy' ),
		'add_new_item' => __( 'Add New portfolio', 'yummy' ),
		'add_new' => __( 'Add New', 'yummy' ),
		'new_item' => __( 'New portfolio', 'yummy' ),
		'edit_item' => __( 'Edit portfolio', 'yummy' ),
		'update_item' => __( 'Update portfolio', 'yummy' ),
		'view_item' => __( 'View portfolio', 'yummy' ),
		'view_items' => __( 'View portfolios', 'yummy' ),
		'search_items' => __( 'Search portfolio', 'yummy' ),
		'not_found' => __( 'Not found', 'yummy' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'yummy' ),
		'featured_image' => __( 'Featured Image', 'yummy' ),
		'set_featured_image' => __( 'Set featured image', 'yummy' ),
		'remove_featured_image' => __( 'Remove featured image', 'yummy' ),
		'use_featured_image' => __( 'Use as featured image', 'yummy' ),
		'insert_into_item' => __( 'Insert into portfolio', 'yummy' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'yummy' ),
		'items_list' => __( 'portfolios list', 'yummy' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'yummy' ),
		'filter_items_list' => __( 'Filter portfolios list', 'yummy' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'yummy' ),
		'description' => __( '', 'yummy' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-align-center',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );
?>