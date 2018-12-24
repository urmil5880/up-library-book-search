<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/urmilwp
 * @since             1.0.0
 * @package           Library_Book_Search_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Book Search Plugin
 * Plugin URI:        urmil.wordpress.com
 * Description:       This is a demo plugin for book search functionality. Where end users search books in the different parameter like Book Name, Author, and Price etc. Also work with Gutenberg shortcode block.
 * Version:           1.0.0
 * Author:            Urmil Patel
 * Author URI:        https://profiles.wordpress.org/urmilwp
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       library-book-search-plugin
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-library-book-search-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_library_book_search_plugin() {

	$plugin = new Library_Book_Search_Plugin();

}
run_library_book_search_plugin();
