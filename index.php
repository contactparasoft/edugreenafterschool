<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <div class="container">
        <section class="section-box">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <h1>Nu există conținut disponibil.</h1>
            <?php endif; ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>
