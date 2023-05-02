<?php
/**
 * Plugin Name: Jet Offcanvas Column
 * Plugin URI:  #
 * Description: Allow to make column offcanvas on mobile devices.
 * Version:     1.0.0
 * Author:      Crocoblock
 * Author URI:  https://crocoblock.com/
 * Text Domain: jet-offcanvas-column
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die();
}

add_action( 'plugins_loaded', 'jet_occ_init' );

function jet_occ_init() {

	define( 'JET_OCC_VERSION', '1.0.0' );
	define( 'JET_OCC__FILE__', __FILE__ );
	define( 'JET_OCC_PLUGIN_BASE', plugin_basename( JET_OCC__FILE__ ) );
	define( 'JET_OCC_PATH', plugin_dir_path( JET_OCC__FILE__ ) );
	define( 'JET_OCC_URL', plugins_url( '/', JET_OCC__FILE__ ) );

	require JET_OCC_PATH . 'includes/plugin.php';

}
