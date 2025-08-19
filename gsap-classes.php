<?php
/**
 * Plugin Name: GSAP Classes
 * Description: GSAP Classes custom plugin
 * Author: Analucia M.
 * Version: 1.0.0
 * License: GPL v2 or later
 * Author URI: https://analucia.dev/
 * Text Domain: gsc
 *
 * @package gsc
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'GSC_PLUGIN_VERSION', '1.0.0' );
define( 'GSC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'GSC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Load.
require_once GSC_PLUGIN_PATH . '/inc/class-gsc-scripts.php';
