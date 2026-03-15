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
            <h1>Conceptul Edu Green în Șelimbăr</h1>
            <p>
                Programul Edu Green Afterschool este construit ca un spațiu în care copiii beneficiază
                de educație non-formală, îndrumare pentru teme și timp de calitate, într-un mediu sigur,
                cu profesori dedicați și activități echilibrate.
            </p>
            <p>
                Oferta include grupa germană și grupa română, fiecare cu 12-15 copii,
                coordonate de Prof. Anca Rodean și Prof. Alexandra Niță.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>Direcție educațională</h2>
                <p>
                    Accent pe dezvoltare academică și personală prin îndrumare constantă,
                    jocuri, activități sportive și ateliere opționale în intervalul 16:30 - 17:30.
                </p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Cadru de desfășurare</h2>
                <p>
                    Copiii au acces la curte generoasă cu loc de joacă, masă caldă de prânz,
                    gustare și opțiune de transport de la școală la afterschool (contra cost).
                </p>
                <p class="footer-note"><?php echo esc_html( $contact['registration_notice'] ); ?></p>
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
