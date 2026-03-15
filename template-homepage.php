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
    <?php get_template_part( 'template-parts/content', 'homepage' ); ?>
</main>

<?php get_footer(); ?>
