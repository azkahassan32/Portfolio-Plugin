<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once PP_PLUGIN_DIR . 'includes/class-portfolio-loader.php';
require_once PP_PLUGIN_DIR . 'includes/class-portfolio-cpt.php';
require_once PP_PLUGIN_DIR . 'includes/class-portfolio-acf.php';

class Portfolio_Plugin {

    protected $loader;

    public function __construct() {
        $this->loader = new Portfolio_Loader();

        $this->define_admin_hooks();
        $this->define_cpt();
        $this->define_acf_fields(); // ✅ HERE
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

    // ✅ ADD THIS METHOD INSIDE THE CLASS
    private function define_acf_fields() {
        $acf = new Portfolio_ACF();

        $this->loader->add_action(
            'acf/init',
            $acf,
            'register_fields'
        );
    }

    public function show_admin_notice() {
        echo '<div class="notice notice-success"><p>Portfolio Plugin is running with CPT + ACF 🚀</p></div>';
    }

    public function run() {
        $this->loader->run();
    }
}
