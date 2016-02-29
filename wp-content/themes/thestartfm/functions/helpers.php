<?php
/* ------------------------------------------------------------
 *
 * CUSTOM HELPER FUNCTIONS
 *
 * Define any custom helper functions needed in the theme below.
 * 
 * ------------------------------------------------------------ */
 

 function getSocialIconViewbox($icon) {
    $iconSet = [
        'website' => '0 0 26 26',
        'facebook' => '0 0 25 49',
        'instagram' => '0 0 25 26',
        'twitter' => '0 0 25 22',
        'snapchat' => '0 0 25 24',
        'dribbble' => '0 0 25 25',
        'github' => '0 0 33 33',
        'rss' => '0 0 25 26'
    ];

    return $iconSet[$icon];
}