MapBBCode for WordPress
=======================

MapBB-shortcodes `[map]` for Leaflet based maps.

* Contributors: [shoorick](http://wordpress.org/support/profile/shoorick)
* Donate link: [via PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=UYTK9PBGSMKWE&lc=RU&item_name=Alexander%20Sapozhnikov&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHosted)
* Tags: map, maps, openstreetmap, osm, shortcode, leaflet, mapbbcode
* Tested with: 3.7.1
* License: [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html)

Description
-----------

This plugin allows to use shortcode `[map]` which transforms to Leaflet based map.

Installation
------------

1. Go to the `/wp-content/plugins/` directory,
1. Put plugin content to the `mapbb-wordpress` directory:
  * Download and unzip [archive](https://github.com/shoorick/mapbb-wordpress/archive/master.zip)    
    or
  * Clone repository from github:    
    `git clone https://github.com/shoorick/mapbb-wordpress.git`
1. Activate the plugin through the 'Plugins' menu in WordPress.

Usage
-----

Add shortcode into you pages:

* `[map][/map]` for default map
* `[map=Zoom,Latitude,Longitude][/map]` for map centered at (Latitude, Longitude)
* `[map]Latitude,Longitude(Text)[/map]` for map with balloon
* `[map]Lat1,Lon1; Lat2,Lon2[/map]` for map with multiple markers
* `[map]Lat1,Lon1 Lat2,Lon2 Lat3,Lon3(color|Text)[/map]` for map with polyline or polygon

See examples at [shoorick.ru/software/mapbb-wordpress/](http://shoorick.ru/software/mapbb-wordpress/)

Caveats
-------

All maps are 604 pixels wide, it is good for Twenty Thirteen theme but
still not tested with other themes and may appear ugly.

Changelog
---------

### 0.1

Initial release

