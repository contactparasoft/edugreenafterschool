<?php
/*
Template Name: Inscriere EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact = edugreen_contact_data();

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <p class="eyebrow">Inscriere</p>
            <h1>Solicitare preliminara</h1>
            <p>
                Inscrierile se realizeaza in limita locurilor disponibile, in ordinea solicitarilor.
                Pentru confirmarea locului, parintii pot contacta echipa telefonic sau prin email.
            </p>

            <div class="contact-list">
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Anca Rodean: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Alexandra Ni&#539;&#259;: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
                <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['public_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['public_email'] ) ); ?></a></p>
                <p><a href="<?php echo esc_url( $contact['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer">Mesaj pe pagina de Facebook</a></p>
            </div>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container page-content-box" data-reveal>
            <h2>Pasii de inscriere</h2>
            <ul class="program-list">
                <li>Trimite mesaj pe email, telefon sau Facebook.</li>
                <li>Mentioneaza grupa dorita: germana sau romana.</li>
                <li>Solicita confirmarea disponibilitatii locului.</li>
                <li>Finalizarea inscrierii se face in ordinea solicitarilor.</li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>
