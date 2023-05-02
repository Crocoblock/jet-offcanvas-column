<?php
namespace JET_OCC;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Main file
 */
class Plugin {

	/**
	 * Instance.
	 *
	 * Holds the plugin instance.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @var Plugin
	 */
	public static $instance = null;

	/**
	 * Plugin constructor.
	 */
	private function __construct() {
		$this->register_autoloader();
		add_action( 'after_setup_theme', array( $this, 'init_components' ), 0 );
	}

	/**
	 * Register autoloader.
	 */
	private function register_autoloader() {
		require JET_OCC_PATH . 'includes/autoloader.php';
		Autoloader::run();
	}

	/**
	 * Initialize components
	 * 
	 * @return [type] [description]
	 */
	public function init_components() {
		new Elementor();
	}

	/**
	 * Instance.
	 *
	 * Ensures only one instance of the plugin class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$instance ) ) {

			self::$instance = new self();

		}

		return self::$instance;
	}
}

Plugin::instance();
