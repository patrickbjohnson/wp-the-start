<?php


function episode_init() {

	$labels = array(
		'name'                => _x( 'Episodes', 'Post Type General Name', 'The Start' ),
		'singular_name'       => _x( 'Episode', 'Post Type Singular Name', 'The Start' ),
		'menu_name'           => __( 'Episodes', 'The Start' ),
		'name_admin_bar'      => __( 'Episodes', 'The Start' ),
		'parent_item_colon'   => __( 'Parent Item:', 'The Start' ),
		'all_items'           => __( 'All Items', 'The Start' ),
		'add_new_item'        => __( 'Add New Item', 'The Start' ),
		'add_new'             => __( 'Add New', 'The Start' ),
		'new_item'            => __( 'New Item', 'The Start' ),
		'edit_item'           => __( 'Edit Item', 'The Start' ),
		'update_item'         => __( 'Update Item', 'The Start' ),
		'view_item'           => __( 'View Item', 'The Start' ),
		'search_items'        => __( 'Search Item', 'The Start' ),
		'not_found'           => __( 'Not found', 'The Start' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'The Start' ),
	);
	$args = array(
		'label'               => __( 'episode', 'The Start' ),
		'description'         => __( 'Individual podcast episode', 'The Start' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'rewrite'            => array( 'slug' => 'episodes' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-heart',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'episode', $args );

}
add_action( 'init', 'episode_init', 0 );
