<?php
/**
 * Plugin Name: Portfolio Plugin
 * Plugin URI: https://github.com/azkahassan32/Portfolio-Plugin.git
 * Description: A professional portfolio management plugin.
 * Version: 1.0.0
 * Author: Azka Hassan
 * Author URI: https://github.com/azkahassan32
 * Text Domain: portfolio-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'PP_VERSION', '1.0.0' );
define( 'PP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Include core class
require_once PP_PLUGIN_DIR . 'includes/class-portfolio-plugin.php';

// Run plugin
function run_portfolio_plugin() {
    $plugin = new Portfolio_Plugin();
    $plugin->run();
}
run_portfolio_plugin();