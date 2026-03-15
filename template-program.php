<?php
/*
Template Name: Program Activitati
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
            <p class="eyebrow">Programul activitatilor</p>
            <h1>Orar Edu Green Afterschool</h1>
            <p>
                Programul principal se desf&#259;&#537;oar&#259; de luni p&acirc;n&#259; vineri, in intervalul 12:00 - 16:30,
                cu indrumare pentru teme, activit&#259;&#539;i educative &#537;i timp de joac&#259;.
            </p>
            <ul class="program-list">
                <li><?php echo esc_html( $contact['program_main'] ); ?></li>
                <li><?php echo esc_html( $contact['program_workshops'] ); ?></li>
                <li>Atelierele de dezvoltare personal&#259; sunt op&#539;ionale &#537;i se desf&#259;&#537;oar&#259; contra cost.</li>
                <li>Transportul de la &#537;coal&#259; la afterschool este disponibil contra cost.</li>
            </ul>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>Activitati incluse</h2>
                <p>Indrumare teme cu profesor de invatamant primar, jocuri &#537;i activit&#259;&#539;i sportive.</p>
                <p>Mas&#259; cald&#259; de pr&acirc;nz &#537;i gustare oferite prin catering.</p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Disponibilitate</h2>
                <p><?php echo esc_html( $contact['registration_notice'] ); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url( edugreen_page_url( 'inscriere' ) ); ?>">Acceseaza inscrierea</a>
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
