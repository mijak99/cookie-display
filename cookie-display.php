<?php
/*
Plugin Name: Cookie Display
Plugin URI:  http://wordpress.org/
Description: [cookie-if cookie="name"]This text shows if cookie "name" is set. Use [cookie-value cookie="name"] to show the value [/cookie-if]  
Version:     0.8
Author:      Mikael Jakobsson
Author URI:  http://www.enlumi.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: cookie-display

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

/*

	Usage: 

	[cookie-if cookie="nameofcookie"] Content to show [/cookie-if]
	Shows the content IF the cookie nameofcookie is set
	
	[cookie-value cookie="nameofcookie"]
	Displays the value of the cookie
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function cookie_if_shortcode($atts, $content = null) {

	$output = '';

    $pull_quote_atts = shortcode_atts( array(
        'cookie' => null
    ), $atts );
	
	$cookie = $pull_quote_atts["cookie"];
	
	if (is_null($cookie) || is_null($content) || !isset($_COOKIE[$cookie])) {
		return '';
	}
	
	// ok... we do have content to show
	if (!is_null($content)) {
		$output .= wpautop( wp_kses_post( do_shortcode( $content ) ) );
	}
	
    return $output;
}

function cookie_show_shortcode($atts) {

	$output = '';

    $pull_quote_atts = shortcode_atts( array(
        'cookie' => null
    ), $atts );
	
	$cookie = $pull_quote_atts["cookie"];
	
	if (is_null($cookie) || !isset($_COOKIE[$cookie])) {
		return '';
	} 
	
	$output .= $_COOKIE[$cookie];
	
    return $output;
}

 
function cookie_if_register_shortcode() {
    add_shortcode( 'cookie-if', 'cookie_if_shortcode' );
    add_shortcode( 'cookie-value', 'cookie_show_shortcode' );
}
 
add_action( 'init', 'cookie_if_register_shortcode' );

