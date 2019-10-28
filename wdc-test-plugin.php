<?php
/**
 * Plugin Name: WDC Test Plugin
 * Plugin URI: http://github.com/chandeepj
 * Description: Plugin for WebDevChampion interview test
 * Version: 1.0
 * Author: Chandeep J
 * Author URI: https://www.chandeepj.com
 * Text Domain: wdc-test-plugin
 * License: GPL2
 * 
 * @package WDCTestPlugin
 */

if ( ! defined( 'WDC_PLUGIN_DIR' ) ) {
    define( 'WDC_PLUGIN_DIR', trailingslashit( dirname( __FILE__ ) ) );
}

# Define the path to the plugin directory URI.
if ( ! defined( 'WDC_PLUGIN_URI' ) ) {
    define( 'WDC_PLUGIN_URI', plugin_dir_url( __FILE__ ) );
}

if ( file_exists( plugin_dir_path( __FILE__ ) . 'src/init.php' ) ) {
	require plugin_dir_path( __FILE__ ) . 'src/init.php';
}