<?php
/*
Template Name: Program ActivitÄƒÈ›i
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
            <p class="eyebrow">Programul activitÄƒÈ›ilor</p>
            <h1>Orar Edu Green Afterschool</h1>
            <p>
                Programul principal se desfÄƒÈ™oarÄƒ de luni pÃ¢nÄƒ vineri, Ã®n intervalul 12:00 - 16:30,
                cu Ã®ndrumare pentru teme, activitÄƒÈ›i educative È™i timp de joacÄƒ.
            </p>
            <ul class="program-list">
                <li><?php echo esc_html( $contact['program_main'] ); ?></li>
                <li><?php echo esc_html( $contact['program_workshops'] ); ?></li>
                <li>Atelierele de dezvoltare personalÄƒ sunt opÈ›ionale È™i se desfÄƒÈ™oarÄƒ contra cost.</li>
                <li>Transportul de la È™coalÄƒ la afterschool este disponibil contra cost.</li>
            </ul>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>ActivitÄƒÈ›i incluse</h2>
                <p>ÃŽndrumare teme cu profesor de Ã®nvÄƒÈ›ÄƒmÃ¢nt primar, jocuri È™i activitÄƒÈ›i sportive.</p>
                <p>MasÄƒ caldÄƒ de prÃ¢nz È™i gustare oferite prin catering.</p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Disponibilitate</h2>
                <p><?php echo esc_html( $contact['registration_notice'] ); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url( edugreen_page_url( 'inscriere' ) ); ?>">AcceseazÄƒ Ã®nscrierea</a>
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
