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
                &Icirc;nscrierile se realizeaz&#259; in limita locurilor disponibile, in ordinea solicit&#259;rilor.
                Pentru confirmarea locului, p&#259;rin&#539;ii pot contacta echipa telefonic sau prin email.
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
            <h2>Formular</h2>
            <p>
                Daca in aceasta pagina este adaugat un formular din WordPress,
                acesta va fi afisat mai jos si poate fi folosit pentru solicitari rapide.
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
