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
                Activitatile sunt coordonate de cadre didactice dedicate, in doua grupe adaptate
                nevoilor copiilor: grupa germana si grupa romana.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="profile-card" data-reveal>
                <h2>Prof. Anca Rodean</h2>
                <p>Coordonator grupa germana (12-15 copii).</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>"><?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
            </article>

            <article class="profile-card" data-reveal>
                <h2>Prof. Alexandra Ni&#539;&#259;</h2>
                <p>Coordonator grupa romana (12-15 copii).</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>"><?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>
