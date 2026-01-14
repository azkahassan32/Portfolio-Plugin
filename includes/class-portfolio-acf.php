<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Portfolio_ACF {

    public function register_fields() {

        if ( ! function_exists( 'acf_add_local_field_group' ) ) {
            return;
        }

        acf_add_local_field_group([
            'key' => 'group_portfolio_details',
            'title' => 'Portfolio Details',
            'fields' => [
                [
                    'key' => 'field_client_name',
                    'label' => 'Client Name',
                    'name' => 'client_name',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'field_project_url',
                    'label' => 'Project URL',
                    'name' => 'project_url',
                    'type' => 'url',
                ],
                [
                    'key' => 'field_project_type',
                    'label' => 'Project Type',
                    'name' => 'project_type',
                    'type' => 'select',
                    'choices' => [
                        'website' => 'Website',
                        'ecommerce' => 'E-commerce',
                        'lms' => 'LMS',
                        'custom' => 'Custom Build',
                    ],
                ],
                [
                    'key' => 'field_completion_date',
                    'label' => 'Completion Date',
                    'name' => 'completion_date',
                    'type' => 'date_picker',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'portfolio',
                    ],
                ],
            ],
            'show_in_rest' => 1,
        ]);
    }
}
