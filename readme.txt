
=== Plugin Name ===
Contributors: mijak
Donate link: http://example.com/
Tags: cookies, shortcode
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Use shortcodes to conditionally show or hide text based on if a cookie is set. Or use to display the value of a cookie.

== Description ==

Use shortcode to conditionally display some text. 
Example: 


Use shortcode [cookie-value cookie="name"] to show the value of the cookie named "name".

[cookie-if cookie="name"]
	This text shows only if cookie "name" is set. 
	And yes. You can use shortcodes in here.
	So you can display the value of the cookie here : [cookie-value cookie="name"]
[/cookie-if]
	
== Installation ==

You can either install it automatically from the WordPress admin, or do it manually:

Unzip the archive and put the cookie-display folder into your plugins folder (/wp-content/plugins/).
Activate the plugin from the Plugins menu.

== Frequently Asked Questions ==

None, so far.

=Can I use this plugin to display the value of a cookie? =

Yes!
Use the [cookie-value name="name-of-the-cookie"]

= Can I use this plugin to display any text if (and only if) a cookie is set?=

Yes!

Use it like this: 

[cookie-if cookie="name"]
	This text shows only if cookie "name" is set. 
	And yes. You can use shortcodes in here.
	So you can display the value of the cookie here : [cookie-value cookie="name"]
[/cookie-if]

== Screenshots ==

None yet. 

== Changelog ==

= 1.0 =
* First version.


== Upgrade Notice ==

