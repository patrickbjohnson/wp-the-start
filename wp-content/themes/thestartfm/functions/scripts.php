<?php
/* ------------------------------------------------------------
 *
 * JAVASCRIPT ENQUEUEING
 * 
 * Enqueue all Javascript files required by the theme below.
 * 
 * ------------------------------------------------------------ */

add_action('wp_enqueue_scripts', function() {
	$js_dir = getenv('ENV') == 'production' ? 'dist' : 'built';

    /*-------------------------------------------- */
    /** Deregistration */
    /*-------------------------------------------- */



    /*-------------------------------------------- */
    /** Head Scripts */
    /*-------------------------------------------- */
    wp_enqueue_script( 'mordernizr', BPAssetHelper::get_js('lib/modernizr.min.js'), null, null, true );


    /*-------------------------------------------- */
    /** Footer Scripts */
    /*-------------------------------------------- */

    wp_enqueue_script( 'vendor', BPAssetHelper::get_js("$js_dir/vendor.bundle.js"), null, null, true );
    wp_enqueue_script( 'svg', BPAssetHelper::get_js('lib/svg4everybody.min.js'), array('vendor'), null, true );
    wp_enqueue_script( 'main', BPAssetHelper::get_js("$js_dir/main.bundle.js"), array('vendor', 'svg'), null, true );

});