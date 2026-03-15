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
            <h1>Conceptul Edu Green Ã®n È˜elimbÄƒr</h1>
            <p>
                Programul Edu Green Afterschool este construit ca un spaÈ›iu Ã®n care copiii beneficiazÄƒ
                de educaÈ›ie non-formalÄƒ, Ã®ndrumare pentru teme È™i timp de calitate, Ã®ntr-un mediu sigur,
                cu profesori dedicaÈ›i È™i activitÄƒÈ›i echilibrate.
            </p>
            <p>
                Oferta include grupa germanÄƒ È™i grupa romÃ¢nÄƒ, fiecare cu 12-15 copii,
                coordonate de Prof. Anca Rodean È™i Prof. Alexandra NiÈ›Äƒ.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>DirecÈ›ie educaÈ›ionalÄƒ</h2>
                <p>
                    Accent pe dezvoltare academicÄƒ È™i personalÄƒ prin Ã®ndrumare constantÄƒ,
                    jocuri, activitÄƒÈ›i sportive È™i ateliere opÈ›ionale Ã®n intervalul 16:30 - 17:30.
                </p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Cadru de desfÄƒÈ™urare</h2>
                <p>
                    Copiii au acces la curte generoasÄƒ cu loc de joacÄƒ, masÄƒ caldÄƒ de prÃ¢nz,
                    gustare È™i opÈ›iune de transport de la È™coalÄƒ la afterschool (contra cost).
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
