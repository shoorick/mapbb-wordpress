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
    wp_register_style( 'leaflet',      plugins_url( '/mapbb-wordpress/dist/lib/leaflet.css' ));
    wp_register_style( 'leaflet-draw', plugins_url( '/mapbb-wordpress/dist/lib/leaflet.draw.css' ));
    // for IE
    wp_register_style( 'leaflet-ie',      plugins_url( '/mapbb-wordpress/dist/lib/leaflet.ie.css' ));
    wp_register_style( 'leaflet-draw-ie', plugins_url( '/mapbb-wordpress/dist/lib/leaflet.draw.ie.css' ));

    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'leaflet' );
    wp_enqueue_style( 'leaflet-draw' );

    // Enqueue conditional IE styles
    wp_enqueue_style( 'leaflet-ie' );
    wp_enqueue_style( 'leaflet-draw-ie' );

    wp_style_add_data( 'leaflet-ie', 'conditional', 'lte IE 8' );
    wp_style_add_data( 'leaflet-draw-ie', 'conditional', 'lte IE 8' );
}

function mapbb_scripts() {
    // Register the script like this for a plugin:
    wp_register_script( 'leaflet',          plugins_url( '/mapbb-wordpress/dist/lib/leaflet.js' ), array( 'jquery' ) );
    wp_register_script( 'leaflet-draw',     plugins_url( '/mapbb-wordpress/dist/lib/leaflet.draw.js' ) );
    wp_register_script( 'bing-map',         plugins_url( '/mapbb-wordpress/dist/lib/Bing.js' ) );
    wp_register_script( 'mapbbcode',        plugins_url( '/mapbb-wordpress/dist/mapbbcode.js' ) );
    wp_register_script( 'mapbbcode-config', plugins_url( '/mapbb-wordpress/dist/mapbbcode-config.js' ) );
    wp_register_script( 'mapbb-init',       plugins_url( '/mapbb-wordpress/init.js' ) );

    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script(  'leaflet' );
    wp_enqueue_script(  'leaflet-draw' );
    wp_enqueue_script(  'bing-map' );
    wp_enqueue_script(  'mapbbcode' );
    wp_enqueue_script(  'mapbbcode-config' );
    wp_enqueue_script(  'mapbb-init' );
}

add_action('wp_print_styles',    'mapbb_stylesheet');
add_action('wp_enqueue_scripts', 'mapbb_scripts' );


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
