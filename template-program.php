<?php
/*
Template Name: Program Activități
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
            <p class="eyebrow">Programul activităților</p>
            <h1>Orar Edu Green Afterschool</h1>
            <p>
                Programul principal se desfășoară de luni până vineri, în intervalul 12:00 - 16:30,
                cu îndrumare pentru teme, activități educative și timp de joacă.
            </p>
            <ul class="program-list">
                <li><?php echo esc_html( $contact['program_main'] ); ?></li>
                <li><?php echo esc_html( $contact['program_workshops'] ); ?></li>
                <li>Atelierele de dezvoltare personală sunt opționale și se desfășoară contra cost.</li>
                <li>Transportul de la școală la afterschool este disponibil contra cost.</li>
            </ul>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>Activități incluse</h2>
                <p>Îndrumare teme cu profesor de învățământ primar, jocuri și activități sportive.</p>
                <p>Masă caldă de prânz și gustare oferite prin catering.</p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Disponibilitate</h2>
                <p><?php echo esc_html( $contact['registration_notice'] ); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url( edugreen_page_url( 'inscriere' ) ); ?>">Accesează înscrierea</a>
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
