<?php
/*
Template Name: Echipa EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <section class="page-hero">
            <h1>Echipa EduGreen</h1>
            <p>Template pentru prezentarea echipei, profesorilor și coordonatorilor.</p>
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
