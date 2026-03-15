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
        'address'                  => "Str. Nichita St\u{0103}nescu, nr. 20, \u{0218}elimb\u{0103}r, Sibiu, Rom\u{00E2}nia",
        'program_main'             => 'Luni - Vineri: 12:00 - 16:30',
        'program_workshops'        => "Ateliere op\u{021B}ionale: 16:30 - 17:30",
        'registration_notice'      => "\u{00CE}nscrierile se fac \u{00EE}n limita locurilor disponibile.",
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

function edugreen_site_blueprint() {
    return array(
        array(
            'title'      => "Acas\u{0103}",
            'slug'       => 'acasa',
            'template'   => 'template-homepage.php',
            'menu_title' => "Acas\u{0103}",
        ),
        array(
            'title'      => 'Afterschool Sibiu',
            'slug'       => 'afterschool-sibiu',
            'template'   => 'template-afterschool-sibiu.php',
            'menu_title' => 'Afterschool Sibiu',
        ),
        array(
            'title'      => 'Echipa',
            'slug'       => 'echipa',
            'template'   => 'template-echipa.php',
            'menu_title' => 'Echipa',
        ),
        array(
            'title'      => 'Colaborari',
            'slug'       => 'colaborari',
            'template'   => 'template-colaborari.php',
            'menu_title' => 'Colaborari',
        ),
        array(
            'title'      => 'Galerie',
            'slug'       => 'galerie',
            'template'   => 'template-galerie.php',
            'menu_title' => 'Galerie',
        ),
        array(
            'title'      => 'Program',
            'slug'       => 'program',
            'template'   => 'template-program.php',
            'menu_title' => 'Program',
        ),
        array(
            'title'      => "\u{00CEnscriere}",
            'slug'       => 'inscriere',
            'template'   => 'template-inscriere.php',
            'menu_title' => "\u{00CEnscriere}",
        ),
        array(
            'title'      => 'Contact',
            'slug'       => 'contact',
            'template'   => 'template-contact.php',
            'menu_title' => 'Contact',
        ),
    );
}

function edugreen_upsert_page( $definition ) {
    $existing = get_page_by_path( $definition['slug'] );
    $is_new   = ! ( $existing instanceof WP_Post );

    $post_data = array(
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_title'   => $definition['title'],
        'post_name'    => $definition['slug'],
        'post_content' => '',
    );

    if ( $existing instanceof WP_Post ) {
        $post_data['ID'] = $existing->ID;
        $page_id         = wp_update_post( wp_slash( $post_data ), true );
    } else {
        $page_id = wp_insert_post( wp_slash( $post_data ), true );
    }

    if ( is_wp_error( $page_id ) ) {
        return $page_id;
    }

    update_post_meta( $page_id, '_wp_page_template', $definition['template'] );
    update_post_meta( $page_id, '_edugreen_autogenerated', 1 );

    return array(
        'id'      => (int) $page_id,
        'created' => $is_new,
    );
}

function edugreen_build_primary_menu( $pages_by_slug, $force_rebuild ) {
    $menu_name = 'Meniu principal EduGreen';
    $menu_obj  = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu_obj ) {
        $menu_id = wp_update_nav_menu_object(
            0,
            array(
                'menu-name' => $menu_name,
            )
        );
    } else {
        $menu_id = (int) $menu_obj->term_id;
    }

    if ( is_wp_error( $menu_id ) || ! $menu_id ) {
        return is_wp_error( $menu_id ) ? $menu_id : new WP_Error( 'edugreen_menu_error', 'Nu s-a putut crea meniul principal.' );
    }

    if ( $force_rebuild ) {
        $existing_items = wp_get_nav_menu_items(
            $menu_id,
            array(
                'post_status' => 'any',
            )
        );

        if ( is_array( $existing_items ) ) {
            foreach ( $existing_items as $item ) {
                wp_delete_post( $item->ID, true );
            }
        }

        $position = 1;
        foreach ( edugreen_site_blueprint() as $definition ) {
            $page_id = isset( $pages_by_slug[ $definition['slug'] ] ) ? (int) $pages_by_slug[ $definition['slug'] ] : 0;

            if ( ! $page_id ) {
                continue;
            }

            wp_update_nav_menu_item(
                $menu_id,
                0,
                array(
                    'menu-item-title'     => $definition['menu_title'],
                    'menu-item-object-id' => $page_id,
                    'menu-item-object'    => 'page',
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => $position,
                )
            );

            $position++;
        }
    }

    $locations            = get_theme_mod( 'nav_menu_locations', array() );
    $locations['primary'] = (int) $menu_id;
    set_theme_mod( 'nav_menu_locations', $locations );

    return (int) $menu_id;
}

function edugreen_initialize_site( $force_rebuild_menu = true ) {
    $created       = 0;
    $updated       = 0;
    $pages_by_slug = array();

    foreach ( edugreen_site_blueprint() as $definition ) {
        $result = edugreen_upsert_page( $definition );

        if ( is_wp_error( $result ) ) {
            continue;
        }

        $pages_by_slug[ $definition['slug'] ] = (int) $result['id'];

        if ( ! empty( $result['created'] ) ) {
            $created++;
        } else {
            $updated++;
        }
    }

    if ( ! empty( $pages_by_slug['acasa'] ) ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', (int) $pages_by_slug['acasa'] );
        update_option( 'page_for_posts', 0 );
    }

    $menu_id = edugreen_build_primary_menu( $pages_by_slug, $force_rebuild_menu );

    update_option( 'edugreen_site_initialized_at', current_time( 'mysql' ) );
    update_option( 'edugreen_site_initialized_version', wp_get_theme()->get( 'Version' ) );

    return array(
        'created'       => $created,
        'updated'       => $updated,
        'pages_by_slug' => $pages_by_slug,
        'menu_id'       => is_wp_error( $menu_id ) ? 0 : (int) $menu_id,
    );
}

function edugreen_structure_is_valid() {
    $blueprint = edugreen_site_blueprint();

    foreach ( $blueprint as $definition ) {
        if ( ! get_page_by_path( $definition['slug'] ) ) {
            return false;
        }
    }

    $home_page = get_page_by_path( 'acasa' );
    if ( ! $home_page ) {
        return false;
    }

    if ( 'page' !== get_option( 'show_on_front' ) ) {
        return false;
    }

    if ( (int) get_option( 'page_on_front' ) !== (int) $home_page->ID ) {
        return false;
    }

    $locations = get_theme_mod( 'nav_menu_locations', array() );
    if ( empty( $locations['primary'] ) ) {
        return false;
    }

    return true;
}

function edugreen_maybe_initialize_site() {
    if ( ! is_admin() || ! current_user_can( 'manage_options' ) || wp_doing_ajax() ) {
        return;
    }

    if ( get_transient( 'edugreen_structure_check_lock' ) ) {
        return;
    }

    set_transient( 'edugreen_structure_check_lock', 1, 300 );

    if ( ! edugreen_structure_is_valid() ) {
        edugreen_initialize_site( true );
    }
}
add_action( 'admin_init', 'edugreen_maybe_initialize_site' );

function edugreen_after_switch_theme() {
    edugreen_initialize_site( true );
}
add_action( 'after_switch_theme', 'edugreen_after_switch_theme' );

function edugreen_register_setup_page() {
    add_theme_page(
        'EduGreen Initializare',
        'EduGreen Initializare',
        'manage_options',
        'edugreen-initializare',
        'edugreen_render_setup_page'
    );
}
add_action( 'admin_menu', 'edugreen_register_setup_page' );

function edugreen_render_setup_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $initialized_at = get_option( 'edugreen_site_initialized_at', '' );
    $notice         = isset( $_GET['edugreen_init'] ) ? sanitize_text_field( wp_unslash( $_GET['edugreen_init'] ) ) : '';
    ?>
    <div class="wrap">
        <h1>EduGreen Initializare/Reinitializare</h1>
        <p>
            Acest buton recreeaza structura standard: pagini, sabloane, meniu principal si setarea paginii de acasa.
            Continutul din editorul WordPress nu este folosit in sabloanele dedicate.
        </p>

        <?php if ( 'done' === $notice ) : ?>
            <div class="notice notice-success is-dismissible">
                <p>Initializarea a fost executata cu succes.</p>
            </div>
        <?php endif; ?>

        <p>
            <strong>Ultima rulare:</strong>
            <?php echo $initialized_at ? esc_html( $initialized_at ) : esc_html__( 'niciodata', 'edugreen-minimal' ); ?>
        </p>

        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <?php wp_nonce_field( 'edugreen_initialize_site_action', 'edugreen_initialize_site_nonce' ); ?>
            <input type="hidden" name="action" value="edugreen_initialize_site">
            <button type="submit" class="button button-primary button-hero">Initializare/Reinitializare Tema</button>
        </form>
    </div>
    <?php
}

function edugreen_handle_initialize_site() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( esc_html__( 'Nu ai permisiunea necesara.', 'edugreen-minimal' ) );
    }

    check_admin_referer( 'edugreen_initialize_site_action', 'edugreen_initialize_site_nonce' );

    edugreen_initialize_site( true );

    wp_safe_redirect(
        add_query_arg(
            array(
                'page'          => 'edugreen-initializare',
                'edugreen_init' => 'done',
            ),
            admin_url( 'themes.php' )
        )
    );
    exit;
}
add_action( 'admin_post_edugreen_initialize_site', 'edugreen_handle_initialize_site' );
