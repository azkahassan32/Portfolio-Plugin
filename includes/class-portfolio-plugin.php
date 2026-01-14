<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once PP_PLUGIN_DIR . 'includes/class-portfolio-loader.php';
require_once PP_PLUGIN_DIR . 'includes/class-portfolio-cpt.php';

class Portfolio_Plugin {

    protected $loader;

    public function __construct() {
        $this->loader = new Portfolio_Loader();
        $this->define_admin_hooks();
        $this->define_cpt();
    }

    private function define_admin_hooks() {
        $this->loader->add_action(
            'admin_notices',
            $this,
            'show_admin_notice'
        );
    }

    private function define_cpt() {
        $cpt = new Portfolio_CPT();

        $this->loader->add_action(
            'init',
            $cpt,
            'register'
        );
    }

    public function show_admin_notice() {
        echo '<div class="notice notice-success"><p>Portfolio Plugin is running with CPT 🚀</p></div>';
    }

    public function run() {
        $this->loader->run();
    }
}
register_activation_hook( __FILE__, function () {
    flush_rewrite_rules();
});

register_deactivation_hook( __FILE__, function () {
    flush_rewrite_rules();
});
