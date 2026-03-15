<?php
/*
Template Name: Homepage EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <section class="hero">
            <h1>EduGreen Afterschool</h1>
            <p>
                Template pentru pagina principală. Aceasta va fi homepage doar dacă tu alegi
                această pagină în Settings → Reading.
            </p>
        </section>

        <section class="section-box">
            <h2>Ce poți pune aici</h2>
            <ul>
                <li>prezentarea serviciilor</li>
                <li>avantajele programului</li>
                <li>secțiuni pentru părinți și copii</li>
                <li>call to action pentru înscriere</li>
            </ul>
        </section>

        <section class="section-box">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
