<?php
/* ------------------------------------------------------------
 *
 * CUSTOM MENUS
 * 
 * Register any custom menus needed by the theme below.
 * 
 * ------------------------------------------------------------ */
 
 function site_menu() {
   register_nav_menu('site-menu',__( 'Footer Menu' ));
 }
 add_action( 'init', 'site_menu' );