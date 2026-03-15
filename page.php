<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <section class="page-hero">
                    <h1><?php the_title(); ?></h1>
                </section>

                <section class="section-box">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
