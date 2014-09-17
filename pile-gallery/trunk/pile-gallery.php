<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://bonsaished.com/playground/pile-gallery
 * @since             1.0.0
 * @package           Pile-Gallery
 * @todo              Change link above and below to whatever is needed
 * @todo              Figure out if this should be personal or Bonsai Shed
 *
 * @wordpress-plugin
 * Plugin Name:       Pile Gallery
 * Plugin URI:        http://bonsaished.com/playground/pile-gallery
 * Description:       Create beautiful sortable and stackable galeries from your WordPress posts and media items
 * Version:           1.0.1
 * Author:            Bonsai Shed
 * Author URI:        http://bonsaished.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pile-gallery
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Hide the ACF UI
 */
if( !defined( 'ACF_LITE' ) ) {
	define( 'ACF_LITE' , true );
}

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-pile-gallery.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Pile_Gallery() {

	$plugin = new Pile_Gallery();
	$plugin->run();

}
run_Pile_Gallery();
