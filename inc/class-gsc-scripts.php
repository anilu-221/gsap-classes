<?php
/**
 * Enqueue plugin scripts and styles
 *
 * @package gsc
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'GSC_Scripts' ) ) {
	/**
	 * Class to enqueue plugin scripts and styles
	 */
	class GSC_Scripts {
		/**
		 * Constructor function
		 */
		public function __construct() {
			// Enqueue frontend scripts.
			add_action( 'wp_enqueue_scripts', array( $this, 'gsc_enqueue_frontend_scripts' ) );
		}

		/**
		 * Frontend scripts
		 */
		public function gsc_enqueue_frontend_scripts() {
			// GSC CSS.
			wp_enqueue_style( 'gsc-css', GSC_PLUGIN_URL . 'dist/css/app.css', null, GSC_PLUGIN_VERSION );

			// GSC JS.
			wp_enqueue_script( 'gsc-js', GSC_PLUGIN_URL . 'dist/js/app.js', null, GSC_PLUGIN_VERSION, true );
		}
	}
}

new GSC_Scripts();

