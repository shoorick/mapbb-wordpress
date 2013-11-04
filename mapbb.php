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
function map_process( $atts, $content = NULL ){

    if (!empty($atts[0]))
        $attr = array_shift($atts);
    $id = rand(); //int(rand());
    return
        "<div id=\"map$id\">[map$attr]$content" . "[/map]</div>"
        . "<script language=\"javascript\">if(mapBBcode) mapBBcode.show('map$id');</script>";
}

add_shortcode( 'map', 'map_process' );

?>
