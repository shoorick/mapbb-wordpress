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
    // Main style
    wp_register_style( 'leaflet',         plugins_url( 'dist/lib/leaflet.css',          __FILE__ ));
    wp_register_style( 'leaflet-draw',    plugins_url( 'dist/lib/leaflet.draw.css',     __FILE__ ));
    // for IE
    wp_register_style( 'leaflet-ie',      plugins_url( 'dist/lib/leaflet.ie.css',       __FILE__ ));
    wp_register_style( 'leaflet-draw-ie', plugins_url( 'dist/lib/leaflet.draw.ie.css',  __FILE__ ));

    // Enqueue the style:
    wp_enqueue_style( 'leaflet' );
    wp_enqueue_style( 'leaflet-draw' );

    // Enqueue conditional IE styles
    wp_enqueue_style( 'leaflet-ie' );
    wp_enqueue_style( 'leaflet-draw-ie' );

    wp_style_add_data( 'leaflet-ie',      'conditional', 'lte IE 8' );
    wp_style_add_data( 'leaflet-draw-ie', 'conditional', 'lte IE 8' );
}

function mapbb_scripts() {
    wp_register_script( 'leaflet',          plugins_url( 'dist/lib/leaflet.js',      __FILE__ ), array( 'jquery' ) );
    wp_register_script( 'leaflet-draw',     plugins_url( 'dist/lib/leaflet.draw.js', __FILE__ ) );
    wp_register_script( 'bing-map',         plugins_url( 'dist/lib/Bing.js',         __FILE__ ) );
    wp_register_script( 'mapbbcode',        plugins_url( 'dist/mapbbcode.js',        __FILE__ ) );
    wp_register_script( 'mapbbcode-config', plugins_url( 'dist/mapbbcode-config.js', __FILE__ ) );
    wp_register_script( 'mapbb-init',       plugins_url( 'init.js',                  __FILE__ ) );

/*    global $mapbb_used;
	if ( ! $mapbb_used )
        return;*/

    wp_enqueue_script(  'leaflet' );
    wp_enqueue_script(  'leaflet-draw' );
    wp_enqueue_script(  'bing-map' );
    wp_enqueue_script(  'mapbbcode' );
    wp_enqueue_script(  'mapbbcode-config' );
    wp_enqueue_script(  'mapbb-init' );
}

add_action('wp_print_styles',   'mapbb_stylesheet');
add_action('wp_enqueue_scripts', 'mapbb_scripts');


// [map]
function map_process( $atts, $content = NULL ){

    global $mapbb_used;
	$mapbb_used = true;

    if (!empty($atts[0]))
        $attr = array_shift($atts);
    $id = intval(rand());
    return
        "<div id=\"map$id\">[map$attr]$content" . "[/map]</div>"
        . "<script language=\"javascript\">if(mapBBcode) mapBBcode.show('map$id');</script>";
}

add_shortcode( 'map', 'map_process' );

?>
