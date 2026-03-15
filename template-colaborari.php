<?php
/*
Template Name: Colaborări și Parteneriate
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <section class="page-hero">
            <h1>Colaborări și parteneriate</h1>
            <p>Template pentru parteneri, colaboratori și proiecte comune.</p>
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
