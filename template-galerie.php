<?php
/*
Template Name: Galerie EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$poster_url   = get_template_directory_uri() . '/afis_deschidere.jpg';
$daily_images = edugreen_collect_local_images( 'poze', 0, false );
$event_images = edugreen_collect_local_images( 'poze/evenimente_trecute', 0, true );

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <p class="eyebrow">Galerie foto si video</p>
            <h1>Momente Edu Green Afterschool</h1>
    
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container" data-reveal>
            <figure class="poster-frame">
                <img src="<?php echo esc_url( $poster_url ); ?>" alt="Afis Edu Green Afterschool">
                <figcaption>Afisul oficial de prezentare Edu Green Afterschool.</figcaption>
            </figure>
        </div>
    </section>

    <?php if ( ! empty( $daily_images ) ) : ?>
        <section class="section-shell">
            <div class="container">
                <div class="section-heading" data-reveal>
                    <p class="eyebrow">Fotografii</p>
                    <h2>Activitati zilnice (<?php echo esc_html( count( $daily_images ) ); ?> imagini)</h2>
                </div>

                <div class="gallery-grid">
                    <?php foreach ( $daily_images as $index => $photo ) : ?>
                        <figure class="gallery-item" data-reveal>
                            <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( 'Foto Edu Green Afterschool ' . ( $index + 1 ) ); ?>" loading="lazy">
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( ! empty( $event_images ) ) : ?>
        <section class="section-shell section-shell-soft">
            <div class="container">
                <div class="section-heading" data-reveal>
                    <p class="eyebrow">Afise evenimente</p>
                    <h2>Evenimente trecute (<?php echo esc_html( count( $event_images ) ); ?> imagini)</h2>
                </div>

                <div class="gallery-grid">
                    <?php foreach ( $event_images as $index => $photo ) : ?>
                        <figure class="gallery-item" data-reveal>
                            <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( 'Afis eveniment Edu Green ' . ( $index + 1 ) ); ?>" loading="lazy">
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
