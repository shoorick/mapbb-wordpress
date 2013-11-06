=== MapBBCode for WordPress ===

Contributors: shoorick
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=UYTK9PBGSMKWE&lc=RU&item_name=Alexander%20Sapozhnikov&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted
Tags: map, maps, openstreetmap, osm, shortcode, leaflet, mapbbcode, mapbb
Requires at least: 3.0.1
Tested up to: 3.7.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

MapBB-shortcodes [map] for Leaflet based maps.

== Description ==

This plugin allows to use shortcode `[map]` ([syntax](https://github.com/MapBBCode/mapbbcode/blob/master/BBCODE.md)) which transforms to Leaflet based map.

For more information, check out [MapBBCode.org](http://mapbbcode.org/).

= Usage =

Add shortcode into you pages:

* `[map][/map]` for default map
* `[map=Zoom,Latitude,Longitude][/map]` for map centered at (Latitude, Longitude)
* `[map]Latitude,Longitude(Text)[/map]` for map with balloon
* `[map]Lat1,Lon1; Lat2,Lon2[/map]` for map with multiple markers
* `[map]Lat1,Lon1 Lat2,Lon2 Lat3,Lon3(color|Text)[/map]` for map with polyline or polygon

See [examples](http://shoorick.ru/software/mapbb-wordpress/).

== Installation ==

1. Get the plugin:
  * Through “Plugins” → “Add New” menu in WordPress.   
    or
  * Download archive [from WordPress.org](http://downloads.wordpress.org/plugin/mapbb.zip) or [from Guthub](https://github.com/shoorick/mapbb-wordpress/archive/master.zip) and unzip it to `/wp-content/plugins/` directory   
    or
  * Checkout source code to `/wp-content/plugins/` directory:
     * from WordPress.org:   
       `svn co http://plugins.svn.wordpress.org/mapbb/tags/0.1/ mapbb`   
       or
     * from Github:   
       `git clone https://github.com/shoorick/mapbb-wordpress.git`
1. Activate the plugin through the “Plugins” menu in WordPress.

== Upgrade Notice ==

No notices yet.

== Frequently Asked Questions ==

No FAQ yet.

== Screenshots ==

1. Map in a default location with no features.
2. Map with polygon and popup.

== Caveats ==

Width of all maps are 604 pixels, it is good for Twenty Thirteen theme but
still not tested with other themes and may appear ugly.

== Changelog ==

= 0.2 =

Customizing will be added.

= 0.1 =

Initial release.

