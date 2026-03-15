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
                    Accent pe dezvoltare academic&#259; &#537;i personal&#259; prin indrumare constant&#259;,
                    jocuri, activit&#259;&#539;i sportive &#537;i ateliere op&#539;ionale in intervalul 16:30 - 17:30.
                </p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Cadru de desfasurare</h2>
                <p>
                    Copiii au acces la curte generoas&#259; cu loc de joac&#259;, mas&#259; cald&#259; de pr&acirc;nz,
                    gustare &#537;i op&#539;iune de transport de la &#537;coal&#259; la afterschool (contra cost).
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
