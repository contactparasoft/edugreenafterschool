<?php
/*
Template Name: Echipa EduGreen
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
            <p class="eyebrow">Echipa Edu Green</p>
            <h1>Profesori coordonatori</h1>
            <p>
                Activitățile sunt coordonate de cadre didactice dedicate, în două grupe adaptate
                nevoilor copiilor: grupa germană și grupa română.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="profile-card" data-reveal>
                <h2>Prof. Anca Rodean</h2>
                <p>Coordonator grupa germană (12-15 copii).</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>"><?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
            </article>

            <article class="profile-card" data-reveal>
                <h2>Prof. Alexandra Niță</h2>
                <p>Coordonator grupa română (12-15 copii).</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>"><?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
            </article>
        </div>
    </section>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( trim( wp_strip_all_tags( get_the_content() ) ) ) : ?>
                <section class="section-shell">
                    <div class="container page-content-box" data-reveal>
                        <div class="editor-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
