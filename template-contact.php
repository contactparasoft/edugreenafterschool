<?php
/*
Template Name: Contact EduGreen
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <section class="page-hero">
            <h1>Contact</h1>
            <p>Template pentru date de contact, localizare și formular de mesaj.</p>
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
