<?php
/* ------------------------------------------------------------
 *
 * THEME SUPPORT
 * 
 * Add any custom theme support or WP theme support such as
 * menus or featured images below.
 *  
 * ------------------------------------------------------------ */

// add_theme_support('bp-clean-up');
// add_theme_support('bp-login-logo');
// add_theme_support( 'post-thumbnails' ); 


add_action( 'after_setup_theme', function() {
    add_theme_support( 'bp-clean-up' );
    add_theme_support( 'bp-login-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
});