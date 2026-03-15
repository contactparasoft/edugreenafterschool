<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function edugreen_minimal_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );

    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'edugreen-minimal' ),
        )
    );
}
add_action( 'after_setup_theme', 'edugreen_minimal_setup' );

function edugreen_minimal_assets() {
    wp_enqueue_style(
        'edugreen-minimal-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'edugreen_minimal_assets' );
