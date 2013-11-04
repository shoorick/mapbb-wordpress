<?php
/*
Plugin Name: MapBBCode for WordPress
Plugin URI: http://shoorick.ru/software/mapbb-wordpress
Description: Allows use [map] codes for Leaflet maps embedding info pages
Version: 0.1
Author: Alexander Sapozhnikov
Author URI: http://shoorick.ru/
*/


function mapbb_stylesheet() {
    // Register the style like this for a plugin:
    wp_register_style( 'mapbbcode',
        plugins_url( '/mapbb-wordpress/mapbbcode/leaflet.css', __FILE__ ),
        array()
    );
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'mapbbcode' );
}
add_action('wp_print_styles', 'mapbb_stylesheet');

function mapbb_scripts() {
    // Register the script like this for a plugin:
    wp_register_script( 'leaflet',      plugins_url( '/mapbbcode/leaflet.js' ), array( 'jquery' ) );
    wp_register_script( 'leaflet-draw', plugins_url( '/mapbbcode/leaflet.draw.js' ) );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script(  'leaflet' );
    wp_enqueue_script(  'leaflet-draw' );
}
add_action( 'wp_enqueue_scripts', 'mapbb_scripts' );


// [map]
function map_process( $atts, $content = NULL ){


    if (!empty($atts[0]))
        $attr = array_shift($atts);
    $id = intval(rand());
    return
        "<div id=\"map$id\">[map$attr]$content" . "[/map]</div>"
        . "<script language=\"javascript\">if(mapBBcode) mapBBcode.show('map$id');</script>";
}

add_shortcode( 'map', 'map_process' );

?>
