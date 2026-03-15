<?php
/*
Template Name: Înscriere EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <section class="page-hero">
            <h1>Înscriere / solicitare preliminară</h1>
            <p>Template pentru formular de înscriere și informații pentru părinți.</p>
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
