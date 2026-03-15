<?php
/*
Template Name: ÃŽnscriere EduGreen
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
            <p class="eyebrow">ÃŽnscriere</p>
            <h1>Solicitare preliminarÄƒ</h1>
            <p>
                ÃŽnscrierile se realizeazÄƒ Ã®n limita locurilor disponibile, Ã®n ordinea solicitÄƒrilor.
                Pentru confirmarea locului, pÄƒrinÈ›ii pot contacta echipa telefonic sau prin email.
            </p>

            <div class="contact-list">
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Anca Rodean: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Alexandra NiÈ›Äƒ: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
                <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['public_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['public_email'] ) ); ?></a></p>
                <p><a href="<?php echo esc_url( $contact['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer">Mesaj pe pagina de Facebook</a></p>
            </div>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container page-content-box" data-reveal>
            <h2>Formular</h2>
            <p>
                DacÄƒ Ã®n aceastÄƒ paginÄƒ este adÄƒugat un formular din WordPress,
                acesta va fi afiÈ™at mai jos È™i poate fi folosit pentru solicitÄƒri rapide.
            </p>

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php if ( trim( wp_strip_all_tags( get_the_content() ) ) ) : ?>
                        <div class="editor-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
