<?php
/*
Plugin Name: MapBBCode for WordPress
Plugin URI: http://shoorick.ru/software/mapbb-wordpress
Description: Allows use [map] codes for Leaflet maps embedding info pages
Version: 0.1
Author: Alexander Sapozhnikov
Author URI: http://shoorick.ru/
 */

// [map]
function map_process( $atts ){
    return "(Here we will put map)";
}

add_shortcode( 'map', 'map_process' );

?>
