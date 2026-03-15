<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact      = edugreen_contact_data();
$poster_url   = get_template_directory_uri() . '/afis_deschidere.jpg';
$program_url  = edugreen_page_url( 'program' );
$contact_url  = edugreen_page_url( 'contact' );
$signup_url   = edugreen_page_url( 'inscriere' );
$gallery_url  = edugreen_page_url( 'galerie' );
$gallery_images = edugreen_collect_local_images( 'poze', 6 );
?>
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-copy" data-reveal>
            <p class="eyebrow">NOU din aceastÄƒ toamnÄƒ Ã®n È˜elimbÄƒr</p>
            <h1>Edu Green Afterschool</h1>
            <p>
                Un loc unde copiii beneficiazÄƒ de educaÈ›ie non-formalÄƒ È™i timp de calitate,
                Ã®ntr-un program complet care combinÄƒ Ã®nvÄƒÈ›area, joaca È™i dezvoltarea personalÄƒ.
            </p>

            <div class="hero-cta-group">
                <a class="btn btn-primary" href="<?php echo esc_url( $signup_url ); ?>">SolicitÄƒ Ã®nscriere</a>
                <a class="btn btn-ghost" href="<?php echo esc_url( $program_url ); ?>">Vezi programul</a>
            </div>

            <div class="quick-metrics">
                <article>
                    <strong>2 grupe</strong>
                    <span>Grupa germanÄƒ È™i grupa romÃ¢nÄƒ, 12-15 copii/grupÄƒ</span>
                </article>
                <article>
                    <strong>12:00 - 16:30</strong>
                    <span>Program zilnic Luni - Vineri</span>
                </article>
                <article>
                    <strong>16:30 - 17:30</strong>
                    <span>Ateliere opÈ›ionale de dezvoltare personalÄƒ</span>
                </article>
                <article>
                    <strong>Locuri limitate</strong>
                    <span>ÃŽnscrierile se fac Ã®n ordinea solicitÄƒrilor</span>
                </article>
            </div>
        </div>

        <div class="hero-poster" data-reveal>
            <img src="<?php echo esc_url( $poster_url ); ?>" alt="AfiÈ™ Edu Green Afterschool">
        </div>
    </div>
</section>

<section class="section-shell">
    <div class="container">
        <div class="section-heading" data-reveal>
            <p class="eyebrow">Grupe disponibile</p>
            <h2>Coordonate de profesori dedicaÈ›i</h2>
        </div>

        <div class="card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h3>Grupa germanÄƒ</h3>
                <p>12-15 copii, coordonatÄƒ de Prof. Anca Rodean.</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Contact: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
            </article>

            <article class="info-card" data-reveal>
                <h3>Grupa romÃ¢nÄƒ</h3>
                <p>12-15 copii, coordonatÄƒ de Prof. Alexandra NiÈ›Äƒ.</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Contact: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
            </article>
        </div>
    </div>
</section>

<section class="section-shell section-shell-soft">
    <div class="container">
        <div class="section-heading" data-reveal>
            <p class="eyebrow">Ce include programul</p>
            <h2>Beneficii care susÈ›in Ã®nvÄƒÈ›area È™i starea de bine</h2>
        </div>

        <div class="feature-grid">
            <article class="feature-item" data-reveal>
                <h3>ÃŽndrumare teme</h3>
                <p>Suport pentru teme cu profesor Ã®nvÄƒÈ›ÄƒmÃ¢nt primar.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Profesori dedicaÈ›i</h3>
                <p>ActivitÄƒÈ›i coordonate de cadre didactice implicate.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Curte cu loc de joacÄƒ</h3>
                <p>SpaÈ›iu generos pentru joacÄƒ È™i activitÄƒÈ›i Ã®n aer liber.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Jocuri È™i activitÄƒÈ›i sportive</h3>
                <p>ActivitÄƒÈ›i distractive adaptate vÃ¢rstei copiilor.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>MasÄƒ caldÄƒ È™i gustare</h3>
                <p>Catering cu prÃ¢nz È™i gustare incluse Ã®n program.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Ateliere opÈ›ionale</h3>
                <p>Ateliere de dezvoltare personalÄƒ disponibile contra cost.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Transport opÈ›ional</h3>
                <p>Transport de la È™coalÄƒ la afterschool, disponibil contra cost.</p>
            </article>
        </div>
    </div>
</section>

<?php if ( ! empty( $gallery_images ) ) : ?>
<section class="section-shell">
    <div class="container">
        <div class="section-heading" data-reveal>
            <p class="eyebrow">Din activitÄƒÈ›ile zilnice</p>
            <h2>Imagini reale din cadrul Edu Green Afterschool</h2>
        </div>

        <div class="photo-strip">
            <?php foreach ( $gallery_images as $index => $photo ) : ?>
                <figure class="photo-strip-item" data-reveal>
                    <img src="<?php echo esc_url( $photo['url'] ); ?>" alt="<?php echo esc_attr( 'Activitate Edu Green Afterschool ' . ( $index + 1 ) ); ?>" loading="lazy">
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section-shell">
    <div class="container program-panel" data-reveal>
        <div>
            <p class="eyebrow">Program</p>
            <h2>Orar de luni pÃ¢nÄƒ vineri</h2>
        </div>

        <ul class="program-list">
            <li><?php echo esc_html( $contact['program_main'] ); ?></li>
            <li><?php echo esc_html( $contact['program_workshops'] ); ?></li>
            <li><?php echo esc_html( $contact['registration_notice'] ); ?></li>
        </ul>

        <div class="program-actions">
            <a class="btn btn-primary" href="<?php echo esc_url( $signup_url ); ?>">Trimite solicitare</a>
            <a class="btn btn-ghost" href="<?php echo esc_url( $gallery_url ); ?>">Vezi galeria</a>
        </div>
    </div>
</section>

<section class="section-shell">
    <div class="container contact-grid">
        <article class="info-card" data-reveal>
            <p class="eyebrow">AdresÄƒ</p>
            <h3>LocaÈ›ia noastrÄƒ</h3>
            <p><?php echo esc_html( $contact['address'] ); ?></p>
            <a class="text-link" href="<?php echo esc_url( $contact_url ); ?>">Detalii contact</a>
        </article>

        <article class="info-card" data-reveal>
            <p class="eyebrow">Email</p>
            <h3>Mesaj rapid</h3>
            <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['office_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['office_email'] ) ); ?></a></p>
            <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['public_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['public_email'] ) ); ?></a></p>
        </article>

        <article class="info-card" data-reveal>
            <p class="eyebrow">Comunitate</p>
            <h3>Facebook Edu Green Afterschool</h3>
            <p>UrmÄƒreÈ™te noutÄƒÈ›ile È™i actualizÄƒrile programului.</p>
            <a class="text-link" href="<?php echo esc_url( $contact['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer">Deschide pagina</a>
        </article>
    </div>
</section>
