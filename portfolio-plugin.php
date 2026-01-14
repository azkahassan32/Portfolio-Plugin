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
    exit; // Prevent direct access
}

// Plugin activation hook
function pp_activate_plugin() {
    // Code to run on activation
}
register_activation_hook( __FILE__, 'pp_activate_plugin' );

// Plugin deactivation hook
function pp_deactivate_plugin() {
    // Code to run on deactivation
}
register_deactivation_hook( __FILE__, 'pp_deactivate_plugin' );

// Test hook
add_action( 'admin_notices', function () {
    echo '<div class="notice notice-success"><p>Portfolio Plugin is active 🚀</p></div>';
});
