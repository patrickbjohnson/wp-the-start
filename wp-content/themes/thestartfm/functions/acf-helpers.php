<?php 

if( function_exists('acf_add_options_page') ) {
 
	$page = acf_add_options_page(array(
		'page_title' 	=> 'Podcast Settings',
		'menu_title' 	=> 'Podcast Settings',
		'menu_slug' 	=> 'podcast-settings',
		'capability' 	=> 'edit_posts',
		'icon_url'		=> 'dashicons-admin-site',
		'redirect' 		=> false
	));
 
}