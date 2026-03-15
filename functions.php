<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function edugreen_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __( 'Meniu principal', 'edugreen-minimal' ),
        )
    );
}
add_action( 'after_setup_theme', 'edugreen_theme_setup' );

function edugreen_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'edugreen-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    wp_enqueue_script(
        'edugreen-theme-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        $theme_version,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'edugreen_enqueue_assets' );

function edugreen_fallback_menu() {
    echo '<ul class="menu-fallback">';
    wp_list_pages(
        array(
            'title_li' => '',
        )
    );
    echo '</ul>';
}

function edugreen_page_url( $slug ) {
    $page = get_page_by_path( $slug );

    if ( $page ) {
        return get_permalink( $page );
    }

    return home_url( '/' . trim( $slug, '/' ) . '/' );
}

function edugreen_contact_data() {
    return array(
        'anca_phone_display'       => '0764 200 261',
        'anca_phone_href'          => '40764200261',
        'alexandra_phone_display'  => '0754 430 810',
        'alexandra_phone_href'     => '40754430810',
        'office_email'             => 'office@edugreenafterschool.ro',
        'public_email'             => 'afteredugreen@gmail.com',
        'facebook_url'             => 'https://www.facebook.com/p/Edu-Green-Afterschool-61566026006416/',
        'address'                  => 'Str. Nichita StÄƒnescu, nr. 20, È˜elimbÄƒr, Sibiu, RomÃ¢nia',
        'program_main'             => 'Luni - Vineri: 12:00 - 16:30',
        'program_workshops'        => 'Ateliere opÈ›ionale: 16:30 - 17:30',
        'registration_notice'      => 'ÃŽnscrierile se fac Ã®n limita locurilor disponibile.',
    );
}

function edugreen_collect_local_images( $relative_dir = 'poze', $limit = 18 ) {
    $base_dir = trailingslashit( get_template_directory() ) . trim( $relative_dir, '/\\' );

    if ( ! is_dir( $base_dir ) ) {
        return array();
    }

    $allowed_extensions = array( 'jpg', 'jpeg', 'png', 'webp' );
    $iterator           = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(
            $base_dir,
            FilesystemIterator::SKIP_DOTS
        )
    );
    $collected_paths    = array();

    foreach ( $iterator as $file ) {
        if ( ! $file->isFile() ) {
            continue;
        }

        $extension = strtolower( $file->getExtension() );

        if ( ! in_array( $extension, $allowed_extensions, true ) ) {
            continue;
        }

        $collected_paths[] = str_replace( '\\', '/', $file->getPathname() );
    }

    sort( $collected_paths, SORT_NATURAL | SORT_FLAG_CASE );

    if ( $limit > 0 ) {
        $collected_paths = array_slice( $collected_paths, 0, $limit );
    }

    $template_dir = str_replace( '\\', '/', get_template_directory() );
    $template_uri = untrailingslashit( get_template_directory_uri() );
    $images       = array();

    foreach ( $collected_paths as $absolute_path ) {
        $relative_path = ltrim( str_replace( $template_dir, '', $absolute_path ), '/' );
        $images[]      = array(
            'url'  => $template_uri . '/' . $relative_path,
            'name' => pathinfo( $absolute_path, PATHINFO_FILENAME ),
        );
    }

    return $images;
}
