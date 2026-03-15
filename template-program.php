<?php
/*
Template Name: Program Activitati
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact = edugreen_contact_data();

get_header();
?>

<main class="site-main">
    <section class="section-shell">
        <div class="container page-content-box" data-reveal>
            <p class="eyebrow">Programul activitatilor</p>
            <h1>Orar Edu Green Afterschool</h1>
            <p>
                Programul principal se desfasoara de luni pana vineri, in intervalul 12:00 - 16:30,
                cu indrumare pentru teme, activitati educative si timp de joaca.
            </p>
            <ul class="program-list">
                <li><?php echo esc_html( $contact['program_main'] ); ?></li>
                <li><?php echo esc_html( $contact['program_workshops'] ); ?></li>
                <li>Atelierele de dezvoltare personala sunt optionale si se desfasoara contra cost.</li>
                <li>Transportul de la scoala la afterschool este disponibil contra cost.</li>
            </ul>
        </div>
    </section>

    <section class="section-shell section-shell-soft">
        <div class="container card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h2>Activitati incluse</h2>
                <p>Indrumare teme cu profesor de invatamant primar, jocuri si activitati sportive.</p>
                <p>Masa calda de pranz si gustare oferite prin catering.</p>
            </article>

            <article class="info-card" data-reveal>
                <h2>Disponibilitate</h2>
                <p><?php echo esc_html( $contact['registration_notice'] ); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url( edugreen_page_url( 'inscriere' ) ); ?>">Acceseaza inscrierea</a>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>
