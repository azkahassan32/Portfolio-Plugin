<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once PP_PLUGIN_DIR . 'includes/class-portfolio-loader.php';

class Portfolio_Plugin {

    protected $loader;

    public function __construct() {
        $this->loader = new Portfolio_Loader();
        $this->define_admin_hooks();
    }

    private function define_admin_hooks() {
        $this->loader->add_action(
            'admin_notices',
            $this,
            'show_admin_notice'
        );
    }

    public function show_admin_notice() {
        echo '<div class="notice notice-success"><p>Portfolio Plugin (OOP) is running 🚀</p></div>';
    }

    public function run() {
        $this->loader->run();
    }
}
