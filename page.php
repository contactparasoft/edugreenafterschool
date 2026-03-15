<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'page-content-box' ); ?> data-reveal>
                        <header class="page-header">
                            <h1><?php the_title(); ?></h1>
                        </header>

                        <div class="editor-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <article class="page-content-box" data-reveal>
                    <h1>Con&#539;inut indisponibil</h1>
                    <p>Pagina nu con&#539;ine informa&#539;ii &#238;n acest moment.</p>
                </article>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
