<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact = edugreen_contact_data();
$logo_file = get_template_directory() . '/logo-removebg-preview.png';
$logo_url  = get_template_directory_uri() . '/logo-removebg-preview.png';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="header-utility">
        <div class="container utility-inner">
            <a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Anca Rodean: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a>
            <a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Alexandra Niță: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a>
            <a href="mailto:<?php echo antispambot( esc_attr( $contact['public_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['public_email'] ) ); ?></a>
        </div>
    </div>

    <div class="container header-main" data-reveal>
        <a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Pagina principală Edu Green Afterschool', 'edugreen-minimal' ); ?>">
            <span class="brand-media">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php elseif ( file_exists( $logo_file ) ) : ?>
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="Edu Green Afterschool">
                <?php endif; ?>
            </span>

            <span class="brand-copy">
                <strong><?php bloginfo( 'name' ); ?></strong>
                <small><?php bloginfo( 'description' ); ?></small>
            </span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-navigation">
            <span class="menu-toggle-line"></span>
            <span class="menu-toggle-line"></span>
            <span class="menu-toggle-line"></span>
            <span class="screen-reader-text"><?php esc_html_e( 'Deschide meniul', 'edugreen-minimal' ); ?></span>
        </button>

        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Meniu principal', 'edugreen-minimal' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'fallback_cb'    => 'edugreen_fallback_menu',
                    'menu_class'     => 'menu-list',
                )
            );
            ?>
            <a class="header-cta" href="<?php echo esc_url( edugreen_page_url( 'inscriere' ) ); ?>">Înscriere</a>
        </nav>
    </div>
</header>
