<?php
/*
Template Name: Galerie EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$poster_url     = get_template_directory_uri() . '/afis_deschidere.jpg';
$gallery_images = edugreen_collect_local_images( 'poze', 80 );

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <p class="eyebrow">Galerie foto si video</p>
            <h1>Momente Edu Green Afterschool</h1>
            <p>
                Galeria prezinta imagini reale din activitatile educative si recreative desfasurate
                in cadrul programului. Continutul este incarcat direct din folderul local de poze.
            </p>
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

    <?php if ( ! empty( $gallery_images ) ) : ?>
        <section class="section-shell">
            <div class="container">
                <div class="section-heading" data-reveal>
                    <p class="eyebrow">Fotografii</p>
                    <h2>Activitati si evenimente</h2>
                </div>

                <div class="gallery-grid">
                    <?php foreach ( $gallery_images as $index => $photo ) : ?>
                        <figure class="gallery-item" data-reveal>
                            <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( 'Foto Edu Green Afterschool ' . ( $index + 1 ) ); ?>" loading="lazy">
                        </figure>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
