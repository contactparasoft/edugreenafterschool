<?php
/*
Template Name: Galerie EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$poster_url      = get_template_directory_uri() . '/afis_deschidere.jpg';
$gallery_images  = edugreen_collect_local_images( 'poze', 80 );

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <p class="eyebrow">Galerie foto și video</p>
            <h1>Momente Edu Green Afterschool</h1>
            <p>
                Galeria prezintă imagini reale din activitățile educative și recreative desfășurate
                în cadrul programului. Conținutul poate fi extins direct din folderul local de poze
                sau prin editorul WordPress.
            </p>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container" data-reveal>
            <figure class="poster-frame">
                <img src="<?php echo esc_url( $poster_url ); ?>" alt="Afiș Edu Green Afterschool">
                <figcaption>Afișul oficial de prezentare Edu Green Afterschool.</figcaption>
            </figure>
        </div>
    </section>

    <?php if ( ! empty( $gallery_images ) ) : ?>
        <section class="section-shell">
            <div class="container">
                <div class="section-heading" data-reveal>
                    <p class="eyebrow">Fotografii</p>
                    <h2>Activități și evenimente</h2>
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
