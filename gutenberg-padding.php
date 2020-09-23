<?php

/**
 * Plugin Name: Gutenberg Padding (Demo)
 * Plugin URI: https://github.com/mariohamann/gutenberg-padding
 * Version: 1.0.0
 * Description: Experiment for padding in select mode (See discussion on <a href="https://github.com/WordPress/gutenberg/issues/25133#issuecomment-697156586" target="_blank">GitHub</a>)
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Author: mariohamann
 * Author URI: https://github.com/mariohamann
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