<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

add_action( 'init', function() {
    register_extended_post_type( 'payment', [

        'show_in_feed' => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "post-formats" ],
        'menu_icon'    => 'dashicons-shield-alt',

        # Add some custom columns to the admin screen:
        'admin_cols' => [
            'payment_role' => [
                'taxonomy' => 'payment-roles'
            ]
        ],

        'archive' => [
            'nopaging' => true,
        ],
        'rewrite'  => [
            'slug' => 'kortti',
        ],

    ], [

        'singular' => 'Payment Method',
        'plural'   => 'Payment Methods',
        'slug'     => 'payments',
    ]);

    register_extended_taxonomy( 'payment-roles', 'payment', [

        'dashboard_glance' => true,

        'admin_cols' => [
            'updated' => [
                'title'       => 'Updated',
                'meta_key'    => 'updated_date',
                'date_format' => 'd/m/Y'
            ],
        ],

    ], [
        'singular' => 'Role',
        'plural'   => 'Roles',
        'slug'     => 'payment-roles'
    ]);

} );
