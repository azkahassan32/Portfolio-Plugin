<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Portfolio_CPT {

    public function register() {
        register_post_type( 'portfolio', [
            'labels' => [
                'name'               => 'Portfolios',
                'singular_name'      => 'Portfolio',
                'add_new'            => 'Add New',
                'add_new_item'       => 'Add New Portfolio',
                'edit_item'          => 'Edit Portfolio',
                'new_item'           => 'New Portfolio',
                'view_item'          => 'View Portfolio',
                'search_items'       => 'Search Portfolios',
                'not_found'          => 'No portfolios found',
            ],
            'public'        => true,
            'menu_icon'     => 'dashicons-portfolio',
            'supports'      => [ 'title', 'editor', 'thumbnail' ],
            'has_archive'   => true,
            'rewrite'       => [ 'slug' => 'portfolio' ],
            'show_in_rest'  => true, // Gutenberg + REST API
        ]);
    }
}
