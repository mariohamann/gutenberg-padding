<?php

/**
 * Plugin Name: Gutenberg Padding (Demo)
 * Plugin URI: mailto:mariovhamann@gmail.com
 * Version: 1.0.0
 * Description: Experiment for padding in select mode
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Author: mariohamann
 * Author URI: mailto:mariovhamann@gmail.com
 */

namespace MarioHamann\GutenbergPadding;

/* Verbiete den direkten Zugriff auf die Plugin-Datei */
if ( ! defined( 'ABSPATH' ) ) exit;
/* Nach dieser Zeile den Code einfügen*/


add_action( 'enqueue_block_assets', __NAMESPACE__ . '\add_css_to_gutenberg' );
 
function add_css_to_gutenberg(){
    wp_enqueue_style( 'padding',
	 plugins_url( 'padding.css', __FILE__ ) 
	);
}