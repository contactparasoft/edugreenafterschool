<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact        = edugreen_contact_data();
$poster_url     = get_template_directory_uri() . '/afis_deschidere.jpg';
$program_url    = edugreen_page_url( 'program' );
$contact_url    = edugreen_page_url( 'contact' );
$signup_url     = edugreen_page_url( 'inscriere' );
$gallery_url    = edugreen_page_url( 'galerie' );
$gallery_images = edugreen_collect_local_images( 'poze', 6 );
?>
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-copy" data-reveal>
            <p class="eyebrow">NOU din aceast&#259; toamn&#259; &#238;n &#536;elimb&#259;r</p>
            <h1>Edu Green Afterschool</h1>
            <p>
                Un loc unde copiii beneficiaz&#259; de educa&#539;ie non-formal&#259; &#537;i timp de calitate,
                &#238;ntr-un program complet care combin&#259; &#238;nv&#259;&#539;area, joaca &#537;i dezvoltarea personal&#259;.
            </p>

            <div class="hero-cta-group">
                <a class="btn btn-primary" href="<?php echo esc_url( $signup_url ); ?>">Solicit&#259; &#238;nscriere</a>
                <a class="btn btn-ghost" href="<?php echo esc_url( $program_url ); ?>">Vezi programul</a>
            </div>

            <div class="quick-metrics">
                <article>
                    <strong>2 grupe</strong>
                    <span>Grupa german&#259; &#537;i grupa rom&#226;n&#259;, 12-15 copii/grup&#259;</span>
                </article>
                <article>
                    <strong>12:00 - 16:30</strong>
                    <span>Program zilnic Luni - Vineri</span>
                </article>
                <article>
                    <strong>16:30 - 17:30</strong>
                    <span>Ateliere op&#539;ionale de dezvoltare personal&#259;</span>
                </article>
                <article>
                    <strong>Locuri limitate</strong>
                    <span>&Icirc;nscrierile se fac &#238;n ordinea solicit&#259;rilor</span>
                </article>
            </div>
        </div>

        <div class="hero-poster" data-reveal>
            <img src="<?php echo esc_url( $poster_url ); ?>" alt="Afi&#537; Edu Green Afterschool">
        </div>
    </div>
</section>

<section class="section-shell">
    <div class="container">
        <div class="section-heading" data-reveal>
            <p class="eyebrow">Grupe disponibile</p>
            <h2>Coordonate de profesori dedica&#539;i</h2>
        </div>

        <div class="card-grid card-grid-two">
            <article class="info-card" data-reveal>
                <h3>Grupa german&#259;</h3>
                <p>12-15 copii, coordonat&#259; de Prof. Anca Rodean.</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Contact: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
            </article>

            <article class="info-card" data-reveal>
                <h3>Grupa rom&#226;n&#259;</h3>
                <p>12-15 copii, coordonat&#259; de Prof. Alexandra Ni&#539;&#259;.</p>
                <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Contact: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
            </article>
        </div>
    </div>
</section>

<section class="section-shell section-shell-soft">
    <div class="container">
        <div class="section-heading" data-reveal>
            <p class="eyebrow">Ce include programul</p>
            <h2>Beneficii care sus&#539;in &#238;nv&#259;&#539;area &#537;i starea de bine</h2>
        </div>

        <div class="feature-grid">
            <article class="feature-item" data-reveal>
                <h3>&Icirc;ndrumare teme</h3>
                <p>Suport pentru teme cu profesor &#238;nv&#259;&#539;&#259;m&acirc;nt primar.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Profesori dedica&#539;i</h3>
                <p>Activit&#259;&#539;i coordonate de cadre didactice implicate.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Curte cu loc de joac&#259;</h3>
                <p>Spa&#539;iu generos pentru joac&#259; &#537;i activit&#259;&#539;i &#238;n aer liber.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Jocuri &#537;i activit&#259;&#539;i sportive</h3>
                <p>Activit&#259;&#539;i distractive adaptate v&acirc;rstei copiilor.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Mas&#259; cald&#259; &#537;i gustare</h3>
                <p>Catering cu pr&acirc;nz &#537;i gustare incluse &#238;n program.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Ateliere op&#539;ionale</h3>
                <p>Ateliere de dezvoltare personal&#259; disponibile contra cost.</p>
            </article>
            <article class="feature-item" data-reveal>
                <h3>Transport op&#539;ional</h3>
                <p>Transport de la &#537;coal&#259; la afterschool, disponibil contra cost.</p>
            </article>
        </div>
    </div>
</section>

<?php if ( ! empty( $gallery_images ) ) : ?>
<section class="section-shell">
    <div class="container">
        <div class="section-heading" data-reveal>
            <p class="eyebrow">Din activit&#259;&#539;ile zilnice</p>
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
            <h2>Orar de luni p&acirc;n&#259; vineri</h2>
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
            <p class="eyebrow">Adres&#259;</p>
            <h3>Loca&#539;ia noastr&#259;</h3>
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
            <p>Urm&#259;re&#537;te nout&#259;&#539;ile &#537;i actualiz&#259;rile programului.</p>
            <a class="text-link" href="<?php echo esc_url( $contact['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer">Deschide pagina</a>
        </article>
    </div>
</section>
