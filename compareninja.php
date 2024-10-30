<?php
/*
 * Plugin Name: Compare Ninja - Comparison Tables
 * Plugin URI: https://tables.commoninja.com
 * Description: Add <strong>beautiful comparison tables</strong> to your Wordpress website on-the-fly. No prior knowledge require. Just a simple integration with Compare Ninja.
 * Version: 2.1.0
 * Author: Common Ninja
 * Author URI: https://www.commoninja.com/
 * License: GPLv2 or later
 */

/*
 * Shortcode to diplay Compare Ninja table in your site.
 * 
 *	   The list of arguments is below:
 *     'tableid' (string) - Table ID
 */
 
function compareninja_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'tableid' => 'efac3f19-88a2-4e8a-b5ca-62ed9faf2e15'
	), $atts ) );
	
	$html = "<div class=\"commonninja_component\" comp-type=\"comparison_table\" comp-id=\"$tableid\"></div>
	<script type=\"text/javascript\">
	(function() {
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'https://cdn.commoninja.com/sdk/latest/commonninja.js';
		document.getElementsByTagName('head')[0].appendChild(script);
	})();
	</script>";

	return $html;
}

add_shortcode( 'compareninja', 'compareninja_shortcode' );

?>