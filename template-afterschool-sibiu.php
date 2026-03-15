<?php
/*
Template Name: Afterschool Sibiu
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
            <p class="eyebrow">Afterschool Sibiu</p>
            <h1>Conceptul Edu Green in Selimbar</h1>
            <p>
                Programul Edu Green Afterschool este construit ca un spa&#539;iu in care copiii beneficiaz&#259;
                de educa&#539;ie non-formal&#259;, indrumare pentru teme &#537;i timp de calitate, intr-un mediu sigur,
                cu profesori dedica&#539;i &#537;i activit&#259;&#539;i echilibrate.
            </p>
            <p>
                Oferta include grupa german&#259; &#537;i grupa rom&acirc;n&#259;, fiecare cu 12-15 copii,
                coordonate de Prof. Anca Rodean &#537;i Prof. Alexandra Ni&#539;&#259;.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>Directie educationala</h2>
                <p>
                    Accent pe dezvoltare academica si personala prin indrumare constanta,
                    jocuri, activitati sportive si ateliere optionale in intervalul 16:30 - 17:30.
                </p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Cadru de desfasurare</h2>
                <p>
                    Copiii au acces la curte generoasa cu loc de joaca, masa calda de pranz,
                    gustare si optiune de transport de la scoala la afterschool (contra cost).
                </p>
                <p class="footer-note"><?php echo esc_html( $contact['registration_notice'] ); ?></p>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>
