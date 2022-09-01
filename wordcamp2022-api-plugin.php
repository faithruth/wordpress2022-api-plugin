<?php
/**
 * Plugin Name: Wordcamp2022 APIs Plugin
 * Plugin URI:  https://github.com/faithruth/wordpress2022-api-plugin
 * Author:      Imokol Faith Ruth
 * Author URI:  https://github.com/faithruth
 * Description: A plugin that illustrates the use of the WordPress Rest API
 * Version:     0.1.0
 * License:     GPL2 or Later.
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: wordcamp-api-plugin
 */


// if called without WordPress, exit
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define integromat webhook
if ( ! defined( 'WORDCAMP_API_WEBHOOK_URL' ) ) {
	define(  'WORDCAMP_API_WEBHOOK_URL', 'https://hook.eu1.make.com/87tajkft9fc8hw7wc6ykgvcx8ab4o4fy' );
}


// Define plugin constants and paths
if ( ! defined( 'WORDCAMP_API_PLUGIN_PATH' ) ) {
	define( 'WORDCAMP_API_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

// Define plugin constants and paths
if ( ! defined( 'WORDCAMP_API_PLUGIN_URL' ) ) {
	define( 'WORDCAMP_API_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

// Define plugin constants and paths
if ( ! defined( 'WORDCAMP_API_PLUGIN_FILE' ) ) {
	define( 'WORDCAMP_API_PLUGIN_FILE', __FILE__ );
}

// Define plugin constants and paths
if ( ! defined( 'WORDCAMP_API_PLUGIN_BASENAME' ) ) {
	define( 'WORDCAMP_API_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
}


require_once SKANNWOOINT_PLUGIN_DIR . 'includes/webhook.php';
