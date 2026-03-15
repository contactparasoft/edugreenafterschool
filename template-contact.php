<?php
/*
Template Name: Contact EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact   = edugreen_contact_data();
$maps_link = 'https://www.google.com/maps?q=' . rawurlencode( $contact['address'] );

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <p class="eyebrow">Contact</p>
            <h1>Ia legatura cu Edu Green Afterschool</h1>
            <p>
                Pentru informatii despre program, grupe si disponibilitate,
                echipa poate fi contactata telefonic, prin email sau pe Facebook.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container contact-grid">
            <article class="info-card" data-reveal>
                <h2>Telefon</h2>
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Anca Rodean: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Alexandra Ni&#539;&#259;: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Email</h2>
                <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['office_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['office_email'] ) ); ?></a></p>
                <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['public_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['public_email'] ) ); ?></a></p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Locatie</h2>
                <p><?php echo esc_html( $contact['address'] ); ?></p>
                <p><a class="text-link" href="<?php echo esc_url( $maps_link ); ?>" target="_blank" rel="noopener noreferrer">Deschide in Google Maps</a></p>
            </article>
        </div>
    </section>

    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <h2>Facebook</h2>
            <p><a href="<?php echo esc_url( $contact['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer">Pagina de Facebook Edu Green Afterschool</a></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>
